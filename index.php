<?php
require_once('vendor/autoload.php');
$todolist = new App\Todolist();
echo $todolist->addTask('Nouvelle tache');
print_r($todolist->listTask());
$todolist->removeTask('Nouvelle tache');
