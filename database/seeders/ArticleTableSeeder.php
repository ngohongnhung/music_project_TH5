<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use Faker\Factory as Faker;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $theloais = DB::table('theloai')->pluck('ma_tloai')->toArray();
        $tacgias = DB::table('tacgia')->pluck('ma_tgia')->toArray();
        for ($i = 0; $i < 10; $i++) {
            
            Article::create([
                'tieude' => $faker->sentence,
                'ten_bhat' => $faker->name,
                'ma_tloai' => $faker->randomElement($theloais),
                'tomtat' => $faker->paragraph,
                'noidung' => $faker->paragraphs(3, true),
                'ma_tgia' => $faker->randomElement($tacgias),
                'hinhanh' => $faker->imageUrl(),
            ]);
    }
}
}