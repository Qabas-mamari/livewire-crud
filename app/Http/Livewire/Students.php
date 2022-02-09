<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Students extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone; 

    # to rest all inputs
    public function restInputFeilds(){
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store()
    {
        # first validate the records 
        $validatedData = $this->validate([
            'firstname' => 'required',
            'lastname'=> 'required',
            'email' => 'required|email',
            'phone' =>'required'
        ]); 

        Student::create($validatedData); #Student: is model name, create: is the livewire file name
        session()->flash('message', 'Student Created Successfully!'); # create a message 
        $this->restInputFeilds(); # after the create the records, reset all the feilds
        $this ->emit('StudentAdded');
    }
    public function render()
    {
        $student = Student::orderBy('id', 'DESC')->get();
        return view('livewire.students', ['students'=>$student]);
    }
}
