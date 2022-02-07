<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Students extends Component
{
    public function render()
    {
        $student = Student::orderBy('id', 'DESC')->get();
        return view('livewire.students', ['students'=>$student]);
    }
}
