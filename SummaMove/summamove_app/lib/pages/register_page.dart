import 'package:flutter/material.dart';
import 'package:summamove_app/services/authentication_services.dart';

class RegisterPage extends StatefulWidget {
  const RegisterPage({super.key, required this.setSignedIn});
  final void Function(bool signedIn) setSignedIn;

  @override
  State<RegisterPage> createState() => _RegisterPageState();
}

class _RegisterPageState extends State<RegisterPage> {
  final _formKey = GlobalKey<FormState>();
  final _nameTextController = TextEditingController();
  final _emailTextController = TextEditingController();
  final _passwordTextController = TextEditingController();
  final _confirmPasswordTextController = TextEditingController();

  @override
  void dispose() {
    _nameTextController.dispose();
    _emailTextController.dispose();
    _passwordTextController.dispose();
    _confirmPasswordTextController.dispose();
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
        title: const Text('Register'),
      ),
      body: Form(
        key: _formKey,
        child: ListView(
          padding: const EdgeInsets.all(16.0),
          children: [
            // name
            TextFormField(
              controller: _nameTextController,
              textInputAction: TextInputAction.next,
              decoration: const InputDecoration(
                  border: OutlineInputBorder(), hintText: 'Name'),
              validator: (value) {
                if (value == null || value.isEmpty) {
                  return 'Enter your name';
                }
                return null;
              },
            ),
            const SizedBox(height: 16.0),
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
                if (value.length < 8) {
                  return 'Password must be at least 8 characters long';
                }
                return null;
              },
            ),
            const SizedBox(height: 16.0),
            // confirm password
            TextFormField(
              controller: _confirmPasswordTextController,
              textInputAction: TextInputAction.done,
              obscureText: true,
              decoration: const InputDecoration(
                  border: OutlineInputBorder(), hintText: 'Confirm Password'),
              validator: (value) {
                if (value == null || value.isEmpty) {
                  return 'Confirm your password';
                }
                if (value != _passwordTextController.text) {
                  return 'Passwords do not match';
                }
                if (value.length < 8) {
                  return 'Password must be at least 8 characters long';
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
                    final registerResult = await AuthenticationServices.register(
                      _emailTextController.text,
                      _passwordTextController.text,
                      _nameTextController.text,
                    );
                    if (registerResult) {
                      final loginResult = await AuthenticationServices.login(
                        _emailTextController.text,
                        _passwordTextController.text,
                      );
                      if (loginResult) {
                        widget.setSignedIn(true);
                        Navigator.popUntil(context, (route) => route.isFirst);
                      } else {
                        widget.setSignedIn(false);
                      }
                    } else {
                      widget.setSignedIn(false);
                    }
                  } catch (e) {
                    widget.setSignedIn(false);
                  }
                }
              },
              child: const Text('Register'),
            ),
          ],
        ),
      ),
    );
  }
}