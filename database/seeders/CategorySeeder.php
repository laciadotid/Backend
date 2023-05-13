<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {

        DB::table('category')->insert([
            [
                'title' => 'action',
                'description' => 'description 1',
                'created_at' => now()
            ],
            [
                'title' => 'adventure',
                'description' => 'description 2',
                'created_at' => now()
            ],

            ]);

    }
}
