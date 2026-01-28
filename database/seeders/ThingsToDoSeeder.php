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
        $thingstodos = [

                ['title'=>'Kandy City','slug'=>Str::slug('Kandy City'),'description'=>'Cultural capital of Sri Lanka.','image'=>'kandy.jpg','city'=>1,'distance'=>6,'is_active'=>true],
                ['title'=>'Temple of the Tooth Relic','slug'=>Str::slug('Temple of the Tooth Relic'),'description'=>'Sacred Buddhist temple housing Buddha’s tooth relic.','image'=>'tooth-temple.jpg','city'=>1,'distance'=>7,'is_active'=>true],
                ['title'=>'International Buddhist Museum','slug'=>Str::slug('International Buddhist Museum'),'description'=>'Museum of global Buddhist heritage.','image'=>'buddhist-museum.jpg','city'=>1,'distance'=>7,'is_active'=>true],
                ['title'=>'Sri Dalada Museum','slug'=>Str::slug('Sri Dalada Museum'),'description'=>'Artifacts related to sacred relic history.','image'=>'dalada-museum.jpg','city'=>1,'distance'=>7,'is_active'=>true],
                ['title'=>'Tusker Museum','slug'=>Str::slug('Tusker Museum'),'description'=>'Museum dedicated to temple tuskers.','image'=>'tusker-museum.jpg','city'=>1,'distance'=>7,'is_active'=>true],
                ['title'=>'St Paul’s Church Kandy','slug'=>Str::slug('St Pauls Church Kandy'),'description'=>'Colonial era Anglican church.','image'=>'st-pauls.jpg','city'=>1,'distance'=>7,'is_active'=>true],
                ['title'=>'Sathara Maha Devalaya','slug'=>Str::slug('Sathara Maha Devalaya'),'description'=>'Four guardian deity shrines of Kandy.','image'=>'devalaya.jpg','city'=>1,'distance'=>7,'is_active'=>true],
                ['title'=>'Bahawarakanda Buddha Statue','slug'=>Str::slug('Bahawarakanda Buddha Statue'),'description'=>'Giant seated Buddha overlooking Kandy.','image'=>'bahawarakanda.jpg','city'=>1,'distance'=>8,'is_active'=>true],
                ['title'=>'Kandy National Museum','slug'=>Str::slug('Kandy National Museum'),'description'=>'History of Kandyan Kingdom.','image'=>'national-museum.jpg','city'=>1,'distance'=>7,'is_active'=>true],
                ['title'=>'Kandy View Point','slug'=>Str::slug('Kandy View Point'),'description'=>'Panoramic city viewpoint.','image'=>'view-point.jpg','city'=>1,'distance'=>8,'is_active'=>true],
                ['title'=>'Traditional Cultural Dance Show','slug'=>Str::slug('Traditional Cultural Dance Show'),'description'=>'Kandyan cultural performances.','image'=>'dance.jpg','city'=>1,'distance'=>7,'is_active'=>true],
                ['title'=>'Garrison Cemetery','slug'=>Str::slug('Garrison Cemetery'),'description'=>'Colonial era British cemetery.','image'=>'garrison.jpg','city'=>1,'distance'=>9,'is_active'=>true],
                ['title'=>'Trinity College Chapel','slug'=>Str::slug('Trinity College Chapel'),'description'=>'Historic school chapel.','image'=>'trinity.jpg','city'=>1,'distance'=>7,'is_active'=>true],
                ['title'=>'Udawatta Kele Forest Reserve','slug'=>Str::slug('Udawatta Kele Forest Reserve'),'description'=>'Protected forest reserve.','image'=>'udawatta.jpg','city'=>1,'distance'=>8,'is_active'=>true],
                ['title'=>'Gem Shops Kandy','slug'=>Str::slug('Gem Shops Kandy'),'description'=>'Gemstone showrooms.','image'=>'gems.jpg','city'=>1,'distance'=>7,'is_active'=>true],
                ['title'=>'Kandy War Cemetery','slug'=>Str::slug('Kandy War Cemetery'),'description'=>'World War memorial cemetery.','image'=>'war-cemetery.jpg','city'=>1,'distance'=>9,'is_active'=>true],
                ['title'=>'Ceylon Tea Museum Hanthana','slug'=>Str::slug('Ceylon Tea Museum Hanthana'),'description'=>'History of tea industry.','image'=>'tea-museum.jpg','city'=>1,'distance'=>11,'is_active'=>true],
                ['title'=>'Hanthana Mountain Range','slug'=>Str::slug('Hanthana Mountain Range'),'description'=>'Hiking and nature trails.','image'=>'hanthana.jpg','city'=>1,'distance'=>12,'is_active'=>true],
                ['title'=>'Gatambe Temple','slug'=>Str::slug('Gatambe Temple'),'description'=>'Temple by the river.','image'=>'gatambe.jpg','city'=>1,'distance'=>5,'is_active'=>true],
                ['title'=>'Peradeniya Botanical Gardens','slug'=>Str::slug('Peradeniya Botanical Gardens'),'description'=>'World famous botanical garden.','image'=>'botanical.jpg','city'=>1,'distance'=>3,'is_active'=>true],
                ['title'=>'University of Peradeniya','slug'=>Str::slug('University of Peradeniya'),'description'=>'Largest university campus.','image'=>'university.jpg','city'=>1,'distance'=>1,'is_active'=>true],
                ['title'=>'Galmaduwa Temple','slug'=>Str::slug('Galmaduwa Temple'),'description'=>'Ancient cave temple.','image'=>'galmaduwa.jpg','city'=>1,'distance'=>10,'is_active'=>true],
                ['title'=>'Highway Museum Complex','slug'=>Str::slug('Highway Museum Complex'),'description'=>'Transport heritage museum.','image'=>'highway-museum.jpg','city'=>1,'distance'=>18,'is_active'=>true],
                ['title'=>'Hindagala Temple','slug'=>Str::slug('Hindagala Temple'),'description'=>'Temple with murals.','image'=>'hindagala.jpg','city'=>1,'distance'=>9,'is_active'=>true],
                ['title'=>'Rankot Viharaya','slug'=>Str::slug('Rankot Viharaya'),'description'=>'Ancient Buddhist ruins.','image'=>'rankot.jpg','city'=>1,'distance'=>14,'is_active'=>true],
                ['title'=>'Gadaladeniya Raja Maha Viharaya','slug'=>Str::slug('Gadaladeniya Raja Maha Viharaya'),'description'=>'14th century temple.','image'=>'gadaladeniya.jpg','city'=>1,'distance'=>18,'is_active'=>true],
                ['title'=>'Nelugolla International Buddhist Center','slug'=>Str::slug('Nelugolla International Buddhist Center'),'description'=>'Meditation and learning center.','image'=>'nelugolla.jpg','city'=>1,'distance'=>22,'is_active'=>true],
                ['title'=>'Pilimathalawa Brass Industry','slug'=>Str::slug('Pilimathalawa Brass Industry'),'description'=>'Traditional brass craft village.','image'=>'brass.jpg','city'=>1,'distance'=>16,'is_active'=>true],
                ['title'=>'Dawson Tower Kadugannawa','slug'=>Str::slug('Dawson Tower Kadugannawa'),'description'=>'British road monument.','image'=>'dawson.jpg','city'=>1,'distance'=>18,'is_active'=>true],
                ['title'=>'National Railway Museum Kadugannawa','slug'=>Str::slug('National Railway Museum Kadugannawa'),'description'=>'Sri Lankan railway history.','image'=>'railway.jpg','city'=>1,'distance'=>18,'is_active'=>true],
                ['title'=>'Lankatilaka Raja Maha Viharaya','slug'=>Str::slug('Lankatilaka Raja Maha Viharaya'),'description'=>'Rock temple on hill.','image'=>'lankatilaka.jpg','city'=>1,'distance'=>20,'is_active'=>true],
                ['title'=>'Embekke Devalaya','slug'=>Str::slug('Embekke Devalaya'),'description'=>'Ancient wooden shrine.','image'=>'embekke.jpg','city'=>1,'distance'=>17,'is_active'=>true],
                ['title'=>'Traditional Drum Making Village','slug'=>Str::slug('Traditional Drum Making Village'),'description'=>'Village famous for Kandyan drums.','image'=>'drums.jpg','city'=>1,'distance'=>20,'is_active'=>true],
                ['title'=>'Kadugannawa Ambalama','slug'=>Str::slug('Kadugannawa Ambalama'),'description'=>'Historic resting hall.','image'=>'ambalama.jpg','city'=>1,'distance'=>18,'is_active'=>true],
                ['title'=>'Madulkelle Tourism Village','slug'=>Str::slug('Madulkelle Tourism Village'),'description'=>'Eco mountain village.','image'=>'madulkelle.jpg','city'=>1,'distance'=>28,'is_active'=>true],
                ['title'=>'Balana Fort','slug'=>Str::slug('Balana Fort'),'description'=>'Ancient Kandyan defense fort.','image'=>'balana.jpg','city'=>1,'distance'=>32,'is_active'=>true],
                ['title'=>'Robert Knox Memorial Tower','slug'=>Str::slug('Robert Knox Memorial Tower'),'description'=>'Colonial era monument.','image'=>'knox.jpg','city'=>1,'distance'=>30,'is_active'=>true],
                ['title'=>'Alagalla Mountain Range','slug'=>Str::slug('Alagalla Mountain Range'),'description'=>'Rocky hiking trails.','image'=>'alagalla.jpg','city'=>1,'distance'=>35,'is_active'=>true],
                ['title'=>'Rakshagala Mountain','slug'=>Str::slug('Rakshagala Mountain'),'description'=>'Forest mountain area.','image'=>'rakshagala.jpg','city'=>1,'distance'=>40,'is_active'=>true],
                ['title'=>'Ambuluwawa Tower','slug'=>Str::slug('Ambuluwawa Tower'),'description'=>'Spiral hilltop tower.','image'=>'ambuluwawa.jpg','city'=>1,'distance'=>25,'is_active'=>true],
                ['title'=>'Nilambe Reservoir','slug'=>Str::slug('Nilambe Reservoir'),'description'=>'Scenic reservoir near meditation center.','image'=>'nilambe-reservoir.jpg','city'=>1,'distance'=>14,'is_active'=>true],
                ['title'=>'Nilambe Meditation Centre','slug'=>Str::slug('Nilambe Meditation Centre'),'description'=>'International meditation retreat.','image'=>'nilambe.jpg','city'=>1,'distance'=>15,'is_active'=>true],
                ['title'=>'Keesi Paddara Mountain Range','slug'=>Str::slug('Keesi Paddara Mountain Range'),'description'=>'Remote mountain trekking area.','image'=>'keesi.jpg','city'=>1,'distance'=>60,'is_active'=>true],
                ['title'=>'Keelobokka','slug'=>Str::slug('Keelobokka'),'description'=>'Mountain village in Knuckles region.','image'=>'keelobokka.jpg','city'=>1,'distance'=>65,'is_active'=>true],
                ['title'=>'Asupini Ella Waterfall','slug'=>Str::slug('Asupini Ella Waterfall'),'description'=>'Tall waterfall in Knuckles foothills.','image'=>'asupini-ella.jpg','city'=>1,'distance'=>70,'is_active'=>true],
                ['title'=>'Peacock Hill','slug'=>Str::slug('Peacock Hill'),'description'=>'Viewpoint near Knuckles range.','image'=>'peacock-hill.jpg','city'=>1,'distance'=>68,'is_active'=>true],
                ['title'=>'Hettipola Tourism Village','slug'=>Str::slug('Hettipola Tourism Village'),'description'=>'Rural village tourism site.','image'=>'hettipola.jpg','city'=>1,'distance'=>55,'is_active'=>true],
                ['title'=>'Loolecondera Tea Estate','slug'=>Str::slug('Loolecondera Tea Estate'),'description'=>'First commercial tea plantation.','image'=>'loolecondera.jpg','city'=>1,'distance'=>28,'is_active'=>true],
                ['title'=>'Dumbara Valley','slug'=>Str::slug('Dumbara Valley'),'description'=>'Traditional weaving region.','image'=>'dumbara.jpg','city'=>1,'distance'=>50,'is_active'=>true],
                ['title'=>'Mini World’s End Viewpoint','slug'=>Str::slug('Mini Worlds End Viewpoint'),'description'=>'Cliff viewpoint in Knuckles area.','image'=>'mini-worlds-end.jpg','city'=>1,'distance'=>72,'is_active'=>true],
                ['title'=>'Oak Ray Tea Factory Museum','slug'=>Str::slug('Oak Ray Tea Factory Museum'),'description'=>'Tea processing demonstrations.','image'=>'oakray.jpg','city'=>1,'distance'=>32,'is_active'=>true],
                ['title'=>'Meemure Tourism Village','slug'=>Str::slug('Meemure Tourism Village'),'description'=>'Remote mountain village.','image'=>'meemure.jpg','city'=>1,'distance'=>80,'is_active'=>true],
                ['title'=>'Yahangala Mountain','slug'=>Str::slug('Yahangala Mountain'),'description'=>'Sacred rock mountain peak.','image'=>'yahangala.jpg','city'=>1,'distance'=>78,'is_active'=>true],
                ['title'=>'Thawal Kele Forest','slug'=>Str::slug('Thawal Kele Forest'),'description'=>'Forest reserve near Knuckles.','image'=>'thawal-kele.jpg','city'=>1,'distance'=>75,'is_active'=>true],
                ['title'=>'Lakgolla','slug'=>Str::slug('Lakgolla'),'description'=>'Mountain village near Knuckles range.','image'=>'lakgolla.jpg','city'=>1,'distance'=>85,'is_active'=>true],
                ['title'=>'Rathna Ella Waterfall','slug'=>Str::slug('Rathna Ella Waterfall'),'description'=>'Tall scenic waterfall.','image'=>'rathna-ella.jpg','city'=>1,'distance'=>90,'is_active'=>true],
                ['title'=>'18 Bends Kadugannawa Road','slug'=>Str::slug('18 Bends Kadugannawa Road'),'description'=>'Famous mountain road bends.','image'=>'18-bends.jpg','city'=>1,'distance'=>20,'is_active'=>true],
                ['title'=>'Weathenna Village','slug'=>Str::slug('Weathenna Village'),'description'=>'Rural village with scenic views.','image'=>'weathenna.jpg','city'=>1,'distance'=>60,'is_active'=>true],
                ['title'=>'Muthukeliyawa Forest','slug'=>Str::slug('Muthukeliyawa Forest'),'description'=>'Forest trekking area.','image'=>'muthukeliyawa.jpg','city'=>1,'distance'=>65,'is_active'=>true],

                ];


        DB::table('thingstodos')->insert($thingstodos);
    }
}
