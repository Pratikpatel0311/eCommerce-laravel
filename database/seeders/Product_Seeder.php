<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Apple iWatch Series 6',
                'price' => '20000',
                'description' => 'GPS model lets you take calls and reply to texts from your wrist · Measure your blood oxygen with an all-new sensor and app',
                'gallery' => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/40-alum-gold-sport-pinksand-6s-nc?wid=2000&hei=2000&fmt=jpeg&qlt=95&.v=1599810781000',
                'category' => 'smart watch'
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '50000',
                'description' => 'Panasonic has long offered some of the best TVs in the market, dating back to the days of CRT models',
                'gallery' => 'https://cdn1.smartprix.com/rx-i2V3Foyvn-w1200-h1200/panasonic-th-40hs450.jpg',
                'category' => 'television'
            ],
            [
                'name' => 'Samsung Curved Smart TV',
                'price' => '180000',
                'description' => 'Curved monitors help counteract edge distortion, bringing all parts of an image to roughly the same distance from your eyes',
                'gallery' => 'https://image-us.samsung.com/SamsungUS/home/televisions-and-home-theater/television-and-home-theater-accessories/pdp/un65nu8500fxza/gallery/UN65NU8500FXZA_004_L_Perspective_Black-1600x1200.jpg?$product-details-jpg$',
                'category' => 'LED tv'
            ],
            [
                'name' => 'LG Refrigerator',
                'price' => '30000',
                'description' => 'With Linear Cooling™ That Retains Freshness For Up To 14 Days. Mega Capacity.',
                'gallery' => 'https://static.toiimg.com/thumb/msid-54124852,width-220,resizemode-4,imgv-0/LG-GL-D322JMFL-310-Ltr-Double-Door-Refrigerator.jpg',
                'category' => 'refrigerator'
            ]
        ]);
    }
}
