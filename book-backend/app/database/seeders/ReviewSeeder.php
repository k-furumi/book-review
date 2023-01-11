<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $books = Book::all();
        foreach( $books as $book ){

            Review::factory()->state(['book_id' => $book->id])->count(rand(0,20))->create();
        }
    }
}
