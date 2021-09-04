<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            "Tv",
            "Tulanh",
            "Maygiat",
            "quat"
        ];
        $price = [
            "120000", "240000", "100000", "500000"
        ];
        $count = [1,2,3,4];
        $type = ["LG", "panasonic", "samsung", "ThaiLan"];
        $img = ['a', 'b', 'c', 'd'];
        for ($i = 0; $i < count($name); $i++) {
            \DB::table('products')->insert([
                'id' => $i +1,
                'name' => $name[$i],
                'price' => $price[$i],
                'count' => $count[$i],
                'type' => $type[$i],
                'img' => $img[$i]
            ]);
        }
    }
}