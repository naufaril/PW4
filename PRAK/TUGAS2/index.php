<?php

use Person\Student;
use Person\Teacher;

require_once 'Traits/Printable.php';
require_once 'Person/Person.php';
require_once 'Person/Student.php';
require_once 'Person/Teacher.php';

$student = new Student("Travis", 25);
echo "Student Info:\n";
$student->printInfo();
echo "Bilang:\n";
$student->speak();
echo "\n";

$teacher = new Teacher("Joko", 45);
echo "Teacher Info:\n";
$teacher->printInfo();
echo "Bilang:\n";
$teacher->speak();
echo "\n";