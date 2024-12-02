import 'dart:convert';
import 'package:flutter/cupertino.dart';
import 'package:http/http.dart' as http;
import 'package:summamove_app/services/authentication_services.dart';
import '../models/user_oefening.dart';

const String baseUrl = 'http://10.0.2.2:8000/api';  // Zorg ervoor dat je baseUrl consistent is

class UserOefeningenService {
  Future<List<UserOefeningen>> getAll() async {
    List<UserOefeningen> oefeningen = [];
    final response = await http.get(
      Uri.parse('$baseUrl/user_oefeningen'),
      headers: <String, String>{
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ${AuthenticationServices.bearerToken}',
      },
    );
    if (response.statusCode != 200) {
      throw Exception('Fout bij het ophalen van alle oefeningen (${response.statusCode}).');
    }
    debugPrint("Resultaat getAll: ${response.body}");
    final List<dynamic> data = jsonDecode(response.body);
    for (int i = 0; i < data.length; i++) {
      final user_oefening = UserOefeningen(
        id: data[i]['id'] as int?,
        oefening_titel: data[i]['oefening'] ?? 1,
        reps: data[i]['reps'] ?? '',
      );
      oefeningen.add(user_oefening);
    }
    return oefeningen;
  }

  Future<UserOefeningen> post(UserOefeningen useroefening) async {
    final response = await http.post(
      Uri.parse('$baseUrl/user_oefeningen'),
      headers: <String, String>{
        'Content-Type': 'application/json',
      },
      body: jsonEncode({
        'oefening_titel': useroefening.oefening_titel,
        'reps': useroefening.reps,
      }),
    );
    if (response.statusCode != 201) {
      throw Exception('Het is niet gelukt om de oefening aan de gebruiker toe te voegen');
    }
    final result = jsonDecode(response.body);
    return UserOefeningen(
        id: result['id'], oefening_titel: result['oefening_titel'], reps: result['reps']);
  }

  Future<UserOefeningen> put(int userOefeningId, UserOefeningen useroefening) async {
    final response = await http.put(
      Uri.parse('$baseUrl/user_oefeningen/$userOefeningId'),
      headers: <String, String>{
        'Content-Type': 'application/json',
      },
      body: jsonEncode({
        'id': useroefening.id,
        'oefening_titel': useroefening.oefening_titel,
        'reps': useroefening.reps,
      }),
    );
    if (response.statusCode != 200) {
      throw Exception('Het is niet gelukt om de oefening aan de gebruiker toe te voegen');
    }
    final result = jsonDecode(response.body);
    return UserOefeningen(
        id: result['id'], oefening_titel: result['oefening_titel'], reps: result['reps']);
  }

  Future<bool> delete(int userOefeningId) async {
    final response = await http.delete(
      Uri.parse('$baseUrl/user_oefeningen/$userOefeningId'),
      headers: <String, String>{
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ${AuthenticationServices.bearerToken}',  // Voeg de auth header toe
      },
    );

    // Controleer of de statuscode gelijk is aan 200 (OK)
    if (response.statusCode == 200) {
      debugPrint('Delete successful for ID: $userOefeningId');
      return true;
    } else {
      // Toon foutmelding als de response niet 200 is
      debugPrint('Delete failed: ${response.statusCode} - ${response.body}');
      return false;
    }
  }
}
