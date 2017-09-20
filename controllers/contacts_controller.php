<?php
  class ContactsController {
    public function index() {
      require_once('views/contacts/index.php');
    }

    public function error() {
      require_once('views/error.php');
    }
  }
?>