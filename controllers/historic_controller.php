<?php

  require 'models/historic.php';
  
  class HistoricController {
    public function index() {
      $historics = Historic::all();
      require_once('views/historic/index.php');
    }

    public function show() {
      if (!isset($_GET['id']))
        return call('shows', 'error');

      $historic = Historic::find($_GET['id']);
      require_once('views/historic/show.php');
    }
  }
?>