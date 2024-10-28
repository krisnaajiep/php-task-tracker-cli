# php-task-tracker-cli
Task Tracker CLI App using PHP. Inspired by https://roadmap.sh/projects/task-tracker.

## Usage
  php index.php command [arguments]

## Available Commands
  add [task_name]  
      `Add a new task with the specified name.`  
      `Usage: php task-cli.php add "task_name"`  
      `Example: php task-cli.php add "Buy groceries"`  
      `Output: Task added successfully (ID: 1)`

  update [task_id] [new_description]  
      `Update the description of an existing task with the specified ID.`  
      `Usage: php task-cli.php update [task_id] "new_description"`  
      `Example: php task-cli.php update 1 "Buy groceries and cook dinner"`  
      `Output: Task updated successfully (ID: 1)`  

  delete [task_id]  
      `Permanently delete the task with the specified ID.`  
      `Usage: php task-cli.php delete [task_id]`  
      `Example: php task-cli.php delete 1`  
      `Output: Task deleted successfully (ID: 1)`  

  mark-in-progress [task_id]  
      `Mark the task with the specified ID as "in progress".`  
      `Usage: php task-cli.php mark-in-progress [task_id]`  
      `Example: php task-cli.php mark-in-progress 1`  
      `Output: Task marked as in progress (ID: 1)`  

  mark-done [task_id]  
      `Mark the task with the specified ID as "done".`  
      `Usage: php task-cli.php mark-done [task_id]`  
      `Example: php task-cli.php mark-done 1`  
      `Output: Task marked as done (ID: 1)`  

  list [status]  
      `List all tasks, or filter tasks by status (done, todo, in-progress).`  
      `Usage:`  
      `    php task-cli.php list               # List all tasks`  
      `    php task-cli.php list done          # List only tasks marked as "done"`  
      `    php task-cli.php list todo          # List only tasks marked as "todo"`  
      `    php task-cli.php list in-progress   # List only tasks marked as "in progress"`  
      `Example Output:`  
      `    - Task ID: 1, Name: "Buy groceries", Status: "done"`  
      `    - Task ID: 2, Name: "Finish report", Status: "in progress"`  

## Notes
  - Use `[task_id]` from the output list to specify which task to update, delete, or change status.
  - For `[task_name]` and `[new_description]`, enclose text in quotes for multi-word values.
  - Commands are case-sensitive; enter them exactly as shown.
