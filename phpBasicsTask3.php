<?php

class Student { 
    private $id;
    private $name;
    private $email;
    private $courses = [];

    public function __construct($id, $name , $email ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCourses() {
        return $this->courses;
    }
    
    public function addCourse(Course $course) {
        $this->courses[] = $course;
    }

}

class Course { 
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

}

$student = new Student (1,'mohanad Abu Elatta','mohanad.abdalah50@gmail.com');
$student2 = new Student (1,'mohanad Abu Elatta','mohanad.abdalah50@gmail.com');

$student->addCourse(new Course('laravel'));
$student->addCourse(new Course('flutter'));

echo "Student ID is : " . $student->getId() . "<br>";
echo "Student2 ID is : " . $student2->getId() . "<br>";
echo "Student Name is : " . $student->getName() . "<br>";
echo "Student Email is : " . $student->getEmail() . "<br>";

echo "<br>";
echo $student->getName()." - Courses <br><br>";
echo $student2->getName()." - Courses <br><br>";

foreach ($student->getCourses() as $course){
    echo '-'.$course->getName().'<br>';
}