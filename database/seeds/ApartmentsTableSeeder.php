<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arr = [];
        for ($i = 0; $i < 20; $i++) {
            array_push($arr, [
                'name' => ('Nhà mặt phố ' . $i),
                'address' => 'Hà Nội',
                'price' => random_int(500, 5000),
                'information_general' => 'Giá rẻ',
                'information_detail' => ('Giá rẻ ' . str_random(10)),
                'url_img' => 'http://img.banchungcusaigon.com//2015/10/13/20151013154726-1511.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'status' => '1'
            ]);
        }
        DB::table('apartments')->insert($arr);
    }
}
