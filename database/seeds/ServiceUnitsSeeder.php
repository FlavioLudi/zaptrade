<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class ServiceUnitsSeeder extends CsvSeeder {

	public function __construct()
	{
		$this->table = 'service_units';
		$this->csv_delimiter = ';';
		$this->filename = base_path().'/database/seeds/csvs/unidades_atendimento_receita_federal.csv';
		$this->mapping = [
	    0 => 'name',
	    1 => 'address',
	    2 => 'neighborhood',
	    3 => 'city',
	    4 => 'state',
	    5 => 'cep',
		];
		$this->offset_rows = 1;
	}

	public function run()
	{
		// Recommended when importing larger CSVs
		DB::disableQueryLog();

		// Uncomment the below to wipe the table clean before populating
		DB::table($this->table)->truncate();

		parent::run();
	}
}
