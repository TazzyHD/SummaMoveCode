import 'package:summamove_app/models/user_oefening.dart';
import 'package:flutter/material.dart';

class PrestatieEdit extends StatefulWidget {
  const PrestatieEdit({Key? key, required this.userOefening}) : super(key: key);
  final UserOefeningen userOefening;

  @override
  State<PrestatieEdit> createState() => _PrestatieEditState();
}

class _PrestatieEditState extends State<PrestatieEdit> {
  final _formKey = GlobalKey<FormState>();
  final _repsController = TextEditingController();

  @override
  void initState() {
    _repsController.text = widget.userOefening.reps.toString();
    super.initState();
  }

  @override
  void dispose() {
    _repsController.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text('Prestatie - Edit')),
      body: Form(
        key: _formKey,
        child: Column(
          children: [
            // Reps
            TextFormField(
              controller: _repsController,
              textInputAction: TextInputAction.next,
              decoration: const InputDecoration(
                border: OutlineInputBorder(),
                labelText: 'Reps',
              ),
              validator: (value) {
                if (value == null || value.isEmpty) {
                  return 'Vul reps in';
                }
                return null;
              },
            ),
            // Save / Cancel
            Row(
              children: [
                ElevatedButton(
                  onPressed: () {
                    if (_formKey.currentState!.validate() == false) {
                      ScaffoldMessenger.of(context).showSnackBar(
                        const SnackBar(content: Text('Verbeter de fouten')),
                      );
                      return;
                    }
                    var updatedUserOefening = UserOefeningen(
                      id: widget.userOefening.id,
                      oefening_titel: widget.userOefening.oefening_titel,
                      reps: _repsController.text,
                    );
                    Navigator.pop(context, updatedUserOefening);
                  },
                  child: const Text('Bewaren'),
                ),
                ElevatedButton(
                  onPressed: () {
                    Navigator.of(context).pop();
                  },
                  child: const Text('Annuleren'),
                ),
              ],
            )
          ],
        ),
      ),
    );
  }
}
