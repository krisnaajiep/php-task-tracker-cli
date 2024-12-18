<?php

if (
  !file_exists('tasks.json') ||
  is_null(json_decode(file_get_contents('tasks.json'), true))
) file_put_contents('tasks.json', '[]');

$data = json_decode(file_get_contents('tasks.json'), true);

require_once 'functions.php';

if (!isset($argv[1]) || $argv[1] === 'help') {
  echo help();
  exit;
}

switch ($argv[1]) {
  case 'add':
    echo add($argv);
    break;

  case 'list':
    print_r(read($argv));
    exit;

  case 'update':
    echo update($argv);
    break;

  case 'delete':
    echo delete($argv);
    break;

  case strpos($argv[1], 'mark') !== false:
    echo mark($argv);
    break;

  default:
    echo "Command not found.";
    break;
}
