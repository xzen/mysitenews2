<?php
  include './app/models/index.php';

  $query = 'SELECT * FROM movies';

  $results = $mysqli->query($query);