<?php
  class Marathon {
    public $id;
    public $title;
    public $dates;

    public function __construct($id, $title, $dates) {
      $this->id      = $id;
      $this->title   = $title;
      $this->dates   = $dates	;
    }

    public static function all() {
		$list = [];
		$marathons_string = file_get_contents("data/marathons.json");
		$marathons = json_decode($marathons_string, true)['data'];
		
		foreach($marathons as $marathon) {
			array_push($list, new Marathon($marathon['id'], $marathon['title'], $marathon['dates'])); 
		}

		return $list;
		
    }

    public static function find($id) {
	  	$marathons_string = file_get_contents("data/marathons.json");
		$marathons = json_decode($marathons_string, true)['data'];
		
		$m = array_filter($marathons, function($marathon) use ($id) {
		  return $marathon['id'] == $id;
		});
		
		$first = $m[array_keys($m)[0]];
		return new Marathon($first['id'], $first['title'], $first['dates']);
		
      //$db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
      //$req = $db->prepare('SELECT * FROM posts WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      //$req->execute(array('id' => $id));
      //$post = $req->fetch();

      //return new Post($post['id'], $post['author'], $post['content']);
    }
  }
?>