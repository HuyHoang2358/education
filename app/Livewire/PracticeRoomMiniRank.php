<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;

class PracticeRoomMiniRank extends Component
{
    public function render()
    {
        $students = Student::paginate(7);
        return view('livewire.practice-room-mini-rank',  ['students' => $students]);
    }
}
