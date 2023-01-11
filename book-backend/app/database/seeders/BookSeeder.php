<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now = now();
        $param = [
            [ 'ISBN' => '1', 'name' => '1冊目の本','name_sound' => 'いっさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '2', 'name' => '2冊目の本','name_sound' => 'にさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '3', 'name' => '3冊目の本','name_sound' => 'さんさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '4', 'name' => '4冊目の本','name_sound' => 'よんさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '5', 'name' => '5冊目の本','name_sound' => 'ごさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '6', 'name' => '6冊目の本','name_sound' => 'ろくさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '7', 'name' => '7冊目の本','name_sound' => 'ななさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '8', 'name' => '8冊目の本','name_sound' => 'はちさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '9', 'name' => '9冊目の本','name_sound' => 'きゅうさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '10', 'name' => '10冊目の本','name_sound' => 'じゅっさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '11', 'name' => '11冊目の本','name_sound' => 'じゅういっさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '12', 'name' => '12冊目の本','name_sound' => 'じゅうにさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '13', 'name' => '13冊目の本','name_sound' => 'じゅうさんさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
            [ 'ISBN' => '14', 'name' => '14冊目の本','name_sound' => 'じゅうよんさつめのほん', 'author' => 'furumi', 'publisher' => 'アリーナ出版', 'price' => '1200', 'created_at' => $now, 'updated_at' => $now, 'deleted_at'  => null ],
        ];
        Book::insert($param);


    }
}
