<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->insert([
            'nama_product' => 'THE POWER OF MUSIC– The 4th Album ‘THE WAR’ Repackage',
            'deskripsi' => 'This is THE WAR Repackaged album. Which collaboration with MARVEL.
                            Detail album include CD, Photo Card, Post Card, Poster, Photobook.
                            Track List -> Power, The eve, Sweet lies, Ko Ko Bop,What U do?, Forever,
                            Boomerang, Diamond, Touch it, Chill, Walk On Memories, Going Crazy.',
            'harga' => '350000',
            'berat' => 1,
            'picture' => 'war.jpg',
            'stok' => 10
        ]);

        DB::table('products')->insert([
            'nama_product' => 'LOVE SHOT– The 5th Album "DON’T MESS UP MY TEMPO" Repackage',
            'deskripsi' => 'This is DON’T MESS UP MY TEMPO Repackaged album.
                            This version includes a booklet (72 pages), 1 photo card (random 1 out of 8), 
                            and 1 poster (random 1 out of 2). The poster comes folded..
                            Track List -> Love Shot, Tempo, 트라우마 (Trauma), Wait, Sign, 닿은 순간 (Ooh La La La),
                            Gravity, 가끔 (With You), 24/7, 후폭풍 (Bad Dream), Damage, 여기 있을게 (Smile On My Face),
                            오아시스 (Oasis), 宣告 (Love Shot), 节奏 (Tempo)',
            'harga' => '275000',
            'berat' => 1,
            'picture' => 'loveshot.jpg',
            'stok' => 8
        ]);

        DB::table('products')->insert([
            'nama_product' => 'The 6th Album "OBSESSION" X-EXO Ver.',
            'deskripsi' => 'The album includes 6 photo books, 1 folded poster (random 1 out of 6), 
                            1 initial-only poster (folded, random 1 out of 7), 1 photo slide (random 1 out of 6), 
                            and 1 photo card (random 1 out of 12). All are different per version. 
                            Track List -> Obsession, Trouble, Jekyll, Groove, Ya Ya Ya, Baby You Are 
                            Non Stop, Day After Day, Butterfly Effect, Obsession (Chinese Version) ',
            'harga' => '320000',
            'berat' => 1,
            'picture' => 'obsession1.jpg',
            'stok' => 8
        ]);

        DB::table('products')->insert([
            'nama_product' => 'The 6th Album "OBSESSION" EXO Ver.',
            'deskripsi' => 'The album includes 6 photo books, 1 folded poster (random 1 out of 6), 
                            1 initial-only poster (folded, random 1 out of 7), 1 photo slide (random 1 out of 6), 
                            and 1 photo card (random 1 out of 12). All are different per version. 
                            Track List -> Obsession, Trouble, Jekyll, Groove, Ya Ya Ya, Baby You Are 
                            Non Stop, Day After Day, Butterfly Effect, Obsession (Chinese Version) ',
            'harga' => '320000',
            'berat' => 1,
            'picture' => 'obsession2.jpg',
            'stok' => 8
        ]);

        DB::table('products')->insert([
            'nama_product' => 'The 6th Album "OBSESSION" OBSESSION Ver.',
            'deskripsi' => 'The album includes 6 photo books, 1 folded poster (random 1 out of 6), 
                            1 initial-only poster (folded, random 1 out of 7), 1 photo slide (random 1 out of 6), 
                            and 1 photo card (random 1 out of 12). All are different per version. 
                            Track List -> Obsession, Trouble, Jekyll, Groove, Ya Ya Ya, Baby You Are 
                            Non Stop, Day After Day, Butterfly Effect, Obsession (Chinese Version) ',
            'harga' => '320000',
            'berat' => 1,
            'picture' => 'obsessionmem.jpg',
            'stok' => 8
        ]);

        DB::table('products')->insert([
            'nama_product' => 'EXO-SC 1st Mini Album What A Life',
            'deskripsi' => 'EXO-SC’s first mini album ‘What a life’ is to be released on July 22nd with a 
                            total of six diverse songs that showcase SEHUN and CHANYEOL’s chemistry as a unit.
                            The album includes Cover 3 versions (SC2019_Y Ver. / SC2019_P Ver. / SC2019_G Ver.),
                            Booklet (different per version, 96p), Folded Poster (different per version),
                            Photo Card (Random 1 out of 4 per version), Post Card (Random 1 out of 3),
                            Name Tag (Random 1 out of 3), Sticker. All are different per version. 
                            Track List -> What a life, 있어 희미하게 (Just us 2) (Feat. Gaeko), 
                            부르면 돼 (Closer to you), 선 (Borderline), 롤러코스터 (Roller coaster), 
                            夢 (Daydreamin’) ',
            'harga' => '275000',
            'berat' => 1,
            'picture' => 'sc.jpg',
            'stok' => 10
        ]);

        DB::table('products')->insert([
            'nama_product' => 'EXO BIRTHDAY BRACELET',
            'deskripsi' => 'This EXO Bracelet is from Pantone Color of the Year 2020 edition. 
                            Show off your love for EXO with this bracelet. Limited quantities available.
                            Content + Care -> Material: Brass, Color: Rose Quartz,
                            Pendant: Big - 1.4cm, Small - 0.8 cm, Chain: 16cm + 4cm',
            'harga' => '1019000',
            'berat' => 1,
            'picture' => 'bracelet.jpg',
            'stok' => 4
        ]);

        DB::table('products')->insert([
            'nama_product' => 'EXO MEMBER DOLLS',
            'deskripsi' => 'This EXO Members Dolls. 
                            Show off your love for EXO with this Doll. Limited quantities available.
                            Doll Size : 120x250mm, Material : Polyester
                            Also Included : T-Shirt + Hooded Shirt, 1 of 9 random photocard, 1 dolls clothes',
            'harga' => '480000',
            'berat' => 1,
            'picture' => 'doll.jpg',
            'stok' => 9
        ]);

        DB::table('products')->insert([
            'nama_product' => 'EXO LIGHTSTICK V.2',
            'deskripsi' => 'This OFFICIAL EXO Fanlight ver 2. 
                            Upgraded EXO lightstick features a signature logo. Simple and minimalist design. 
                            Use this lightstick to stand out and be noticed by your EXO bias.
                            Light Mode: On-Blink-Flicker-Off, Maximum Operation: 5 Hours, Power: 3AAA Batteries,
                            Weight: 1.5lbs /680g, Concert light syncing feature / Changes color,
                            Connects via Bluetooth with a smartphone',
            'harga' => '720000',
            'berat' => 1,
            'picture' => 'Ls2.jpg',
            'stok' => 5
        ]);

        DB::table('products')->insert([
            'nama_product' => 'EXO LIGHTSTICK V.3',
            'deskripsi' => 'This OFFICIAL EXO Fanlight ver 3. 
                            Upgraded EXO lightstick features a signature logo. Simple and minimalist design. 
                            Use this lightstick to stand out and be noticed by your EXO bias.
                            Light Mode: On-Blink-Flicker-Off, Maximum Operation: 5 Hours,
                            Weight: 1.5lbs /680g, Concert light syncing feature / Changes color,
                            Connects via Bluetooth with a smartphone, Comes Without battery - 
                            Can be used with three genuine AAA alkaline batteries',
            'harga' => '720000',
            'berat' => 1,
            'picture' => 'Ls3.jpg',
            'stok' => 5
        ]);
    }
}
