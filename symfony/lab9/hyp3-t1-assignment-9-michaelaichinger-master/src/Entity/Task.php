<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Task {

    #[Assert\NotBlank]
    protected $task;
    
    protected $dueDate;

    public function getTask() { return $this->task; }
    public function setTask($task) { $this->task = $task; }

    public function getDueDate() { return $this->dueDate; }
    public function setDueDate($dueDate) { $this->dueDate = $dueDate; }

}