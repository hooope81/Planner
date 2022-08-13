<?php

class Task
{
    private ?string $description;
    private DateTime $dateCreated;
    private ?DateTime $dateUpdated;
    private ?DateTime $dateDone;
    private ?int $priority;
    private bool $isDone;
    private User $user;

    public function __construct(string $description, int $priority, User $user)
    {
        $this->description = $description;
        $this->dateCreated = new DateTime();
        $this->dateUpdated = null;
        $this->dateDone = null;
        $this->priority = $priority;
        $this->isDone = false;
        $this->user = $user;
    }
    public function writeTask(): string
    {
        $format = "d.m.Y H:i:s";
        $data = $this->dateCreated->format($format);
        return $data . PHP_EOL . "Задача: $this->description" . PHP_EOL;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
        $this->dateUpdated = new DateTime();
    }


    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    public function markAsDone(): string
    {
        $this->isDone = true;
        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
        return "Поздравляем! Задача выполнена\n";
    }
}