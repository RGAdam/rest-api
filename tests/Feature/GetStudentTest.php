<?php

use App\Models\Student;

it('can get a Student', function () {
  // Arrange: Create a student for retrieval
  $student = Student::create([
    'first_name' => 'John',
    'last_name' => 'Doe',
    'sign' => 'Aries',
    'group' => 'asd',
    'age' => 6,
  ]);

  // Act: Retrieve the student
  $response = $this->get('api/v1/students/' . $student->id);

  // Assert: The student has been retrieved
  $response->assertOk();
});
