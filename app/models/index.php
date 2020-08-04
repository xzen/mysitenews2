<?php
  $host = 'localhost';
  $login = 'root';
  $password = '123575';
  $dataBase = 'movies';

  $mysqli = new mysqli($host, $login, $password, $dataBase);
  $mysqli->query("SET NAMES 'utf8'");

  if ($mysqli->connect_errno) {
    echo 'Echec lors de la connexion à MySQL : ' . $mysqli->connect_error;

    $mysqli->close();
  }
