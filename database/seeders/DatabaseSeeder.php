<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['id'=>1,'name' =>'مأكولات','description' =>'مأكولات سريعة','imagepath' =>'assets\img\p8.jpg.jpeg', 'nameEn' => 'Food'],
            ['id'=>2,'name' =>'كاميرات','description' =>'كاميرات الكترونية','imagepath' =>'assets\img\images.jpeg', 'nameEn' => 'Cameras'],
            ['id'=>3,'name' =>'مكياج','description' =>'','imagepath' =>'assets\img\p6.jpg.jpeg', 'nameEn' => 'Makeup'],
            ['id'=>4,'name' =>'الكترونيات','description' =>'','imagepath' =>'assets\img\s2.jpg.jpeg', 'nameEn' => 'Electronics'],
            ['id'=>5,'name' =>'ساعات','description' =>'','imagepath' =>'assets\img\p1.npg.webp', 'nameEn' => 'Watches'],
            ['id'=>6,'name' =>'شنط','description' =>'','imagepath' =>'assets\img\p4.jpg.webp', 'nameEn' => 'Bags'],
        ];


        Category::insert($categories);

        $products = [
            ['name' => ' لحم مشوي','description'=>'','imagepath'=>'assets/img/لحم مشوي.jpeg' ,'category_id' => 1,'quantity'=>23, 'price' => 400, 'nameEn'=>'grilled meet'],
            ['name' => 'محاشي','description'=>'','imagepath'=>'assets/img/محاشي.jpeg' ,'category_id' => 1,'quantity'=>3, 'price' => 300, 'nameEn'=>'Mahashi'],
            ['name' => 'كريب','description'=>'','imagepath'=>'assets/img/كريب.jpeg' ,'category_id' => 1,'quantity'=>15, 'price' => 50, 'nameEn'=>'crepe'],
            ['name' => 'دجاج مشوي','description'=>'','imagepath'=>'assets/img/دجاج مشوي.webp' ,'category_id' => 1,'quantity'=>15, 'price' => 50, 'nameEn'=>'Grilled chicken'],
            ['name' => 'بيتزا','description'=>'','imagepath'=>'assets/img/بيتزا.jpeg' ,'category_id' => 1,'quantity'=>35, 'price' => 150, 'nameEn'=>'Pizza'],
            ['name' => 'اطعمة بحرية','description'=>'','imagepath'=>'assets/img/3.jpeg' ,'category_id' => 1,'quantity'=>45, 'price' => 340, 'nameEn'=>'sea food'],
            ['name' => 'جمبري','description'=>'','imagepath'=>'assets/img/p8.jpg.jpeg' ,'category_id' => 1,'quantity'=>25, 'price' => 320, 'nameEn'=>'Shrimp'],
            ['name' => 'كاميرا الكترونية','description'=>'','imagepath'=>'assets/img/images.jpeg' ,'category_id' => 2,'quantity'=>35, 'price' => 920, 'nameEn'=>'Electronic camera'],
            ['name' => 'كاميرات مراقبة بالأشعة تحت الحمراء','description'=>'','imagepath'=>'assets/img/كاميرات مراقبة بالأشعة تحت الحمراء.jpeg' ,'category_id' => 2,'quantity'=>85, 'price' => 6000, 'nameEn'=>'Infrared surveillance cameras'],
            ['name' => 'كاميرات المراقبة الشبكية','description'=>'','imagepath'=>'assets/img/كاميرات المراقبة الشبكية.jpeg' ,'category_id' => 2,'quantity'=>35, 'price' => 7000, 'nameEn'=>'Network surveillance cameras'],
            ['name' => 'كاميرات المراقبة','description'=>'','imagepath'=>'assets/img/كاميرات المراقبة C-Mount.jpeg' ,'category_id' => 2,'quantity'=>5, 'price' => 7800, 'nameEn'=>'C-Mount'],
            ['name' => 'كاميرات  للإمالة والتكبير','description'=>'','imagepath'=>'assets/img/كاميرات PTZ للإمالة والتكبير.jpeg' ,'category_id' => 2,'quantity'=>43, 'price' => 3400, 'nameEn'=>'PTZ'],
            ['name' => 'هايلايتر - Highlighter','description'=>'','imagepath'=>'assets/img/هايلايتر - Highlighter.jpeg' ,'category_id' => 3,'quantity'=>3, 'price' => 300, 'nameEn'=>'Highlighter'],
            ['name' => 'كونسيلر','description'=>'','imagepath'=>'assets/img/كونسيلر - Concealer.jpeg' ,'category_id' => 3,'quantity'=>32, 'price' => 340, 'nameEn'=>'Concealer'],
            ['name' => 'ايلاينر','description'=>'','imagepath'=>'assets/img/ايلاينر.jpeg' ,'category_id' => 3,'quantity'=>15, 'price' => 50, 'nameEn'=>'Eye liner'],
            ['name' => 'روج ومسكرا','description'=>'','imagepath'=>'assets/img/ms.jpeg' ,'category_id' => 3,'quantity'=>45, 'price' => 100, 'nameEn'=>'Rouge and mascara'],
            ['name' => 'ايشادو','description'=>'','imagepath'=>'assets/img/Eye shadow.jpeg' ,'category_id' => 3,'quantity'=>45, 'price' => 100, 'nameEn'=>'Eye shadow'],
            ['name' => 'احمر خدود','description'=>'','imagepath'=>'assets/img/downloadأحمر الخدود - Blush.jpeg' ,'category_id' => 3,'quantity'=>34, 'price' => 140, 'nameEn'=>'Blush'],
            ['name' => 'ريموت كونترول','description'=>'','imagepath'=>'assets/img/ريموت كونترول.jpeg' ,'category_id' => 4,'quantity'=>25, 'price' => 80, 'nameEn'=>'remote control'],
            ['name' => 'لابتوب','description'=>'','imagepath'=>'assets/img/el.jpeg' ,'category_id' => 4,'quantity'=>15, 'price' => 10000, 'nameEn'=>'laptop'],
            ['name' => 'المسجلات الالكترونية','description'=>'','imagepath'=>'assets/img/المسجلات الالكترونية.jpeg' ,'category_id' => 4,'quantity'=>65, 'price' => 1000, 'nameEn'=>'Electronic recorders'],
            ['name' => 'سماعة','description'=>'','imagepath'=>'assets/img/سماعة.jpeg' ,'category_id' => 4,'quantity'=>55, 'price' => 900, 'nameEn'=>'Earphone'],
            ['name' => 'ساعة رادو','description'=>'','imagepath'=>'assets/img/ساعة رادو.jpeg' ,'category_id' => 5,'quantity'=>15, 'price' => 5000, 'nameEn'=>'Rado watch'],
            ['name' => 'ساعة بريتلينج','description'=>'','imagepath'=>'assets/img/ساعة بريتلينج.jpeg' ,'category_id' => 5,'quantity'=>85, 'price' => 6000, 'nameEn'=>'Breitling watch'],
            ['name' => 'ساعة شوبارد','description'=>'','imagepath'=>'assets/img/ساعة شوبارد.jpeg' ,'category_id' => 5,'quantity'=>25, 'price' => 8000, 'nameEn'=>'Chopard watch'],
            ['name' => 'ساعة روليكس','description'=>'','imagepath'=>'assets/img/ro.jpeg' ,'category_id' => 5,'quantity'=>55, 'price' => 10000, 'nameEn'=>'Rolex watch'],
            ['name' => 'ساعة كاسيو','description'=>'','imagepath'=>'assets/img/ساعة كاسيو.jpeg' ,'category_id' => 5,'quantity'=>45, 'price' => 1000, 'nameEn'=>'Casio watch'],
            ['name' => 'شنطة الكروس','description'=>'','imagepath'=>'assets/img/شنطة الكروس.jpeg' ,'category_id' => 6,'quantity'=>25, 'price' => 1000, 'nameEn'=>'Crouse bag'],
            ['name' => 'شنطة باوتش','description'=>'','imagepath'=>'assets/img/شنطة باوتش.jpeg' ,'category_id' => 6,'quantity'=>9, 'price' => 900, 'nameEn'=>'Pouch bag'],
            ['name' => 'شنطة جلد','description'=>'','imagepath'=>'assets/img/شنطة جلد.jpeg' ,'category_id' => 6,'quantity'=>33, 'price' => 1800, 'nameEn'=>'Leather bag'],
            ['name' => 'شنطة سفر','description'=>'','imagepath'=>'assets/img/b.jpeg' ,'category_id' => 6,'quantity'=>91, 'price' => 2000, 'nameEn'=>'Travel Bag'],


        ];

        Product::insert($products);
    }
}


// DB::table('categories')->insertOrIgnore($categories);

//   for($i = 0; $i <10; $i++) {
//     Product::create([
//         'name' =>'product'.$i,
//         'description' =>' this is product number'.$i,
//         'price' =>rand(10,100),
//         'quantity' =>rand(1,50),
//         'imagepath'=>'',
//         'category_id' =>rand(1,6),
//     ]);
// }

