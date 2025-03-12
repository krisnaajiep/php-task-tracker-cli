# PHP Task Tracker CLI

> Simple Task Tracker CLI (Command Line Interface) App built with PHP.

## Table of Contents

* [General Info](#general-information)
* [Technologies Used](#technologies-used)
* [Features](#features)
* [Setup](#setup)
* [Usage](#usage)
* [Project Status](#project-status)
* [Acknowledgements](#acknowledgements)

## General Information

PHP Task Tracker CLI is a simple Command Line Interface application that allows users to manage their task list. This project is designed to explore and practice working with the Command Line Interface (CLI) and filesystem operations in PHP.

## Technologies Used

* PHP - version 8.3.6

## Features

List the ready features here:

* **Adding a New Task**: Create a new task with a description.
* **Listing All Tasks**: Display a list of all tasks with their details.
* **Listing Tasks By Status**: Display a list of all tasks by status.
* **Updating Tasks**: Modify the description of an existing task.
* **Marking a Task**: Modify the status of an existing task.
* **Deleting Tasks**: Remove a task from the list.

## Setup

To run this CLI tool, you’ll need:

* **PHP**: Version 8.3 or newer

How to install:

1. Clone the repository

   ```bash
   git clone https://github.com/krisnaajiep/php-task-tracker-cli.git
   ```

2. Change the current working directory

   ```bash
   cd path/php-task-tracker-cli
   ```

3. Run the task tracker

   ```bash
   php task-cli.php
   ```

## Usage

* Adding a new task

  ```bash
  php task-cli.php add "Buy Groceries"
  ```

* Updating task

  ```bash
  php task-cli.php update 1 "Buy groceries and cook dinner"
  ```

* Deleting task

  ```bash
  php task-cli.php delete 1
  ```

* Update task status to in progress

  ```bash
  php task-cli.php mark-in-progress 1
  ```

* Update task status to done

  ```bash
  php task-cli.php mark-done 1
  ```

* Listing all tasks

  ```bash
  php task-cli.php list
  ```

* Listing tasks by status

  ```bash
  php task-cli.php list done
  ```

  ```bash
  php task-cli.php list todo
  ```

  ```bash
  php task-cli.php list in-progress
  ```

## Project Status

Project is: _complete_.

## Acknowledgements

This project was inspired by [roadmap.sh](https://roadmap.sh/projects/task-tracker).
