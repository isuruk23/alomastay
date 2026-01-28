<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MultiDayTourSeeder extends Seeder
{
    public function run(): void
    {
        $tours = [

            // ================= TOUR 1 =================
            [
                'name' => 'Kandy Cultural & Heritage Explorer',
                'slogan' => 'Traditions, Temples and Timeless Beauty',
                'summary' => 'Explore cultural wonders and heritage sites around Kandy.',
                'description' => 'A complete cultural journey including Kandy, Matale and surrounding heritage attractions.',
                'days' => 7,
                'nights' => 6,
                'price' => 780.00,
                'itinerary' => 'Kandy, Matale, Knuckles viewpoints, village life, temples',
                'includes' => 'Hotel, Breakfast, Transport, Guide',
                'excludes' => 'Lunch, personal expenses',
                'conditions' => 'Free cancellation up to 72 hours',
                'important' => 'Temple dress code required',
                'tips' => 'Carry shawl and comfortable shoes',
                'details' => [
                    ['day'=>1,'title'=>'Arrival in Kandy','description'=>'Hotel check-in and evening walk around Kandy Lake.'],
                    ['day'=>2,'title'=>'Temple of Tooth & City Tour','description'=>'Temple visit, Royal Palace, markets and cultural dance show.'],
                    ['day'=>3,'title'=>'Matale Spice Garden','description'=>'Visit spice garden and Hindu temple in Matale.'],
                    ['day'=>4,'title'=>'Village Experience','description'=>'Traditional village tour and cooking demonstration.'],
                    ['day'=>5,'title'=>'Knuckles Viewpoints','description'=>'Scenic mountain viewpoints and short hikes.'],
                    ['day'=>6,'title'=>'Tea Plantation Tour','description'=>'Tea estate walk and factory visit.'],
                    ['day'=>7,'title'=>'Shopping & Departure','description'=>'Handicraft shopping and airport transfer.'],
                ]
            ],

            // ================= TOUR 2 =================
            [
                'name' => 'Nature & Waterfall Escape from Kandy',
                'slogan' => 'Green Hills and Flowing Falls',
                'summary' => 'A nature focused adventure with waterfalls and forest trails.',
                'description' => 'Experience waterfalls, eco-lodges and peaceful forests near Kandy.',
                'days' => 7,
                'nights' => 6,
                'price' => 820.00,
                'itinerary' => 'Riverston, waterfalls, forest trails, eco villages',
                'includes' => 'Eco-lodges, All meals, Transport',
                'excludes' => 'Personal gear, insurance',
                'conditions' => 'Subject to weather',
                'important' => 'Moderate physical fitness needed',
                'tips' => 'Bring rain jacket and hiking shoes',
                'details' => [
                    ['day'=>1,'title'=>'Travel to Riverston','description'=>'Scenic drive and sunset viewpoints.'],
                    ['day'=>2,'title'=>'Waterfall Trek','description'=>'Guided trek to waterfalls and natural pools.'],
                    ['day'=>3,'title'=>'Forest Walk','description'=>'Bird watching and forest nature trails.'],
                    ['day'=>4,'title'=>'Eco Village Stay','description'=>'Experience village life and organic meals.'],
                    ['day'=>5,'title'=>'Mountain Streams','description'=>'Relax near mountain streams and picnic.'],
                    ['day'=>6,'title'=>'Tea Country Views','description'=>'Visit tea fields and misty hills.'],
                    ['day'=>7,'title'=>'Return to Kandy','description'=>'Leisure breakfast and return journey.'],
                ]
            ],

            // ================= TOUR 3 =================
            [
                'name' => 'Kandy Adventure & River Thrills',
                'slogan' => 'Excitement in the Hill Country',
                'summary' => 'Adventure sports combined with scenic landscapes.',
                'description' => 'Perfect for thrill seekers with rafting and trekking activities.',
                'days' => 7,
                'nights' => 6,
                'price' => 900.00,
                'itinerary' => 'Rafting, zipline, trekking, camping',
                'includes' => 'Hotels, Adventure activities, Transport',
                'excludes' => 'Medical insurance',
                'conditions' => 'Minimum age restrictions apply',
                'important' => 'Follow safety instructions',
                'tips' => 'Carry sportswear and sun protection',
                'details' => [
                    ['day'=>1,'title'=>'Arrival & Safety Briefing','description'=>'Hotel check-in and safety orientation.'],
                    ['day'=>2,'title'=>'White Water Rafting','description'=>'Rafting session at Kitulgala river.'],
                    ['day'=>3,'title'=>'Zip Line Adventure','description'=>'High rope activities and zip lines.'],
                    ['day'=>4,'title'=>'Jungle Trek','description'=>'Guided jungle trekking and wildlife spotting.'],
                    ['day'=>5,'title'=>'Camping Night','description'=>'Overnight camping with bonfire.'],
                    ['day'=>6,'title'=>'River Bathing & Relax','description'=>'Relax by the river and leisure evening.'],
                    ['day'=>7,'title'=>'Return to Kandy','description'=>'Breakfast and departure.'],
                ]
            ],

            // ================= TOUR 4 =================
            [
                'name' => 'Spiritual & Ayurveda Wellness Retreat',
                'slogan' => 'Rejuvenate Body and Mind',
                'summary' => 'Spiritual healing and wellness around sacred sites.',
                'description' => 'A calm journey combining meditation and Ayurveda therapies.',
                'days' => 7,
                'nights' => 6,
                'price' => 950.00,
                'itinerary' => 'Meditation, temples, Ayurveda spa, nature walks',
                'includes' => 'Wellness resort, All meals, Treatments',
                'excludes' => 'Extra therapies',
                'conditions' => 'Medical form required',
                'important' => 'Follow wellness schedules',
                'tips' => 'Light cotton clothing recommended',
                'details' => [
                    ['day'=>1,'title'=>'Wellness Consultation','description'=>'Doctor consultation and relaxation therapy.'],
                    ['day'=>2,'title'=>'Meditation & Yoga','description'=>'Morning yoga and temple meditation.'],
                    ['day'=>3,'title'=>'Ayurveda Treatments','description'=>'Herbal oil therapies and steam bath.'],
                    ['day'=>4,'title'=>'Nature Healing Walk','description'=>'Guided nature walk and breathing exercises.'],
                    ['day'=>5,'title'=>'Detox Program','description'=>'Special detox meals and spa session.'],
                    ['day'=>6,'title'=>'Spiritual Counseling','description'=>'Mindfulness sessions and relaxation.'],
                    ['day'=>7,'title'=>'Closing Ritual & Departure','description'=>'Final blessings and checkout.'],
                ]
            ],

            // ================= TOUR 5 =================
            [
                'name' => 'Hill Country Scenic Discovery Tour',
                'slogan' => 'Mist, Tea and Mountain Views',
                'summary' => 'Scenic railways and tea landscapes around Kandy.',
                'description' => 'Relaxed sightseeing tour through hill country beauty.',
                'days' => 7,
                'nights' => 6,
                'price' => 850.00,
                'itinerary' => 'Tea estates, waterfalls, train rides, viewpoints',
                'includes' => 'Hotels, Breakfast, Transport',
                'excludes' => 'Lunch and dinner',
                'conditions' => 'Train tickets subject to availability',
                'important' => 'Early starts on travel days',
                'tips' => 'Carry camera and light jacket',
                'details' => [
                    ['day'=>1,'title'=>'Kandy City & Lake','description'=>'City sightseeing and lake walk.'],
                    ['day'=>2,'title'=>'Scenic Train Ride','description'=>'Train journey through tea plantations.'],
                    ['day'=>3,'title'=>'Waterfall Visits','description'=>'Multiple waterfall stops and photo points.'],
                    ['day'=>4,'title'=>'Tea Factory Tour','description'=>'Tea plucking and factory visit.'],
                    ['day'=>5,'title'=>'Mountain Viewpoints','description'=>'Sunrise viewpoints and picnic.'],
                    ['day'=>6,'title'=>'Local Village Life','description'=>'Village walk and local lunch experience.'],
                    ['day'=>7,'title'=>'Shopping & Departure','description'=>'Souvenir shopping and airport transfer.'],
                ]
            ],

        ];

        foreach ($tours as $tour) {

            $tourId = DB::table('multi_day_tours')->insertGetId([
                'name' => $tour['name'],
                'slogan' => $tour['slogan'],
                'slug' => Str::slug($tour['name']),
                'summary' => $tour['summary'],
                'description' => $tour['description'],
                'days' => $tour['days'],
                'nights' => $tour['nights'],
                'price' => $tour['price'],
                'start_date' => Carbon::now()->addDays(5),
                'end_date' => null,
                'itinerary' => $tour['itinerary'],
                'includes' => $tour['includes'],
                'excludes' => $tour['excludes'],
                'conditions' => $tour['conditions'],
                'important' => $tour['important'],
                'tips' => $tour['tips'],
                'image' => null,
                'banner_image' => null,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($tour['details'] as $detail) {
                DB::table('multi_day_tour_details')->insert([
                    'day' => $detail['day'],
                    'title' => $detail['title'],
                    'description' => $detail['description'],
                    'image1' => null,
                    'image2' => null,
                    'tour_id' => $tourId,
                    'is_active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
