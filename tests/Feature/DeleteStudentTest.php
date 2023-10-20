<?php

use App\Models\Student;

it('can delete a Student', function () {
  // Arrange: Create a student for deletion
  $student = Student::create([
    'first_name' => 'John',
    'last_name' => 'Doe',
    'sign' => 'Aries',
    'group' => 'asd',
    'age' => 6,
  ]);

  // Act: Delete the student
  $this->delete('api/v1/students/' . $student->id);

  // Assert: The student has been deleted
  $this->assertDatabaseMissing('students', [
    'id' => $student->id,
  ]);
});
