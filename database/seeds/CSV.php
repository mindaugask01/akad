<?php
use Flynsarmy\CsvSeeder\CsvSeeder;

class CSV extends CsvSeeder {

    public function __construct()
    {

        $this->table = 'grupes';
        $this->filename = base_path().'/database/seeds/csvs/grupes.csv';
        $this->mapping = [
            0 => 'id',
            1 => 'name',
            2 => 'studentu_sk',
            3 => 'programa'
        ];
    }

    public function run()
    {
        // Recommended when importing larger CSVs
        //DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        //DB::table($this->table)->truncate();

        parent::run();
    }
}