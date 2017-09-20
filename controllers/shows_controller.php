<?php
  class ShowsController {
    public function index() {
      require_once('views/shows/index.php');
    }

    public function error() {
      require_once('views/error.php');
    }
  }
?>