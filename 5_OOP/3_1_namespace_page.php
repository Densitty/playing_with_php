<?php
    namespace HTML;

    class Page {
      // public $row;
      // public $column;

      function __construct($row = 3, $column = 2) {
        $this -> row = $row;
        $this -> column = $column;
      }

      public function createPage() {
        return "create an html page of " . $this->row . " rows and " . $this -> column . " columns";
      }
      
    }

    function make_table() {
      return "create a table for our webpage.";
    }
  ?>