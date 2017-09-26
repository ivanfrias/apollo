<?php

  require 'models/historicAct.php';

  class Historic {
    public $id;
    public $year;
    public $historicActs;

    public function __construct($id, $year) {
      $this->id     		= $id;
      $this->year  			= $year;
    }

    public static function all() {
		$historic_string = file_get_contents("data/historic.json");
		$historics = json_decode($historic_string, true)['data'];
		return Historic::getHistorics($historics);
    }
	
	public static function getHistorics($historics) {
		$list = [];
				
		foreach($historics as $historic) {
			array_push($list, new Historic($historic['id'], $historic['year'])); 
		}
		
		return $list;
	}
	
	public static function getHistoricActs($historic) {
		$actsList = [];
		
		$acts = $historic['acts'];
		
		foreach($acts as $act) {
			array_push($actsList, new HistoricAct($act['title'], $act['site'], $act['date']));
		}
		
		return $actsList;
	}

    public static function find($id) {
		$historic_string = file_get_contents("data/historic.json");
		$historics = json_decode($historic_string, true)['data'];
		
		foreach($historics as $historic) {
			if($historic['id'] == $id) {
				$acts = Historic::getHistoricActs($historic);
				$currentHistoric = new Historic($historic['id'], $historic['year']);
				$currentHistoric->historicActs = $acts;
				return $currentHistoric;
			}
		}
		
		return null;
    }
  }
?>