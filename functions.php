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

function show(array $argv)
{
  global $data;

  if (isset($argv[2])) {
    $status = ['todo', 'in progress', 'done'];

    if (!in_array($argv[2], $status)) return 'Status not found.';

    $result = "\nFilter (Status: {$argv[2]})\n";
    $filteredData = [];

    foreach ($data as $task)
      if ($task['status'] == $argv[2])
        array_push($filteredData, $task);

    $data = $filteredData;
  } else {
    $result = "\nFilter (None)\n";
  }

  $result .= "\nTasks:\n";

  foreach ($data as $task) {
    $result .= "\n";

    foreach ($task as $taskKey => $taskValue)
      $result .= " {$taskKey}: {$taskValue}\n";
  }

  return $result;
}

function update(array $argv): string
{
  if (!isset($argv[2]) || !isset($argv[3]))
    return "Updated task description or id required\n";

  global $data;

  foreach ($data as $key => $value) {
    if ($value['id'] == $argv[2]) {
      $id = $argv[2];
      $data[$key]['description'] = $argv[3];
      $data[$key]['updated_at'] = date('Y-m-d H:i:s');

      file_put_contents('tasks.json', json_encode($data, JSON_PRETTY_PRINT));

      return "Task updated successfully (ID: $id)\n";
    }
  }

  return "Id not found.\n";
}

function mark(array $argv): string
{
  if (!isset($argv[2])) return "Task id required\n";

  global $data;

  foreach ($data as $key => $value) {
    if ($value['id'] == $argv[2]) {
      $id = $argv[2];
      $data[$key]['status'] = $argv[1] === 'mark-in-progress' ? 'in progress' : 'done';
      $data[$key]['updated_at'] = date('Y-m-d H:i:s');

      file_put_contents('tasks.json', json_encode($data, JSON_PRETTY_PRINT));

      return "Task status updated to {$data[$key]['status']} (ID: $id)\n";
    }
  }

  return "Task id not found.\n";
}
