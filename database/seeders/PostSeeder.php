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
                'slug' => 'boruto',
                'metaDescription' => 'Boruto adalah sebuah seri manga dan anime yang merupakan sekuel dari seri Naruto karya Masashi Kishimoto.',
                'featuredImage' => 'boruto.jpg',
                'date' => now(),
                'content' => 'Dalam artikel ini, kita akan menjelajahi dunia Boruto, seri manga dan anime yang merupakan kelanjutan dari legenda Naruto. Bergabunglah dalam petualangan epik Boruto Uzumaki dan teman-temannya ketika mereka menghadapi tantangan baru, mengungkap misteri, dan menemukan arti sejati menjadi seorang ninja.
                Konten ini akan memperkenalkan pembaca pada latar belakang cerita Boruto. Kita akan membahas bagaimana Boruto, sebagai anak dari Naruto Uzumaki, karakter utama dari seri sebelumnya, berusaha menemukan identitasnya sendiri dan menjalani jalan ninja yang sesuai dengan keinginannya. Kita akan menjelajahi perjalanan Boruto saat dia tumbuh menjadi seorang shinobi yang tangguh dan menghadapi berbagai ancaman yang menguji kekuatan dan tekadnya.',
                'status' => 0,
                'post_author' => $user2->id,
                'post_category' => $category1->id,
                'created_at' => now()
            ],
            [
                'title' => 'chainsaw man',
                'slug' => 'chainsaw-man',
                'metaDescription' => 'Chainsaw Man adalah Sebuah seri manga yang menegangkan dan brutal yang telah menggebrak komunitas anime dan manga.',
                'featuredImage' => 'chainsawman.jpeg',
                'date' => now(),
                'content' => 'Dalam artikel ini, kita akan memperkenalkan Chainsaw Man, seri manga yang telah mencuri perhatian para penggemar anime dan manga di seluruh dunia. Bersiaplah untuk menjelajahi dunia yang brutal, gelap, dan penuh dengan kejutan yang mengejutkan.
                Konten ini akan membahas cerita Chainsaw Man yang unik dan tidak konvensional. Kita akan mengenal Denji, protagonis utama yang menjalani kehidupan yang suram sebagai pemburu setan. Namun, segalanya berubah ketika ia mengalami perubahan tak terduga dan terhubung dengan Chainsaw Man, makhluk misterius dengan kekuatan luar biasa. Kita akan menyaksikan Denji berjuang untuk bertahan hidup, menghadapi musuh-musuh kejam, dan mengungkap misteri di balik asal-usul Chainsaw Man.',
                'status' => 0,
                'post_author' =>  $user2->id,
                'post_category' => $category2->id,
                'created_at' => now()
            ],

            [
                'title' => 'attack on titan',
                'slug' => 'attack-on-titan',
                'metaDescription' => 'Attack on Titan adalah Sebuah seri anime dan manga yang mengguncang dunia dengan ceritanya yang epik dan menegangkan.',
                'featuredImage' => 'aot.jpeg',
                'date' => now(),
                'content' => 'Attack on Titan (AOT) adalah sebuah seri manga dan anime yang diproduksi oleh Hajime Isayama. Ceritanya mengambil latar di dunia yang dihuni oleh manusia yang terkurung dalam tembok raksasa yang dibangun untuk melindungi mereka dari serangan mengerikan para Titan, makhluk raksasa pemakan manusia yang misterius. Seri ini mengikuti perjalanan Eren Yeager, Mikasa Ackerman, dan Armin Arlert, tiga teman yang bertekad untuk melawan Titan dan mengungkap misteri di balik mereka.
                Dengan alur cerita yang kompleks dan mendebarkan, AOT memadukan aksi yang intens, elemen misteri, dan pemeran karakter yang kuat. Seri ini tidak hanya menghadirkan pertempuran epik melawan Titan, tetapi juga menggali tema-tema yang mendalam, termasuk kekuasaan, pengorbanan, dan eksplorasi sifat manusia.',
                'status' => 0,
                'post_author' =>  $user2->id,
                'post_category' => $category2->id,
                'created_at' => now()
            ],

            [
                'title' => 'the wind rises',
                'slug' => 'the-wind-rises',
                'metaDescription' => '"The Wind Rises" adalah sebuah film animasi Jepang yang disutradarai oleh Hayao Miyazaki.',
                'featuredImage' => 'thewindrises.jpg',
                'date' => now(),
                'content' => '"The Wind Rises" adalah sebuah film animasi Jepang yang mengisahkan perjalanan hidup Jiro Horikoshi, seorang insinyur pesawat terkenal pada masa sebelum Perang Dunia II. Film ini menggambarkan kisah inspiratif tentang seorang pemimpi yang berjuang menghadapi tantangan dan konflik dalam upayanya untuk mewujudkan impian dan kecintaannya terhadap dunia penerbangan.
                Dalam film ini, Jiro Horikoshi mengalami pertemuan tak terduga dengan seorang perempuan muda yang memberinya semangat dan inspirasi untuk melangkah maju. Namun, dalam latar belakangnya yang penuh gejolak, Jiro juga menghadapi dilema moral. Ia terus berjuang mempertahankan impian dan ambisi profesionalnya dalam mengembangkan pesawat-pesawat yang indah, namun disadari bahwa pesawat-pesawat tersebut juga akan digunakan untuk tujuan perang.',
                'status' => 0,
                'post_author' =>  $user2->id,
                'post_category' => $category2->id,
                'created_at' => now()
            ],


            ]);

    }
}
