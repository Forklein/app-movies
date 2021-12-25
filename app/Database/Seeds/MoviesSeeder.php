<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\MovieModel;

class MoviesSeeder extends Seeder
{
    public function run()
    {

        for($i=0; $i < 10; $i++){
            $model = new MovieModel();
            $model->insert([
                'name'      => static::faker()->name,
                'description' => static::faker()->text,
                'genre' => static::faker()->words(1, true)
            ]);
        }
    }
}
