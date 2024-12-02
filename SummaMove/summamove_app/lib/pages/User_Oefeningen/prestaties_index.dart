import 'package:flutter/material.dart';
import 'package:summamove_app/models/user_oefening.dart';
import 'package:summamove_app/pages/User_Oefeningen/prestaties_edit.dart';
import 'package:summamove_app/services/user_oefeningen_service.dart';

class UserOefeningenIndex extends StatefulWidget {
  final Function(bool) setSignedIn;
  final bool signedIn;

  const UserOefeningenIndex({Key? key, required this.setSignedIn, required this.signedIn}) : super(key: key);

  @override
  _UserOefeningenIndexState createState() => _UserOefeningenIndexState();
}

class _UserOefeningenIndexState extends State<UserOefeningenIndex> {
  @override
  Widget build(BuildContext context) {
    if (!widget.signedIn) {
      return Scaffold(
        appBar: AppBar(
          title: const Text('User Oefeningen Index'),
        ),
        body: const Center(
          child: Text('Please log in to view your oefeningen.'),
        ),
      );
    }

    return Scaffold(
      appBar: AppBar(
        title: const Text('User Oefeningen Index'),
      ),
      body: FutureBuilder<List<UserOefeningen>>(
        future: UserOefeningenService().getAll(),
        builder: (context, snapshot) {
          if (snapshot.hasError) {
            return Text(snapshot.error.toString());
          }
          if (!snapshot.hasData) {
            return const CircularProgressIndicator();
          }
          final userOefeningen = snapshot.data!;
          return ListView.builder(
            itemCount: userOefeningen.length,
            itemBuilder: (context, index) {
              final oefening = userOefeningen[index];
              return ListTile(
                title: Text('Oefening: ${oefening.oefening_titel}'),
                subtitle: Text('Reps: ${oefening.reps}'),
                trailing: Row(
                  mainAxisSize: MainAxisSize.min,
                  children: [
                    GestureDetector(
                      onTap: () async {
                        await Navigator.of(context).push(MaterialPageRoute(
                          builder: (context) => PrestatieEdit(userOefening: oefening),
                        ));
                        setState(() {});
                      },
                      child: const Icon(Icons.edit),
                    ),
                    GestureDetector(
                      onTap: () async {
                        if (oefening.id != null) {
                          bool success = await UserOefeningenService().delete(oefening.id!);
                          if (success) {
                            setState(() {
                              userOefeningen.removeAt(index);
                            });
                          } else {
                            showDialog(
                              context: context,
                              builder: (context) {
                                return AlertDialog(
                                  title: const Text('Delete Failed'),
                                  content: const Text('Er is een probleem bij het verwijderen van de oefening.'),
                                  actions: [
                                    TextButton(
                                      onPressed: () => Navigator.of(context).pop(),
                                      child: const Text('Ok'),
                                    ),
                                  ],
                                );
                              },
                            );
                          }
                        }
                      },
                      child: const Icon(Icons.delete),
                    ),
                  ],
                ),
              );
            },
          );
        },
      ),
    );
  }
}