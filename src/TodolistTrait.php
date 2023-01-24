<?php
namespace App;
trait TodolistTrait{
    private array $task = [];

    public function addTask($task){
        $this->task[] = $task;
        // array_push($this->task, $task);
        return "Votre tache a bien été ajoutée" . PHP_EOL;
    }

    public function removeTask($task){
        $key = array_search($task, $this->task);
        unset($this->task[$key]);
        return "Votre tache a bien été supprimée" . PHP_EOL;
    }

    public function listTask()
    {
        foreach ($this->task as $task) {
            echo $task . PHP_EOL;
        }
    }
}