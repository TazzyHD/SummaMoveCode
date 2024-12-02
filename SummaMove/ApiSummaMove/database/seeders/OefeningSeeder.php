<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OefeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('oefeningen')->insert([
            [
                'titel' => 'Squat',
                'instructie' => 'Startpositie: Sta rechtop met je voeten op schouderbreedte, tenen licht naar buiten gericht.
                                Handenpositie: Strek je armen voor je uit op schouderhoogte of houd je handen voor je borst.
                                Zak naar beneden: Buig je knieën en duw je heupen naar achteren, alsof je op een stoel gaat zitten. Houd je rug recht en je borst omhoog.
                                Diepte: Zak door totdat je dijen parallel aan de grond zijn (of dieper als je mobiliteit dat toelaat).
                                Duw omhoog: Duw jezelf terug omhoog door je hielen in de grond te drukken en je benen te strekken. Keer terug naar de startpositie.
                                Herhaling: Zorg voor een vloeiende beweging en adem uit terwijl je omhoog komt.',
                'engelse_instructie' => 'Starting position: Stand upright with your feet shoulder-width apart, toes slightly pointing outward.
                                Hand position: Extend your arms in front of you at shoulder height or hold your hands in front of your chest.
                                Lower down: Bend your knees and push your hips back as if you are sitting on a chair. Keep your back straight and your chest up.
                                Depth: Lower yourself until your thighs are parallel to the ground (or deeper if your mobility allows).
                                Push up: Push yourself back up by pressing your heels into the ground and straightening your legs. Return to the starting position.
                                Repetition: Ensure smooth movement and exhale as you rise.',
            ],
            [
                'titel' => 'Push-up',
                'instructie' => 'Startpositie: Plaats je handen op schouderbreedte uit elkaar op de grond, direct onder je schouders. Strek je benen naar achteren zodat je lichaam een rechte lijn vormt van je hoofd tot je hielen.
                                Kernspanning: Span je buikspieren aan en houd je rug recht. Vermijd dat je heupen zakken of omhoog komen.
                                Buig je armen: Laat je lichaam zakken door je ellebogen te buigen, waarbij je je borst richting de grond beweegt. Houd je ellebogen in een hoek van ongeveer 45 graden van je lichaam.
                                Diepte: Ga omlaag totdat je borst bijna de grond raakt.
                                Duw omhoog: Duw jezelf terug omhoog door je armen te strekken, en keer terug naar de startpositie. Houd je lichaam de hele tijd recht.
                                Herhaling: Adem in terwijl je zakt, en adem uit terwijl je jezelf omhoog duwt.',
                'engelse_instructie' => 'Starting position: Place your hands shoulder-width apart on the ground, directly under your shoulders. Extend your legs back so your body forms a straight line from your head to your heels.
                                Core engagement: Engage your core and keep your back straight. Avoid letting your hips sag or rise.
                                Bend your arms: Lower your body by bending your elbows, bringing your chest toward the ground. Keep your elbows at about a 45-degree angle from your body.
                                Depth: Lower down until your chest is just above the ground.
                                Push up: Push yourself back up by extending your arms, returning to the starting position. Keep your body straight throughout.
                                Repetition: Inhale as you lower yourself, and exhale as you push up.',
            ],
            [
                'titel' => 'Plank',
                'instructie' => 'Startpositie: Ga op je buik liggen en plaats je onderarmen op schouderbreedte op de grond, direct onder je schouders. Strek je benen naar achteren, zodat je lichaam een rechte lijn vormt van je hoofd tot je hielen.
                                Kernspanning: Span je buikspieren aan en houd je rug recht. Zorg ervoor dat je heupen niet doorhangen of te hoog zijn.
                                Houding: Houd je lichaam in een rechte lijn, van je hoofd tot je hielen. Trek je schouderbladen naar beneden en naar achteren.
                                Ademhaling: Adem regelmatig en gecontroleerd terwijl je de houding vasthoudt.
                                Houd vast: Probeer de positie zo lang mogelijk vast te houden, zonder dat je vorm verloren gaat.',
                'engelse_instructie' => 'Starting position: Lie face down and place your forearms on the ground, shoulder-width apart, directly under your shoulders. Extend your legs back so your body forms a straight line from your head to your heels.
                                Core engagement: Engage your core and keep your back straight. Make sure your hips don’t sag or rise too high.
                                Body alignment: Keep your body in a straight line from head to heels. Draw your shoulder blades down and back.
                                Breathing: Breathe regularly and controlled while holding the position.
                                Hold: Try to maintain the position for as long as possible without losing form.',
            ],
            [
                'titel' => 'Paardentrap',
                'instructie' => 'Startpositie: Ga op handen en knieën zitten, met je handen recht onder je schouders en je knieën onder je heupen. Houd je rug recht en je hoofd in een neutrale positie.
                                Kernspanning: Span je buikspieren aan om je rug stabiel te houden tijdens de oefening.
                                Beweging: Til één been op door je knie gebogen te houden en duw je hiel omhoog richting het plafond. Houd je heupen recht en beweeg gecontroleerd.
                                Toppositie: Duw totdat je voet naar boven wijst en je dij bijna parallel is aan de grond. Span je bilspieren aan aan het einde van de beweging.
                                Terugkeer: Breng je been gecontroleerd terug naar de startpositie zonder je knie de grond te laten raken.
                                Herhaling: Doe het gewenste aantal herhalingen en wissel dan van been.',
                'engelse_instructie' => 'Starting position: Get on all fours, with your hands directly under your shoulders and knees under your hips. Keep your back straight and your head in a neutral position.
                                Core engagement: Tighten your core to keep your back stable during the exercise.
                                Movement: Lift one leg by keeping your knee bent and pushing your heel upwards toward the ceiling. Keep your hips level and controlled.
                                Top position: Push until your foot points upward, and your thigh is almost parallel to the ground. Squeeze your glutes at the top of the movement.
                                Return: Lower your leg back down to the starting position without letting your knee touch the ground.
                                Repetition: Perform the desired number of reps, then switch to the other leg.',
            ],
            [
                'titel' => 'Mountain climber',
                'instructie' => 'Startpositie: Begin in een hoge plankpositie met je handen direct onder je schouders, je armen gestrekt en je lichaam in een rechte lijn van je hoofd tot je hielen.
                                Kernspanning: Span je buikspieren aan om je rug recht te houden en voorkom dat je heupen zakken of omhoog komen.
                                Beweging: Breng je rechterknie naar je borst terwijl je linkerbeen gestrekt blijft. Houd je bovenlichaam stabiel en vermijd schommelen.
                                Snelle wissel: Wissel snel van been door je rechterbeen terug te strekken en je linkerknie naar je borst te brengen.
                                Continu: Blijf deze beweging afwisselend uitvoeren, alsof je aan het "klimmen" bent. Houd een vloeiend en snel ritme aan, terwijl je de controle over je vorm behoudt.
                                Ademhaling: Adem regelmatig in en uit tijdens de oefening, terwijl je de beweging in een gecontroleerd tempo uitvoert.',
                'engelse_instructie' => 'Starting position: Begin in a high plank position with your hands directly under your shoulders, arms straight, and your body forming a straight line from head to heels.
                                Core engagement: Tighten your core to keep your back straight and prevent your hips from sagging or rising.
                                Movement: Bring your right knee toward your chest while keeping your left leg extended. Keep your upper body stable and avoid rocking.
                                Quick switch: Quickly switch legs by extending your right leg back and bringing your left knee toward your chest.
                                Continuous movement: Continue alternating legs in a running motion, as if youre climbing. Maintain a smooth and fast rhythm while keeping control of your form.
                                    Breathing: Breathe regularly throughout the exercise, maintaining a controlled pace.',
            ],
            [
                'titel' => 'Burpee',
                'instructie' => 'Startpositie: Sta rechtop met je voeten op schouderbreedte en je armen langs je lichaam.
                                Zak omlaag: Buig je knieën en plaats je handen op de grond voor je terwijl je in een gehurkte positie zakt.
                                Plankpositie: Spring met je voeten naar achteren om in een hoge plankpositie te komen, waarbij je lichaam in een rechte lijn staat van je hoofd tot je hielen.
                                Push-up (optioneel): Doe een push-up door je borst richting de grond te brengen en jezelf weer omhoog te duwen.
                                Spring terug: Breng je voeten met een sprongetje terug naar je handen in de gehurkte positie.
                                Spring omhoog: Duw jezelf explosief omhoog en maak een sprong terwijl je je handen boven je hoofd strekt.
                                Herhaling: Land zachtjes en ga direct over naar de volgende herhaling door weer in de gehurkte positie te zakken.',
                'engelse_instructie' => 'Starting position: Stand upright with your feet shoulder-width apart and arms at your sides.
                                Lower down: Squat down and place your hands on the ground in front of you, lowering into a crouching position.
                                Plank position: Jump your feet back into a high plank position, keeping your body in a straight line from head to heels.
                                Push-up (optional): Perform a push-up by lowering your chest toward the ground and pushing yourself back up.
                                Jump back: Hop your feet back toward your hands into the crouched position.
                                Jump up: Explosively jump upward, reaching your hands overhead as you jump.
                                Repetition: Land softly and immediately move back into the squat to start the next repetition.',
            ],
            [
                'titel' => 'Lunges',
                'instructie' => 'Startpositie: Sta rechtop met je voeten op heupbreedte en je handen aan je zij of voor je borst voor balans.
                                Stap naar voren: Zet met één been een grote stap naar voren. Zorg ervoor dat je bovenlichaam rechtop blijft.
                                Zak naar beneden: Buig beide knieën, waarbij je achterste knie naar de grond zakt (zonder de grond te raken) en je voorste knie boven je enkel blijft. Je achterste knie moet bijna de grond raken, en je voorste dij moet parallel aan de grond zijn.
                                Duw omhoog: Duw jezelf omhoog door je voorste voet stevig in de grond te drukken en je benen te strekken, waarna je terugkeert naar de startpositie.
                                Wissel van been: Herhaal de beweging met het andere been en wissel af voor elke herhaling.
                                Herhaling: Voer de gewenste hoeveelheid herhalingen uit voor beide benen.',
                'engelse_instructie' => 'Starting position: Stand upright with your feet hip-width apart and your hands at your sides or in front of your chest for balance.
                                Step forward: Take a large step forward with one leg, keeping your upper body upright.
                                Lower down: Bend both knees, lowering your back knee toward the ground (without touching it) and keeping your front knee directly above your ankle. Your back knee should nearly touch the ground, and your front thigh should be parallel to the floor.
                                Push up: Push yourself back up by pressing firmly into the ground with your front foot and straightening your legs, returning to the starting position.
                                Switch legs: Repeat the movement with the opposite leg, alternating with each repetition.
                                Repetition: Complete the desired number of repetitions for both legs.',
            ],
            [
                'titel' => 'Wall sit',
                'instructie' => 'Startpositie: Ga met je rug tegen een stevige muur staan. Je voeten staan op schouderbreedte en ongeveer 60 cm van de muur verwijderd.
                                Zak omlaag: Glijd langzaam met je rug langs de muur naar beneden totdat je knieën in een hoek van 90 graden zijn gebogen, alsof je op een onzichtbare stoel zit. Je dijen moeten parallel aan de grond zijn.
                                Houding: Houd je rug, schouders en hoofd tegen de muur gedrukt. Houd je handen langs je lichaam of op je bovenbenen, zonder op je knieën te duwen.
                                Houd vast: Blijf in deze positie zo lang mogelijk of voor een bepaalde tijd, bijvoorbeeld 30 seconden tot een minuut.
                                Opstaan: Kom langzaam weer omhoog door met je rug langs de muur te glijden wanneer de tijd verstreken is.',
                'engelse_instructie' => 'Starting position: Stand with your back against a sturdy wall. Your feet should be shoulder-width apart and about 60 cm away from the wall.
                                Lower down: Slowly slide down the wall until your knees are bent at a 90-degree angle, as if sitting on an invisible chair. Your thighs should be parallel to the ground.
                                Posture: Keep your back, shoulders, and head pressed against the wall. Place your hands by your sides or on your thighs without pressing down on your knees.
                                Hold position: Stay in this position for as long as possible or for a set amount of time, such as 30 seconds to a minute.
                                Stand up: Slowly slide back up the wall when the time is up.',
            ],
            [
                'titel' => 'Crunch',
                'instructie' => 'Startpositie: Ga op je rug liggen met je knieën gebogen en je voeten plat op de grond op heupbreedte. Plaats je handen achter je hoofd, ellebogen naar buiten gericht. Houd je hoofd in een neutrale positie en kijk naar het plafond.
                                Kernspanning: Span je buikspieren aan en druk je onderrug tegen de grond.
                                Opwaartse beweging: Til je schouders en bovenrug langzaam van de grond door je buikspieren samen te trekken. Houd je onderrug op de grond en vermijd het forceren van je nek met je handen.
                                Toppositie: Stop wanneer je schouderbladen van de grond zijn en je buikspieren volledig zijn aangespannen. Houd deze positie kort vast.
                                Terugkeer: Laat jezelf langzaam zakken naar de startpositie zonder je hoofd volledig op de grond te laten rusten.
                                Herhaling: Herhaal de beweging voor het gewenste aantal herhalingen.',
                'engelse_instructie' => 'Starting position: Lie on your back with your knees bent and feet flat on the floor, hip-width apart. Place your hands behind your head with your elbows out to the sides. Keep your head in a neutral position, looking up at the ceiling.
                                Core engagement: Tighten your abdominal muscles and press your lower back against the floor.
                                Upward movement: Slowly lift your shoulders and upper back off the floor by contracting your abdominal muscles. Keep your lower back on the ground and avoid pulling your neck with your hands.
                                Top position: Stop when your shoulder blades are off the ground, and your abs are fully engaged. Hold briefly.
                                Lower down: Slowly lower yourself back to the starting position without letting your head rest fully on the floor.
                                Repetition: Repeat the movement for the desired number of repetitions.',
            ]
        ]);
    }
}
