<?php
class Act {
	public $id;
	public $title;
	public $author;
	public $description;

	public function __construct($id, $title, $author, $description) {
		$this->id      		= $id;
		$this->title      	= $title;
		$this->author  		= $author;
		$this->description 	= $description;
	}

	public static function all() {
		$list = [];
		$acts_string = file_get_contents("data/acts.json");
		$acts = json_decode($acts_string, true)['data'];

		foreach($acts as $act) {
			$list[] = new Act($act['id'], $act['title'], $act['author'], $act['description']);
		}

		return $list;
	}

	public static function find($id) {
		$acts = Act::all();
		
		foreach($acts as $act) {
			if ( $act->id == $id ) {
				return $act;
			}
		}
		
		return null; 
	}
}
?>