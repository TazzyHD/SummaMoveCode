import 'dart:convert';
import 'package:http/http.dart' as http;
import '../models/oefening.dart';

const String baseUrl = 'http://10.0.2.2:8000/api';

Future<List<Oefening>> getAll() async {
  List<Oefening> oefeningen = [];
  final response = await http.get(Uri.parse('$baseUrl/oefeningen'));
  if (response.statusCode != 200) {
    throw Exception(
        'Fout bij het ophalen van alle oefeningen (${response.statusCode}).');
  }
  final List<dynamic> data = jsonDecode(response.body);
  for (int i = 0; i < data.length; i++) {
    final oefening = Oefening(
      id: data[i]['id'],
      titel: data[i]['titel'],
      instructie: data[i]['instructie'],
      engelse_instructie: data[i]['engelse_instructie'],
    );
    oefeningen.add(oefening);
  }
  return oefeningen;
}
