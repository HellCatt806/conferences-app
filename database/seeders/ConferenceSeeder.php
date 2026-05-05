<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferenceSeeder extends Seeder
{
    public function run(): void
    {
        Conference::create([
            'title' => 'Laravel konferencija 2025',
            'description' => 'Konferencija apie Laravel framework naujoves ir geriausias praktikas.',
            'lecturers' => 'Jonas Jonaitis, Petras Petraitis',
            'date' => '2025-01-15',
            'time' => '10:00',
            'address' => 'Vilnius, Gedimino pr. 1',
        ]);

        Conference::create([
            'title' => 'PHP Summit 2025',
            'description' => 'Tarptautine PHP konferencija su pasaulines klases pranesejai.',
            'lecturers' => 'Taylor Otwell, Rasmus Lerdorf',
            'date' => '2025-03-20',
            'time' => '09:00',
            'address' => 'Kaunas, Laisves al. 10',
        ]);

        Conference::create([
            'title' => 'Web Developers Meetup 2026',
            'description' => 'Kasmetinis web kureju susitikimas Lietuvoje.',
            'lecturers' => 'Vardenis Pavardenis',
            'date' => '2026-06-10',
            'time' => '14:00',
            'address' => 'Klaipeda, Manto g. 5',
        ]);

        Conference::create([
            'title' => 'JavaScript konferencija 2026',
            'description' => 'Konferencija apie modernius JavaScript framework.',
            'lecturers' => 'Antanas Antanaitis',
            'date' => '2026-08-25',
            'time' => '11:00',
            'address' => 'Vilnius, Uzupis g. 2',
        ]);
    }
}