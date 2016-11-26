<?php

use Illuminate\Database\Seeder;
use Flynsarmy\CsvSeeder\CsvSeeder;

class DatabaseSeeder extends Seeder {
public function run()
{
    $this->call('CSV');
}

}