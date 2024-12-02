import 'package:flutter/material.dart';
import 'package:summamove_app/services/authentication_services.dart';
import 'package:summamove_app/pages/login_page.dart';
import 'package:summamove_app/pages/register_page.dart';

class HomePage extends StatefulWidget {
  const HomePage({super.key, required this.setSignedIn, required this.signedIn});
  final void Function(bool signedIn) setSignedIn;
  final bool signedIn;

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Home Page'),
      ),
      body: Center(
        child: widget.signedIn
            ? ElevatedButton(
                onPressed: () async {
                  await AuthenticationServices.logout(widget.setSignedIn);
                  widget.setSignedIn(false);
                },
                child: const Text('Logout'),
              )
            : Column(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  ElevatedButton(
                    onPressed: () {
                      Navigator.push(
                        context,
                        MaterialPageRoute(
                            builder: (context) =>
                                LoginPage(setSignedIn: widget.setSignedIn)),
                      );
                    },
                    child: const Text('Login'),
                  ),
                  const SizedBox(height: 20),
                  ElevatedButton(
                    onPressed: () {
                      Navigator.push(
                        context,
                        MaterialPageRoute(
                            builder: (context) =>
                                RegisterPage(setSignedIn: widget.setSignedIn)),
                      );
                    },
                    child: const Text('Register'),
                  ),
                ],
              ),
      ),
    );
  }
}