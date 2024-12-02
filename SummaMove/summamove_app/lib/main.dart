import 'package:flutter/material.dart';
import 'package:summamove_app/pages/home_page.dart';
import 'package:summamove_app/pages/about_page.dart';
import 'package:summamove_app/pages/oefeningen/oefeningen_index.dart';
import 'package:summamove_app/pages/User_Oefeningen/prestaties_index.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatefulWidget {
  const MyApp({super.key});

  @override
  State<MyApp> createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  bool _signedIn = true;
  String _language = 'Nederlands';

  void setSignedIn(bool signedIn) {
    setState(() {
      _signedIn = signedIn;
    });
  }

  void setLanguage(String language) {
    setState(() {
      _language = language;
    });
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: DefaultTabController(
        length: 4,
        child: Scaffold(
          appBar: AppBar(
            backgroundColor: Colors.green,
            title: const Text('SummaMove'),
          ),
          drawer: Drawer(
            child: ListView(
              padding: EdgeInsets.zero,
              children: <Widget>[
                const DrawerHeader(
                  decoration: BoxDecoration(
                    color: Colors.green,
                  ),
                  child: Text(
                    'Menu',
                    style: TextStyle(
                      color: Colors.white,
                      fontSize: 24,
                    ),
                  ),
                ),
                ListTile(
                  leading: const Icon(Icons.language),
                  title: const Text('Taal'),
                  onTap: () {
                    showDialog(
                      context: context,
                      builder: (BuildContext context) {
                        return AlertDialog(
                          title: const Text('Kies een taal'),
                          content: Column(
                            mainAxisSize: MainAxisSize.min,
                            children: <Widget>[
                              RadioListTile<String>(
                                title: const Text('Nederlands'),
                                value: 'Nederlands',
                                groupValue: _language,
                                onChanged: (String? value) {
                                  setLanguage(value!);
                                  Navigator.of(context).pop();
                                },
                              ),
                              RadioListTile<String>(
                                title: const Text('English'),
                                value: 'English',
                                groupValue: _language,
                                onChanged: (String? value) {
                                  setLanguage(value!);
                                  Navigator.of(context).pop();
                                },
                              ),
                            ],
                          ),
                        );
                      },
                    );
                  },
                ),
                ListTile(
                  leading: const Icon(Icons.info),
                  title: const Text('About'),
                  onTap: () {
                    Navigator.pushNamed(context, '/about');
                  },
                ),
              ],
            ),
          ),
          bottomNavigationBar: Container(
            color: Colors.green,
            child: const TabBar(
              tabs: [
                Tab(icon: Icon(Icons.home)),
                Tab(icon: Icon(Icons.accessibility)),
                Tab(icon: Icon(Icons.sports)),
                Tab(icon: Icon(Icons.info)),
              ],
            ),
          ),
          body: TabBarView(
            children: [
              HomePage(setSignedIn: setSignedIn, signedIn: _signedIn),
              OefeningenIndexPage(setSignedIn: setSignedIn, signedIn: _signedIn),
              UserOefeningenIndex(setSignedIn: setSignedIn, signedIn: _signedIn),
              const AboutPage(),
            ],
          ),
        ),
      ),
      routes: {
        '/home': (context) => HomePage(setSignedIn: setSignedIn, signedIn: _signedIn),
        '/oefeningen': (context) => OefeningenIndexPage(setSignedIn: setSignedIn, signedIn: _signedIn),
        '/about': (context) => const AboutPage(),
      },
    );
  }
}