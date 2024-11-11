# PHP Task Tracker CLI

A simple Task Tracker command line interface (CLI) App built with PHP that used to track and manage your tasks. This project inspired by [roadmap.sh](https://roadmap.sh/projects/task-tracker).

## Features

- **Add a New Task**: Create a new task with a description.
- **List All Tasks**: Display a list of all tasks with their details.
- **List Tasks By Status**: Display a list of all tasks by status.
- **Update Task**: Modify the description of an existing task.
- **Update Task Status**: Modify the status of an existing task.
- **Delete a Task**: Remove a task from the list.

## Prerequisites

To run this CLI tool, you’ll need:

- **PHP**: Version 7.4 or newer

## How to install

1. Clone the repository

   ```shell script
   git clone https://github.com/krisnaajiep/php-task-tracker-cli.git
   ```

2. Change the current working directory

   ```shell script
   cd path/php-task-tracker-cli
   ```

3. Run the task tracker
   ```shell script
   php task-cli.php
   ```

## How To Use

Usage: `php task-cli.php command [arguments]`

Available Commands:

| Command            | Arguments                 | Description                             |
| ------------------ | ------------------------- | --------------------------------------- |
| `add`              | `[task_name]`             | Adding a new task                       |
| `update`           | `[task_id] [description]` | Updating task                           |
| `delete`           | `[task_id]`               | Deleting task                           |
| `mark-in-progress` | `[task_id]`               | Updating task status to **in-progress** |
| `mark-in-done`     | `[task_id]`               | Updating task status to **done**        |
| `list`             |                           | Listing all tasks                       |
| `list`             | `[status]`                | Listing all tasks by status             |

### Example

- Adding a new task

  ```shell script
  php task-cli.php add "Buy Groceries"
  ```

- Updating task

  ```shell script
  php task-cli.php update 1 "Buy groceries and cook dinner"
  ```

- Deleting task

  ```shell script
  php task-cli.php delete 1
  ```

- Update task status to in progress

  ```shell script
  php task-cli.php mark-in-progress 1
  ```

- Update task status to done

  ```shell script
  php task-cli.php mark-done 1
  ```

- Listing all tasks

  ```shell script
  php task-cli.php list
  ```

- Listing tasks by status

  ```shell script
  php task-cli.php list done
  ```

  ```shell script
  php task-cli.php list todo
  ```

  ```shell script
  php task-cli.php list in-progress
  ```
