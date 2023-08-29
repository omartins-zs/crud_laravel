<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title' => 'O senhor dos anéis',
            'pages' => '100',
            'price' => '10.22',
            'id_user' => '1',
        ]);

        $book->create([
            'title' => 'A onda',
            'pages' => '40',
            'price' => '101.00',
            'id_user' => '2',
        ]);

        $book->create([
            'title' => 'Titanic',
            'pages' => '200',
            'price' => '201.00',
            'id_user' => '2',
        ]);

        $book->create([
            'title' => 'Percy Jackson',
            'pages' => '990',
            'price' => '99.99',
            'id_user' => '1',
        ]);
        $book->create([
            'title' => 'As aventuras de PI',
            'pages' => '126',
            'price' => '7.99',
            'id_user' => '1',
        ]);
        $book->create([
            'title' => 'Pais das Maravilhas',
            'pages' => '54',
            'price' => '20.99',
            'id_user' => '2',
        ]);
        $book->create([
            'title' => 'Velozes e Furiosos',
            'pages' => '20',
            'price' => '100.99',
            'id_user' => '3',
        ]);
        $book->create([
            'title' => 'Harry Potter - Camara Secreta',
            'pages' => '189',
            'price' => '67.99',
            'id_user' => '3',
        ]);
    }
}
