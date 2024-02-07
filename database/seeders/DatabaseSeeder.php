<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        Book::factory(200)->create();
    }
}
