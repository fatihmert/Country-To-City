<?php

/*
	Author: 			  Fatih Mert Doğancan
	Github:				  fatihmert
	Release Data:		01.06.2017 - 06:15

	Note:				    When you searching anything please write latin abc (not allow çşıüğö) 
*/


class Country2City{
	private $file, $arr;
	public function __construct(){
		$this->file = file_get_contents("country2city.json");
		$this->arr = json_decode($this->file,true);
		return $this;
	}

	public function getCities($countryName){
		if(isset($this->arr[(string)$countryName])){
			return $this->arr[(string)$countryName];
		}else{
			return 0;
		}
	}

	public function getCountries(){
		return array_keys($this->arr);
	}

	public function findCountryFromCity($cityName){
		foreach ($this->arr as $key => $value) {
			foreach ($value as $city) {
				if((string)$city == (string)$cityName){
					return $key;
				}
			}
		}
		return 0;
	}
}

/*
  Example Using
*/

echo "<pre>;
$c2c = new Country2City();

echo "<h1>Cities of Turkey</h1><br/>";
print_r($c2c->getCities("Turkey"));

echo "Istanbul in ".$c2c->findCountryFromCity("Istanbul");

echo "<br/><h1>Countries of World</h1><br/>";
print_r($c2c->getCountries());

?>
