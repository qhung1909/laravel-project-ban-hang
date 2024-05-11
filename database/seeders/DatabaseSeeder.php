<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id'=>1, 'ten_dm'=>'iPhone', 'thu_tu'=>1, 'an_hien'=>1],
            ['id'=>2, 'ten_dm'=>'iPad', 'thu_tu'=>2, 'an_hien'=>1],
            ['id'=>3, 'ten_dm'=>'MacBook', 'thu_tu'=>3, 'an_hien'=>1],
            ['id'=>4, 'ten_dm'=>'Watch', 'thu_tu'=>4, 'an_hien'=>1],
            ['id'=>5, 'ten_dm'=>'Headphone', 'thu_tu'=>5, 'an_hien'=>1],
            ['id'=>6, 'ten_dm'=>'Accesories', 'thu_tu'=>6, 'an_hien'=>1],
        ]);

        $products = [
            [
                "id" => 1,
                "tensp" => "iPhone 15 Pro Max",
                "image" => "/img/iphone-15-pro-max-blue-1.webp",
                "price" => "30990000",
                "price_discount" => "34990000",
                "categories" => 1,
                "xem"=> 10,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 2,
                "tensp" => "iPhone 15 Pro",
                "image" => "/img/iphone-15-pro-blue-1.webp",
                "price" => "26790000",
                "price_discount" => "28790000",
                "categories" => 1,
                "xem"=> 1000,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 3,
                "tensp" => "iPhone 15 Plus",
                "image" => "/img/iphone-15-plus-green-1.webp",
                "price" => "23390000",
                "price_discount" => "25890000",
                "categories" => 1,
                "xem"=> 200,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 4,
                "tensp" => "iPhone 15",
                "image" => "/img/iphone-15-green-1.webp",
                "price" => "20290000",
                "price_discount" => "22590000",
                "categories" => 1,
                "xem"=> 120,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 5,
                "tensp" => "iPhone 14 Pro Max",
                "image" => "/img/iphone-14-pro-max-purple.webp",
                "price" => "27390000",
                "price_discount" => "29490000",
                "categories" => 1,
                "xem"=> 510,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 6,
                "tensp" => "iPhone 14 Plus",
                "image" => "/img/iphone-14-plus-yellow.webp",
                "price" => "20990000",
                "price_discount" => "22890000",
                "categories" => 1,
                "xem"=> 600,
                "hot"=>1,
                "an_hien"=>1
            ],[
                "id" => 7,
                "tensp" => "iPhone 14",
                "image" => "/img/iphone-14-purple.webp",
                "price" => "17690000",
                "price_discount" => "20190000",
                "categories" => 1,
                "xem"=> 230,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 8,
                "tensp" => "iPhone 13",
                "image" => "/img/iphone-13-green.webp",
                "price" => "14290000",
                "price_discount" => "17090000",
                "categories" => 1,
                "xem"=> 143,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 9,
                "tensp" => "iPhone 12",
                "image" => "/img/iphone-12-white.webp",
                "price" => "12090000",
                "price_discount" => "14900000",
                "categories" => 1,
                "xem"=> 231,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 10,
                "tensp" => "iPad 9 Wifi 64GB",
                "image" => "/img/ipad-9-grey-thumb.webp",
                "price" => "7290000",
                "price_discount" => "8900000",
                "categories" => 2,
                "xem"=> 123,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 11,
                "tensp" => "iPad 10 Wifi 64GB",
                "image" => "/img/ipad-10-slider.webp",
                "price" => "11090000",
                "price_discount" => "11440000",
                "categories" => 2,
                "xem"=> 321,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 12,
                "tensp" => "iPad Pro M2 11 Inch 64GB",
                "image" => "/img/ipad-pro-m2-11inch-sliver.webp",
                "price" => "20990000",
                "price_discount" => "21880000",
                "categories" => 2,
                "xem"=> 126,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 13,
                "tensp" => "iPad Air 5 Wifi 64GB",
                "image" => "/img/ipad-air-5-kem.webp",
                "price" => "14590000",
                "price_discount" => "15980000",
                "categories" => 2,
                "xem"=> 36,
                "hot"=>1,
                "an_hien"=>1
            ],[
                "id" => 14,
                "tensp" => "Macbook Air 13 Inch M1 2020",
                "image" => "/img/mac-air-m1-xam.webp",
                "price" => "17990000",
                "price_discount" => "19500000",
                "categories" => 3,
                "xem"=> 87,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 15,
                "tensp" => "Macbook Air 13 Inch M2 2022",
                "image" => "/img/mac-air-m2-vang.webp",
                "price" => "24990000",
                "price_discount" => "28900000",
                "categories" => 3,
                "xem"=> 79,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 16,
                "tensp" => "Macbook Pro 13 Inch M2 2022",
                "image" => "/img/mac-pro-13-m2-bac.webp",
                "price" => "25990000",
                "price_discount" => "28900000",
                "categories" => 3,
                "xem"=> 45,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 17,
                "tensp" => "Macbook Pro 14 Inch M3 2023",
                "image" => "/img/mac-topzone-spacegray.webp",
                "price" => "38590000",
                "price_discount" => "39900000",
                "categories" => 3,
                "xem"=> 76,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 18,
                "tensp" => "Apple Watch SE 2022 GPS 40mm Nhôm",
                "image" => "/img/apple-watch-se-2022-gps-40mm-trang.webp",
                "price" => "5890000",
                "price_discount" => "7490000",
                "categories" => 4,
                "xem"=> 86,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 19,
                "tensp" => "Apple Watch Series 9 GPS 41mm Nhôm",
                "image" => "/img/apple-watch-s9-41mm-vien-nhom-day-silicone.webp",
                "price" => "9990000",
                "price_discount" => "10900000",
                "categories" => 4,
                "xem"=> 54,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 20,
                "tensp" => "Apple Watch Ultra 2 GPS + Cellular 49mm",
                "image" => "/img/apple-watch-ultra-lte-49mm-vien-titanium-day.webp",
                "price" => "20990000",
                "price_discount" => "21900000",
                "categories" => 4,
                "xem"=> 34,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 21,
                "tensp" => "Apple Watch SE 2023 GPS 40mm Nhôm",
                "image" => "/img/apple-watch-se-2023-vien-nhom-day-silicone.webp",
                "price" => "5990000",
                "price_discount" => "6300000",
                "categories" => 4,
                "xem"=> 4,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 22,
                "tensp" => "AirPods 2 Hộp sạc thường",
                "image" => "/img/tai-nghe-bluetooth-airpods-2.webp",
                "price" => "2790000",
                "price_discount" => "3490000",
                "categories" => 5,
                "xem"=> 10,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 23,
                "tensp" => "AirPods Pro (2nd Gen)",
                "image" => "/img/tai-nghe-bluetooth-airpods-pro-gen-2.webp",
                "price" => "5990000",
                "price_discount" => "6100000",
                "categories" => 5,
                "xem"=> 65,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 24,
                "tensp" => "AirPods 3 sạc Lightning",
                "image" => "/img/airpods-3.webp",
                "price" => "4090000",
                "price_discount" => "4490000",
                "categories" => 5,
                "xem"=> 43,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 25,
                "tensp" => "AirPods Pro (2nd Gen) USB-C",
                "image" => "/img/airpods-pro-2.webp",
                "price" => "5790000",
                "price_discount" => "6290000",
                "categories" => 5,
                "xem"=> 14,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 26,
                "tensp" => "Adapter sạc Apple USB-C 20W",
                "image" => "/img/adapter-sac-type-c-20w.webp",
                "price" => "550000",
                "categories" => 6,
                "xem"=> 140,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 27,
                "tensp" => "Ốp lưng MagSafe cho iPhone 15 Pro Max",
                "image" => "/img/op-lung-magsafe-iphone-15-pro-max.webp",
                "price" => "1190000",
                "price_discount" => "1400000",
                "categories" => 6,
                "xem"=> 10,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 28,
                "tensp" => "Ốp lưng Magsafe cho iPhone 15 Pro Max Vải tinh dệt Apple",
                "image" => "/img/op-lung-magsafe-iphone-15-pro-max-vai.webp",
                "price" => "1300000",
                "price_discount" => "1690000",
                "categories" => 6,
                "xem"=> 10,
                "hot"=>1,
                "an_hien"=>1
            ],
            [
                "id" => 29,
                "tensp" => "Magic Keyboard",
                "image" => "/img/magic-keyboard.webp",
                "price" => "2070000",
                "price_discount" => "3190000",
                "categories" => 6,
                "xem"=> 10,
                "hot"=>1,
                "an_hien"=>1
            ]
        ];
        foreach($products as $product){
            DB::table('products')->insert([
                'id'=>$product['id'],
                'tensp'=>$product['tensp'],
                'img'=>$product['image'],
                'price'=>$product['price'],
                'categories'=>$product['categories'],
                'xem'=>$product['xem'],
                'hot'=>$product['hot'],
                'an_hien'=>$product['an_hien']
            ]);
        }

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('123'),
        ]);
    
        // Thêm dữ liệu admin
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123'),
        ]);
    }
}
