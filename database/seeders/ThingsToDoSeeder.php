<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ThingsToDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            // ================= KANDY (1) =================
            [
                'title' => 'Temple of the Sacred Tooth Relic',
                'slug' => Str::slug('Temple of the Sacred Tooth Relic'),
                'description' => 'Visit Sri Lanka’s most sacred Buddhist temple located in the heart of Kandy city.',
                'image' => 'kandy-tooth-temple.jpg',
                'city' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Kandy Lake Walk',
                'slug' => Str::slug('Kandy Lake Walk'),
                'description' => 'Enjoy a peaceful walk around the scenic lake with city and mountain views.',
                'image' => 'kandy-lake.jpg',
                'city' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Kandy Cultural Dance Show',
                'slug' => Str::slug('Kandy Cultural Dance Show'),
                'description' => 'Experience traditional Kandyan dances and fire walking performances.',
                'image' => 'kandy-dance.jpg',
                'city' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Royal Botanical Gardens Peradeniya',
                'slug' => Str::slug('Royal Botanical Gardens Peradeniya'),
                'description' => 'Explore beautiful orchid houses and tropical plant collections.',
                'image' => 'peradeniya-gardens.jpg',
                'city' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Udawattekele Forest Reserve',
                'slug' => Str::slug('Udawattekele Forest Reserve'),
                'description' => 'Nature reserve ideal for bird watching and jungle walks.',
                'image' => 'udawattekele.jpg',
                'city' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Three-Temple Loop Tour',
                'slug' => Str::slug('Three-Temple Loop Tour'),
                'description' => 'Visit Gadaladeniya, Lankatilaka and Embekke Devalaya in one trip.',
                'image' => 'embekke-devalaya.jpg',
                'city' => 1,
                'is_active' => true,
            ],

            // ================= NUWARA ELIYA (2) =================
            [
                'title' => 'Tea Plantation and Factory Tour',
                'slug' => Str::slug('Tea Plantation and Factory Tour'),
                'description' => 'Learn how world famous Ceylon Tea is produced and enjoy tastings.',
                'image' => 'tea-factory.jpg',
                'city' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Gregory Lake Park',
                'slug' => Str::slug('Gregory Lake Park'),
                'description' => 'Boating, cycling and relaxing lakeside picnics.',
                'image' => 'gregory-lake.jpg',
                'city' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Horton Plains and World’s End',
                'slug' => Str::slug('Horton Plains and Worlds End'),
                'description' => 'Early morning hike to dramatic cliff viewpoints and waterfalls.',
                'image' => 'worlds-end.jpg',
                'city' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Seetha Amman Temple Visit',
                'slug' => Str::slug('Seetha Amman Temple Visit'),
                'description' => 'Ancient Hindu temple linked to the Ramayana legend.',
                'image' => 'seetha-amman.jpg',
                'city' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Victoria Park Walk',
                'slug' => Str::slug('Victoria Park Walk'),
                'description' => 'Colorful flowers and bird watching in the city park.',
                'image' => 'victoria-park.jpg',
                'city' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Strawberry Farm Visit',
                'slug' => Str::slug('Strawberry Farm Visit'),
                'description' => 'Pick fresh strawberries and enjoy farm experiences.',
                'image' => 'strawberry-farm.jpg',
                'city' => 2,
                'is_active' => true,
            ],

            // ================= DAMBULLA (3) =================
            [
                'title' => 'Dambulla Cave Temple Exploration',
                'slug' => Str::slug('Dambulla Cave Temple Exploration'),
                'description' => 'UNESCO heritage site with ancient murals and Buddha statues.',
                'image' => 'dambulla-caves.jpg',
                'city' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Golden Buddha Museum',
                'slug' => Str::slug('Golden Buddha Museum'),
                'description' => 'Modern museum complex with panoramic views.',
                'image' => 'golden-buddha.jpg',
                'city' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Dambulla Wholesale Market Visit',
                'slug' => Str::slug('Dambulla Wholesale Market Visit'),
                'description' => 'Largest vegetable market in Sri Lanka with vibrant trading.',
                'image' => 'dambulla-market.jpg',
                'city' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Ibbankatuwa Megalithic Tombs',
                'slug' => Str::slug('Ibbankatuwa Megalithic Tombs'),
                'description' => 'Ancient burial grounds dating back over 2500 years.',
                'image' => 'ibbankatuwa.jpg',
                'city' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Village Cycling Tour',
                'slug' => Str::slug('Village Cycling Tour'),
                'description' => 'Cycle through lakes, farms, and rural villages.',
                'image' => 'village-cycling.jpg',
                'city' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Minneriya Elephant Safari',
                'slug' => Str::slug('Minneriya Elephant Safari'),
                'description' => 'Seasonal gathering of elephants in Minneriya National Park.',
                'image' => 'minneriya-elephants.jpg',
                'city' => 3,
                'is_active' => true,
            ],

            // ================= SIGIRIYA (4) =================
            [
                'title' => 'Sigiriya Rock Fortress Climb',
                'slug' => Str::slug('Sigiriya Rock Fortress Climb'),
                'description' => 'UNESCO heritage site with palace ruins and frescoes.',
                'image' => 'sigiriya-rock.jpg',
                'city' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Pidurangala Sunrise Hike',
                'slug' => Str::slug('Pidurangala Sunrise Hike'),
                'description' => 'Best viewpoint of Sigiriya Rock at sunrise.',
                'image' => 'pidurangala.jpg',
                'city' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Sigiriya Village Safari',
                'slug' => Str::slug('Sigiriya Village Safari'),
                'description' => 'Bullock cart ride, catamaran ride and village lunch.',
                'image' => 'village-safari.jpg',
                'city' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Sigiriya Museum Visit',
                'slug' => Str::slug('Sigiriya Museum Visit'),
                'description' => 'Learn history and engineering behind Sigiriya fortress.',
                'image' => 'sigiriya-museum.jpg',
                'city' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Wildlife Safari at Kaudulla',
                'slug' => Str::slug('Wildlife Safari at Kaudulla'),
                'description' => 'Another excellent park for elephant sightings.',
                'image' => 'kaudulla-elephants.jpg',
                'city' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Traditional Cooking Experience',
                'slug' => Str::slug('Traditional Cooking Experience'),
                'description' => 'Learn to cook authentic Sri Lankan village dishes.',
                'image' => 'cooking-class.jpg',
                'city' => 4,
                'is_active' => true,
            ],
        ];

        DB::table('thingstodos')->insert($data);
    }
}
