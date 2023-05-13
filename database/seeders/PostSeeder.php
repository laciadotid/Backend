<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Post;

use App\Models\Category;
use Database\Seeders\CategorySeeder;

use App\Models\User;
use Database\Seeders\UserSeeder;

use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {

        //jalankan seeder category
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);

        //ambil data kategori
        $category1 = Category::where('title', 'action')->first();
        $category2 = Category::where('title', 'adventure')->first();

        $user2 = User::where('name','febriansyah')->first();

        DB::table('post')->insert([
            [
                'title' => 'boruto',
                'slug' => 'slug coba 1',
                'metaDescription' => 'meta coba 1',
                'featuredImage' => '6.jpg',
                'date' => now(),
                'content' => 'content 1',
                'post_author' => $user2->id,
                'post_category' => $category1->id,
                'created_at' => now()
            ],
            [
                'title' => 'naruto',
                'slug' => 'slug coba 2',
                'metaDescription' => 'meta coba 2',
                'featuredImage' => 'channa.jpg',
                'date' => now(),
                'content' => 'content 2',
                'post_author' =>  $user2->id,
                'post_category' => $category2->id,
                'created_at' => now()
            ],

            ]);

    }
}
