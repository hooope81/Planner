<?php

class Comment
{
    private User $author;
    private Task $task;
    private string $text;

    public function __construct(Task $task, string $text)
    {
        $this->author = $task->getUser();
        $this->task = $task;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }



}