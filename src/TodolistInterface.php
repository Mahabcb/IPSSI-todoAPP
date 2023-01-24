<?php

namespace App;

interface TodolistInterface{
    public function addTask($task);
    public function removeTask($task);
    public function listTask();
}