<?php

use MyNamespace\Course;
use MyNamespace\Manager;
use MyNamespace\Student;

require_once 'Course.php';
require_once 'Student.php';
require_once 'Manager.php';

$manager = new Manager();

$student1 = new Student(1, 'Mohanad Abu El-Atta', 'mohanad.abdalah50@gmail.com');
$student2 = new Student(2, 'Abdullah Abu El-Atta', 'Abdullah15@gmail.com');
$student3 = new Student(3, 'Mohammad Abu El-Atta', 'Mohammad_Yehia@gmail.com');


$manager->addStudent($student1);
$manager->addStudent($student2);

$addedStudent1 = $manager->getStudentById(1);
$addedStudent2 = $manager->getStudentById(2);

$manager->deleteStudent(2);

?>
<!DOCTYPE html>
<html>
<head>
    <title>HomeWork3 Output</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .output {
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .output p {
            margin: 0;
        }
    </style>
</head>

<body>
<div class="container">
    <h1>HomeWork3 Output</h1>

    <div class="output">
        <p>

        <h3>Hello, Manager !</h3>
        <!-- Adding new 'Student' by 'Manager' and retrieve the 'Student' Details -->
        <h4 style="float: right">( Adding And Retrieving )</h4>

        <p>
            - Manager added new student Successfully :
        <ul>
            <li>ID : <?= $addedStudent1->getId() ?> </li>
            <li>Name : <?= $addedStudent1->getName() ?> </li>
            <li>Email : <?= $addedStudent1->getEmail() ?> </li>
        </ul>

        <p>
            - Manager added new student Successfully :
        <ul>
            <li>ID : <?= $addedStudent2->getId() ?> </li>
            <li>Name : <?= $addedStudent2->getName() ?> </li>
            <li>Email : <?= $addedStudent2->getEmail() ?> </li>
        </ul>

        <!--------------------------------------------------------------------------------------->

        <!-- Updating 'Student ( 1 ) ' by 'Manager' and retrieve the 'Updated Student' Details -->

        <?php
        $manager->updateStudent(1, 'updated Name', 'updated@Email');
        ?>
        <br><br>
        <hr>
        <br>
        <h4 style="float: right">( Updating )</h4>
        <p>
            - Manager updated student (1) Successfully :
        <ul>
            <li>ID : <?= $addedStudent1->getId() ?> </li>
            <li>Name : <?= $addedStudent1->getName() ?> </li>
            <li>Email : <?= $addedStudent1->getEmail() ?> </li>
        </ul>
        <!--------------------------------------------------------------------------------------->
        <!-- Adding 'Courser' for Student ( 1 ) ' by 'Manager'-->

        <?php
        $courses = [
            1 => 'Laravel',
            2 => 'php',
            3 => 'flutter'
        ];
        foreach ($courses as $key => $course) {
            $student1->addCourse(new Course($key, $course));
        }
        ?>
        <p>
            - Manager added Courses to student (1) Successfully :
            <br><br>
        <hr>
        <br>
        <!--------------------------------------------------------------------------------------->
        <!-- Retrieve 'Student ( 1 )' with his 'Courses'-->
        <h4 style="float: right">( Retrieve with Courses )</h4>
        <p>
            - Retrieve Student 1 with his Courses .
        <ul>
            <li>ID : <?= $addedStudent1->getId() ?> </li>
            <li>Name : <?= $addedStudent1->getName() ?> </li>
            <li>Email : <?= $addedStudent1->getEmail() ?> </li>

            <li>
                Courses :
                <ul>
                    <?php
                    foreach ($student1->getCourses() as $course) {
                        echo "<li>" . $course->getName() . "</li>";
                    }
                    ?>
                </ul>
            </li>
        </ul>
    </div>


</div>
</body>
</html>