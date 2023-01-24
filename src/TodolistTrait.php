<?php

namespace App;

trait TodolistTrait{
    private array $task = [];

    public function addTask($task){
        $this->task[] = $task;
        // array_push($this->task, $task);
        echo "Votre tache a bien été ajoutée" . PHP_EOL;
    }

    public function removeTask($task){
        $key = array_search($task, $this->task);
        unset($this->task[$key]);
        echo "Votre tache a bien été supprimée" . PHP_EOL;
    }

    public function listTask()
    {
        if(!empty($this->task)){
            foreach ($this->task as $task) {
                echo $task . PHP_EOL;
            }
        }else{
            echo "Vous n'avez aucune tache" . PHP_EOL;
        }
        
    }
}