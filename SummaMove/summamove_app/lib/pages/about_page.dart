import 'package:flutter/material.dart';

class AboutPage extends StatelessWidget {
  const AboutPage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('About'),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: <Widget>[
            Row(
              mainAxisAlignment: MainAxisAlignment.spaceBetween,
              children: [
                const Text(
                  'About This App',
                  style: TextStyle(fontSize: 24, fontWeight: FontWeight.bold),
                ),
                ElevatedButton(
                  onPressed: () {
                    showLicenses(context);
                  },
                  child: const Text('Licenses'),
                ),
              ],
            ),
            const SizedBox(height: 16),
            const Text(
              'This app is designed to help users manage their exercises and track their progress. It provides a variety of features including exercise tracking, progress monitoring, and more.',
              style: TextStyle(fontSize: 16),
            ),
            const SizedBox(height: 16),
            const Text(
              'Version: 1.0.0',
              style: TextStyle(fontSize: 16),
            ),
            const SizedBox(height: 16),
            const Text(
              'Developed by: "Jaap,Thomas,Angelo"',
              style: TextStyle(fontSize: 16),
            ),
            const SizedBox(height: 16),
            const Text(
              'Contact: support@summamove.com',
              style: TextStyle(fontSize: 16),
            ),
          ],
        ),
      ),
    );
  }
}

void showLicenses(BuildContext context) {
  showAboutDialog(
    context: context,
    applicationName: 'My App',
    applicationVersion: '1.0.0',
    children: <Widget>[
      const Text('Licenses dialog'),
    ],
  );
}