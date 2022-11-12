<?php 

require_once 'BaseProject.php';
require_once 'Project.php';
require_once 'Task.php';


$project = new Project("Make a project");
$project->addTask("Create repository");
$project->addTask("Code");
$project->addTask("Code...");
$project->addTask("Commit");
$project->addTask("Push into repo, make pull request");


$project2 = new Project("Project 2");

var_dump($project2);











