<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {
        DB::table('users')->insert([
        [
            'name' => 'admin',
            'email' => 'admin@sekai.id',
            'password' => Hash::make('177013'),
            'user_category' => 'admin',
            'created_at' => now()
        ],
        [
            'name' => 'febriansyah',
            'email' => 'febriansyah@gmail.com',
            'password' => Hash::make('12345'),
            'user_category' => 'penulis',
            'created_at' => now()
        ],

        ]);


    }
}
