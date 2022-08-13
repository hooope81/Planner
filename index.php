<?php
require_once "Task.php";
require_once "User.php";
require_once "Comment.php";
require_once "TaskService.php";

$user = new User("Nadin", "111@gmail.com");
$task = new Task("Выпить кофе", 1, $user);
$comment = new Comment($task, "С пончиком");

$task->setDescription("Выпить много кофе");
TaskService::addComment($task, $comment);

echo $task->writeTask();
echo $task->markAsDone();