class Oefening {
  final int id;
  final String titel;
  final String instructie;
  final String? engelse_instructie; // Make it nullable

  Oefening({
    required this.id,
    required this.titel,
    required this.instructie,
    this.engelse_instructie, // Optional parameter
  });

  factory Oefening.fromJson(Map<String, dynamic> json) {
    return Oefening(
      id: json['id'],
      titel: json['titel'],
      instructie: json['instructie'],
      engelse_instructie: json['engelse_instructie'],
    );
  }
}
