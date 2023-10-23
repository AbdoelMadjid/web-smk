<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Ekstrakurikuler;
use App\Models\Header;
use App\Models\Identity;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Welcome;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dimas Candra Pebriyanto',
            'email' => 'dimascndraa18@gmail.com',
            'username' => 'dimas',
            'password' => bcrypt('password'),
        ]);

        Identity::create([
            "name" => "SMK Negeri 1 Kadipaten",
            "alias" => "SMKN 1 Kadipaten",
            "quotes" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "email" => "admin@smkn1kadipaten.sch.id",
            "maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.876538502919!2d108.16892341400762!3d-6.784875795095855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f290a172857b7%3A0x9b75b5e0e32203c8!2sSMKN%201%20Kadipaten!5e0!3m2!1sid!2sid!4v1668696772052!5m2!1sid!2sid",
            "telp" => "0233-661434",
            "nohp" => "6283865284307",
            "address" => "Jl.Silihwangi Km 30 Desa Liangjulang Kec. Kadipaten, Majalengka, Jawa Barat, Indonesia Indonesia",
            "brand" => "aasd.png",
            "facebook" => "facebook.com",
            "instagram" => "instagram.com",
            "twitter" => "twitter.com",
            "youtube" => "youtube.com",
        ]);

        Welcome::create([
            'kepsek_name' => 'Dimas Candra Pebriyanto',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, mollitia illo aspernatur est expedita labore similique dicta laboriosam, quod quas qui optio ea incidunt eaque rerum unde sapiente eveniet quasi ad nemo blanditiis! Obcaecati maxime optio iste quod dolore officia, eaque fugit molestiae eligendi laudantium expedita animi error debitis voluptatibus, rem beatae perspiciatis laborum hic cupiditate suscipit voluptate dicta mollitia</p><p>reiciendis dolorum. Exercitationem ratione commodi blanditiis rem corporis dolorum neque dicta ex, eveniet voluptas? Iure aliquid ut dolores debitis libero laborum reiciendis perferendis velit magni! Sunt similique, quas repellendus at delectus maxime voluptatum eum quasi sit. Soluta doloremque enim dolor.</p>',
            'image' => 'kepsek.png',
        ]);

        Header::create([
            'image_1' => 'example.png',
            'image_2' => 'example.png',
            'image_3' => 'example.png',
            'image_4' => 'example.png',
        ]);

        // \App\Models\User::factory(10)->create();
        // Post::factory(20)->create();
    }
}
