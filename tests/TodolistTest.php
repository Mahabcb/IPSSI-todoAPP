<?php

namespace Tests;

use App\Todolist;
use PHPUnit\Framework\TestCase;

class TodolistTest extends TestCase
{
    public function testAddTask()
    {
        $todolist = new Todolist();
        $todolist->addTask('Task 1');
        $this->assertEquals(1, $todolist->countTask());

        $todolist->addTask('Task 2');
        $this->assertEquals(2, $todolist->countTask());
    }

    public function testRemoveTask()
    {
        $todolist = new Todolist();
        $todolist->addTask('Task 1');
        $todolist->addTask('Task 2');
        $todolist->addTask('Task 3');
        $this->assertEquals(3, $todolist->countTask());

        $todolist->removeTask('Task 2');
        $this->assertEquals(2, $todolist->countTask());
    }

    public function testListIsEmpty()
    {
        $todolist = new Todolist();
        $this->assertEquals(0, $todolist->countTask());
        $this->assertEquals("Vous n'avez aucune tache" . PHP_EOL, $todolist->listTask());
    }

    public function testList()
    {
        $todolist = new Todolist();
        $todolist->addTask('Task 1');
        $todolist->addTask('Task 2');
        $todolist->addTask('Task 3');

        $this->assertEquals(3, $todolist->countTask());
        // $this->assertEquals("Task 1\nTask 2\nTask 3\n", $todolist->listTask());
    }
    
}