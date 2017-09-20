<?php
  class AboutController {
    public function index() {
      require_once('views/about/index.php');
    }

    public function error() {
      require_once('views/error.php');
    }
  }
?>