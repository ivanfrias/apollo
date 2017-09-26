<?php

  require 'models/act.php';
  
  class ActController {
    public function index() {
      $acts = Act::all();
      require_once('views/act/index.php');
    }

    public function show() {
      if (!isset($_GET['id']))
        return call('shows', 'error');

      $act = Act::find($_GET['id']);
      require_once('views/act/show.php');
    }
  }
?>