import 'package:flutter/material.dart';
import 'package:summamove_app/services/oefeningen_service.dart';
import 'package:summamove_app/models/oefening.dart';
import 'package:summamove_app/pages/oefeningen/oefeningen_show.dart';

class OefeningenIndexPage extends StatefulWidget {
  const OefeningenIndexPage({super.key, required this.setSignedIn, required this.signedIn});
  final void Function(bool signedIn) setSignedIn;
  final bool signedIn;

  @override
  State<OefeningenIndexPage> createState() => _OefeningenIndexState();
}

class _OefeningenIndexState extends State<OefeningenIndexPage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Oefeningen'),
      ),
      body: FutureBuilder<List<Oefening>>(
        future: getAll(),
        builder: (context, snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            return const Center(child: CircularProgressIndicator());
          } else if (snapshot.hasError) {
            return Center(child: Text('Error: ${snapshot.error}'));
          } else if (!snapshot.hasData || snapshot.data!.isEmpty) {
            return const Center(child: Text('No exercises found.'));
          } else {
            return Padding(
              padding: const EdgeInsets.all(8.0),
              child: ListView.builder(
                itemCount: snapshot.data!.length,
                itemBuilder: (context, index) {
                  final oefening = snapshot.data![index];
                  return Card(
                    margin: const EdgeInsets.symmetric(vertical: 8.0),
                    child: ListTile(
                      title: Text(oefening.titel),
                      onTap: () {
                        Navigator.push(
                          context,
                          MaterialPageRoute(
                            builder: (context) => OefeningenShowPage(oefening: oefening),
                          ),
                        );
                      },
                    ),
                  );
                },
              ),
            );
          }
        },
      ),
    );
  }
}