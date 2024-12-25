<?php

if (
  !file_exists('tasks.json') ||
  is_null(json_decode(file_get_contents('tasks.json'), true))
) file_put_contents('tasks.json', '[]');

$data = json_decode(file_get_contents('tasks.json'), true);

require_once 'functions.php';

switch ($argv[1]) {
  case 'add':
    echo add($argv);
    break;

  default:
    echo "Command not found.\n";
    break;
}