import 'package:flutter/material.dart';
import 'package:summamove_app/services/authentication_services.dart';

class LoginPage extends StatefulWidget {
  const LoginPage({super.key, required this.setSignedIn});
  final void Function(bool signedIn) setSignedIn;

  @override
  State<LoginPage> createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {
  final _formKey = GlobalKey<FormState>();
  final _emailTextController = TextEditingController();
  final _passwordTextController = TextEditingController();

  @override
  void dispose() {
    _emailTextController.dispose();
    _passwordTextController.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        leading: IconButton(
          icon: const Icon(Icons.arrow_back),
          onPressed: () {
            Navigator.pop(context);
          },
        ),
        title: const Text('Login'),
      ),
      body: Form(
        key: _formKey,
        child: ListView(
          padding: const EdgeInsets.all(16.0),
          children: [
            // email
            TextFormField(
              controller: _emailTextController,
              textInputAction: TextInputAction.next,
              decoration: const InputDecoration(
                  border: OutlineInputBorder(), hintText: 'Email address'),
              validator: (value) {
                if (value == null || value.isEmpty) {
                  return 'Enter your email address';
                }
                return null;
              },
            ),
            const SizedBox(height: 16.0),
            // password
            TextFormField(
              controller: _passwordTextController,
              textInputAction: TextInputAction.next,
              obscureText: true,
              decoration: const InputDecoration(
                  border: OutlineInputBorder(), hintText: 'Password'),
              validator: (value) {
                if (value == null || value.isEmpty) {
                  return 'Enter your password';
                }
                return null;
              },
            ),
            const SizedBox(height: 16.0),
            // submit button
            ElevatedButton(
              onPressed: () async {
                if (_formKey.currentState!.validate()) {
                  try {
                    final result = await AuthenticationServices.login(
                      _emailTextController.text,
                      _passwordTextController.text,
                    );
                    if (result) {
                      widget.setSignedIn(true);
                      Navigator.popUntil(context, (route) => route.isFirst);
                    } else {
                      widget.setSignedIn(false);
                      ScaffoldMessenger.of(context).showSnackBar(
                        const SnackBar(
                          content: Text('Incorrect email or password'),
                        ),
                      );
                    }
                  } catch (e) {
                    widget.setSignedIn(false);
                    ScaffoldMessenger.of(context).showSnackBar(
                      const SnackBar(
                        content: Text('An error occurred. Please try again.'),
                      ),
                    );
                  }
                }
              },
              child: const Text('Login'),
            ),
          ],
        ),
      ),
    );
  }
}