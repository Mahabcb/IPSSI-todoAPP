<?php

namespace App;

use App\TodolistTrait;
use App\TodolistInterface;

class Todolist implements TodolistInterface{
    use TodolistTrait;
    
    public function execute()
    {
        do {
            echo "Enter a command (add, remove, list, exit): ";
            $line = trim(readline());
        
            switch($line){
                case 'add':
                    echo "Enter the task: ";
                    $task = trim(readline());
                    $this->addTask($task);
                    break;
                case 'remove':
                    echo "Enter the task: ";
                    $task = trim(readline());
                    $this->removeTask($task);
                    break;
                case 'list':
                    $this->listTask();
                    break;
                case 'exit':
                    echo "Exiting...\n";
                    break 2;
                default:
                    echo "Invalid command\n";
            }
        } while (true);
    }


    public function countTask()
    {
        return count($this->task);
    }
}