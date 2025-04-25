<?php

namespace App\Livewire\Admin;

use App\Models\Student;
use Livewire\Component;

class StudentsTable extends Component
{
    public $students;

    public function mount()
    {
        $this->students = Student::orderBy('last_name')->get();
    }

    public function render()
    {
        return view('livewire.admin.students-table');
    }
}

