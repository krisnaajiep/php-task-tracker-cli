<?php

function add(array $argv): string
{
  if (!isset($argv[2])) return "Task description required\n";

  global $data;

  $id = count($data) + 1;

  foreach ($data as $key => $value) {
    if ($value['id'] == $id) $id++;
  }

  array_push($data, [
    'id' => $id,
    'description' => $argv[2],
    'status' => 'todo',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s'),
  ]);

  file_put_contents('tasks.json', json_encode($data, JSON_PRETTY_PRINT));

  return "Task added successfully (ID: $id)\n";
}
