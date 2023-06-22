<?php
namespace MyNamespace;

class Student
{
    private int $id;
    private string $name;
    private string $email;
    private array $courses = [];


    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCourses(): array
    {
        return $this->courses;
    }

    public function setId($id): int
    {
        return $this->id = $id;
    }

    public function setName($name): string
    {
        return $this->name = $name;
    }

    public function setEmail($email): string
    {
        return $this->email = $email;
    }


    public function addCourse(Course $course)
    {
        $this->courses[] = $course;
    }

}