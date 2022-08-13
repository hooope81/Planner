<?php

class TaskService
{
    public static function addComment(Task $task, Comment $comment)
    {
        $text = $task->getDescription() . PHP_EOL . "Комментарий: " . $comment->getText() . PHP_EOL;
        $task->setDescription($text);
    }
}
