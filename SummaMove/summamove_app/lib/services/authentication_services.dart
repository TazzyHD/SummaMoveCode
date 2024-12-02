import 'dart:convert';
import 'package:http/http.dart' as http;

class AuthenticationServices {
  static const String _baseApi = 'http://10.0.2.2:8000/api';
  static String _bearerToken = '';
  static bool _isLoggedIn = false;

  // api/register/
  static Future<bool> register(
      String email, String password, String name) async {
    final response = await http.post(
      Uri.parse('$_baseApi/register'),
      headers: <String, String>{
        'Content-Type': 'application/json; charset=UTF-8',
      },
      body: jsonEncode(<String, String>{
        'name': name,
        'email': email,
        'password': password,
        'password_confirmation': password
      }),
    );
    return response.statusCode == 200;
  }

  // api/login/
  static Future<bool> login(String email, String password) async {
    final response = await http.post(
      Uri.parse('$_baseApi/login'),
      headers: <String, String>{
        'Content-Type': 'application/json; charset=UTF-8',
      },
      body: jsonEncode(<String, String>{'email': email, 'password': password}),
    );
    if (response.statusCode == 200) {
      final result = jsonDecode(response.body);
      print(response.body);
      _bearerToken = result['access_token'];
      _isLoggedIn = true;
    }
    return response.statusCode == 200;
  }

  static Future<bool> isLoggedIn() async {
    return _isLoggedIn;
  }

  static Future<void> setLoggedIn(bool value) async {
    _isLoggedIn = value;
  }

  static Future<bool> logout(void Function(bool signedIn) setSignedIn) async {
    final response = await http.post(
      Uri.parse('$_baseApi/logout'),
      headers: <String, String>{
        'Content-Type': 'application/json; charset=UTF-8',
        'Authorization': 'Bearer $_bearerToken'
      },
    );
    if (response.statusCode == 200) {
      _bearerToken = '';
      _isLoggedIn = false;
      setSignedIn(false);
      return true;
    }
    return false;
  }

  static String get bearerToken => _bearerToken;

  // New method to get the user ID of the logged-in user
  static Future<String> getUserId() async {
    final response = await http.get(
      Uri.parse('$_baseApi/user'),
      headers: <String, String>{
        'Content-Type': 'application/json; charset=UTF-8',
        'Authorization': 'Bearer $_bearerToken'
      },
    );
    if (response.statusCode == 200) {
      final result = jsonDecode(response.body);
      return result['id'].toString();
    } else {
      throw Exception('Failed to load user ID');
    }
  }
}
