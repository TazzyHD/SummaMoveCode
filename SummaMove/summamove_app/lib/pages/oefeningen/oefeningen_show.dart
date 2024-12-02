import 'package:flutter/material.dart';

import 'package:summamove_app/models/oefening.dart';

class OefeningenShowPage extends StatelessWidget {
  final Oefening oefening;

  const OefeningenShowPage({super.key, required this.oefening});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(oefening.titel),
      ),
      body: SingleChildScrollView(
        padding: const EdgeInsets.all(16.0),
        child: Card(
          elevation: 4.0,
          margin: const EdgeInsets.all(8.0),
          child: Padding(
            padding: const EdgeInsets.all(16.0),
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                Text(
                  oefening.titel,
                  style: Theme.of(context).textTheme.headlineSmall,
                ),
                const Divider(height: 32.0),
                Text(
                  oefening.instructie,
                  style: Theme.of(context).textTheme.bodyLarge,
                ),
                // Add more details about the exercise if needed
              ],
            ),
          ),
        ),
      ),
    );
  }
}