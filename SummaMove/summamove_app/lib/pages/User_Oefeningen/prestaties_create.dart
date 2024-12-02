import 'package:flutter/material.dart';
import 'package:summamove_app/models/user_oefening.dart';
import 'package:summamove_app/services/user_oefeningen_service.dart';

class UserOefeningenCreate extends StatefulWidget {
  const UserOefeningenCreate({Key? key}) : super(key: key);

  @override
  State<UserOefeningenCreate> createState() => _UserOefeningenCreateState();
}

class _UserOefeningenCreateState extends State<UserOefeningenCreate> {
  final _formKey = GlobalKey<FormState>();
  final _userIdController = TextEditingController();
  final _oefeningIdController = TextEditingController();
  final _repsController = TextEditingController();

  @override
  void dispose() {
    _userIdController.dispose();
    _oefeningIdController.dispose();
    _repsController.dispose();
    super.dispose();
  }

  Future<void> _saveUserOefening() async {
    if (!_formKey.currentState!.validate()) {
      ScaffoldMessenger.of(context).showSnackBar(
        const SnackBar(content: Text('Verbeter de fouten')),
      );
      return;
    }

    final newUserOefening = UserOefeningen(
      id: 0,
      oefening_titel: _oefeningIdController.text, // Directly assigning as a string
      reps: _repsController.text,
    );


    try {
      await UserOefeningenService().post(newUserOefening);
      Navigator.pop(context, true); // Succesvolle toevoeging, keer terug met resultaat.
    } catch (e) {
      ScaffoldMessenger.of(context).showSnackBar(
        const SnackBar(content: Text('Het is niet gelukt om de oefening toe te voegen')),
      );
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text('Voeg Prestatie Toe')),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Form(
          key: _formKey,
          child: Column(
            children: [
              // User ID
              TextFormField(
                controller: _userIdController,
                keyboardType: TextInputType.number,
                decoration: const InputDecoration(
                  border: OutlineInputBorder(),
                  labelText: 'User ID',
                ),
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Vul een geldige User ID in';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 16),

              // Oefening ID
              TextFormField(
                controller: _oefeningIdController,
                keyboardType: TextInputType.number,
                decoration: const InputDecoration(
                  border: OutlineInputBorder(),
                  labelText: 'Oefening ID',
                ),
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Vul een geldige Oefening ID in';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 16),

              // Reps
              TextFormField(
                controller: _repsController,
                decoration: const InputDecoration(
                  border: OutlineInputBorder(),
                  labelText: 'Reps',
                ),
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Vul een aantal reps in';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 16),

              // Save Button
              ElevatedButton(
                onPressed: _saveUserOefening,
                child: const Text('Opslaan'),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
