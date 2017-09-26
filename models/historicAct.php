<?php
class HistoricAct {
	public $title;
	public $site;
	public $date;

	public function __construct($title, $site, $date) {
		$this->title      	= $title;
		$this->site      	= $site;
		$this->date  		= $date;
	}
}
?>