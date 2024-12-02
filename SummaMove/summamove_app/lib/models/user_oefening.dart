class UserOefeningen {
  final int? id;
  final String oefening_titel;
  final String reps;

  UserOefeningen({
    this.id,
    required this.oefening_titel,
    required this.reps,
  });


  factory UserOefeningen.fromJson(Map<String, dynamic> json) {
    return UserOefeningen(
      id: json['id'] as int?,
      oefening_titel: json['oefening_titel'] ?? "Onbekend",
      reps: json['reps'] ?? '',
    );
  }
}
