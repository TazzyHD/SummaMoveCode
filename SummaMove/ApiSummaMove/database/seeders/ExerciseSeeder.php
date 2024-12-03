<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exercises')->insert([
            [
                'title' => 'Squat',
                'instruction' => 'Starting position: Stand upright with your feet shoulder-width apart, toes slightly pointing outward.
                                Hand position: Extend your arms in front of you at shoulder height or hold your hands in front of your chest.
                                Lower down: Bend your knees and push your hips back as if you are sitting on a chair. Keep your back straight and your chest up.
                                Depth: Lower yourself until your thighs are parallel to the ground (or deeper if your mobility allows).
                                Push up: Push yourself back up by pressing your heels into the ground and straightening your legs. Return to the starting position.
                                Repetition: Ensure smooth movement and exhale as you rise.',
            ],
            [
                'title' => 'Push-up',
                'instruction' => 'Starting position: Place your hands shoulder-width apart on the ground, directly under your shoulders. Extend your legs back so your body forms a straight line from your head to your heels.
                                Core engagement: Engage your core and keep your back straight. Avoid letting your hips sag or rise.
                                Bend your arms: Lower your body by bending your elbows, bringing your chest toward the ground. Keep your elbows at about a 45-degree angle from your body.
                                Depth: Lower down until your chest is just above the ground.
                                Push up: Push yourself back up by extending your arms, returning to the starting position. Keep your body straight throughout.
                                Repetition: Inhale as you lower yourself, and exhale as you push up.',
            ],
            [
                'title' => 'Plank',
                'instruction' => 'Starting position: Lie face down and place your forearms on the ground, shoulder-width apart, directly under your shoulders. Extend your legs back so your body forms a straight line from your head to your heels.
                                Core engagement: Engage your core and keep your back straight. Make sure your hips don’t sag or rise too high.
                                Body alignment: Keep your body in a straight line from head to heels. Draw your shoulder blades down and back.
                                Breathing: Breathe regularly and controlled while holding the position.
                                Hold: Try to maintain the position for as long as possible without losing form.',
            ],
            [
                'title' => 'Paardentrap',
                'instruction' => 'Starting position: Get on all fours, with your hands directly under your shoulders and knees under your hips. Keep your back straight and your head in a neutral position.
                                Core engagement: Tighten your core to keep your back stable during the exercise.
                                Movement: Lift one leg by keeping your knee bent and pushing your heel upwards toward the ceiling. Keep your hips level and controlled.
                                Top position: Push until your foot points upward, and your thigh is almost parallel to the ground. Squeeze your glutes at the top of the movement.
                                Return: Lower your leg back down to the starting position without letting your knee touch the ground.
                                Repetition: Perform the desired number of reps, then switch to the other leg.',
            ],
            [
                'title' => 'Mountain climber',
                'instruction' => 'Starting position: Begin in a high plank position with your hands directly under your shoulders, arms straight, and your body forming a straight line from head to heels.
                                Core engagement: Tighten your core to keep your back straight and prevent your hips from sagging or rising.
                                Movement: Bring your right knee toward your chest while keeping your left leg extended. Keep your upper body stable and avoid rocking.
                                Quick switch: Quickly switch legs by extending your right leg back and bringing your left knee toward your chest.
                                Continuous movement: Continue alternating legs in a running motion, as if youre climbing. Maintain a smooth and fast rhythm while keeping control of your form.
                                    Breathing: Breathe regularly throughout the exercise, maintaining a controlled pace.',
            ],
            [
                'title' => 'Burpee',
                'instruction' => 'Starting position: Stand upright with your feet shoulder-width apart and arms at your sides.
                                Lower down: Squat down and place your hands on the ground in front of you, lowering into a crouching position.
                                Plank position: Jump your feet back into a high plank position, keeping your body in a straight line from head to heels.
                                Push-up (optional): Perform a push-up by lowering your chest toward the ground and pushing yourself back up.
                                Jump back: Hop your feet back toward your hands into the crouched position.
                                Jump up: Explosively jump upward, reaching your hands overhead as you jump.
                                Repetition: Land softly and immediately move back into the squat to start the next repetition.',
            ],
            [
                'title' => 'Lunges',
                'instruction' => 'Starting position: Stand upright with your feet hip-width apart and your hands at your sides or in front of your chest for balance.
                                Step forward: Take a large step forward with one leg, keeping your upper body upright.
                                Lower down: Bend both knees, lowering your back knee toward the ground (without touching it) and keeping your front knee directly above your ankle. Your back knee should nearly touch the ground, and your front thigh should be parallel to the floor.
                                Push up: Push yourself back up by pressing firmly into the ground with your front foot and straightening your legs, returning to the starting position.
                                Switch legs: Repeat the movement with the opposite leg, alternating with each repetition.
                                Repetition: Complete the desired number of repetitions for both legs.',
            ],
            [
                'title' => 'Wall sit',
                'instruction' => 'Starting position: Stand with your back against a sturdy wall. Your feet should be shoulder-width apart and about 60 cm away from the wall.
                                Lower down: Slowly slide down the wall until your knees are bent at a 90-degree angle, as if sitting on an invisible chair. Your thighs should be parallel to the ground.
                                Posture: Keep your back, shoulders, and head pressed against the wall. Place your hands by your sides or on your thighs without pressing down on your knees.
                                Hold position: Stay in this position for as long as possible or for a set amount of time, such as 30 seconds to a minute.
                                Stand up: Slowly slide back up the wall when the time is up.',
            ],
            [
                'title' => 'Crunch',
                'instruction' => 'Starting position: Lie on your back with your knees bent and feet flat on the floor, hip-width apart. Place your hands behind your head with your elbows out to the sides. Keep your head in a neutral position, looking up at the ceiling.
                                Core engagement: Tighten your abdominal muscles and press your lower back against the floor.
                                Upward movement: Slowly lift your shoulders and upper back off the floor by contracting your abdominal muscles. Keep your lower back on the ground and avoid pulling your neck with your hands.
                                Top position: Stop when your shoulder blades are off the ground, and your abs are fully engaged. Hold briefly.
                                Lower down: Slowly lower yourself back to the starting position without letting your head rest fully on the floor.
                                Repetition: Repeat the movement for the desired number of repetitions.',
            ]
        ]);
    }
}
