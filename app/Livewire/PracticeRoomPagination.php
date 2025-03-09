<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Student;

class PracticeRoomPagination extends Component
{
    use WithPagination;

    public function render()
    {   
        // Biến students tạm để demo, sau thay bằng cái khác
        $students = Student::paginate(6);
        return view('livewire.practice-room-pagination',  ['students' => $students]);
    }
}
