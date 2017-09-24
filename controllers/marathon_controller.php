<?php

require 'models/marathon.php';

  class MarathonController {
    public function index() {
		$marathons = Marathon::all();
      	require_once('views/marathon/index.php');
    }
	
    public function error() {
      require_once('views/error.php');
    }

    public function show() {
      if (!isset($_GET['id'])) return call('pages', 'error');

      $marathon = Marathon::find($_GET['id']);
      require_once('views/marathon/show.php');
  	}
  }
?>