<?php
namespace MyNamespace;
require_once 'loggableTrait.php';

class Manager
{
    use Loggable;

    private array $students;

    public function __construct()
    {
        $this->students = [];
    }

    public function addStudent(Student $student)
    {
        $this->students[$student->getId()] = $student;
        $this->logChanges("Added student " . $student->getName() . " with ID " . $student->getId());

    }

    public function getStudentById($id)
    {
        if (isset($this->students[$id])) {
            return $this->students[$id];
        }
        return null;
    }

    public function updateStudent($id, $newName, $newEmail): bool
    {
        if (isset($this->students[$id])) {
            $student = $this->students[$id];
            $student->setId($id);
            $student->setName($newName);
            $student->setEmail($newEmail);
            $this->logChanges("Updated student " . $student->getName() . " with ID " . $student->getId());
            return true;

        }
        return false;
    }

    public function deleteStudent($id): bool
    {
        if (isset($this->students[$id])){
            $student=$this->students[$id];
            unset($this->students[$id]);
            $this->logChanges("Deleted student " . $student->getName() . " with ID " . $student->getId());

            return true;
        }
        return false;
    }
}
