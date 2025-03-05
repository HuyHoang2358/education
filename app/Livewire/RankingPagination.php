<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Student;

class RankingPagination extends Component
{

    use WithPagination;

    public function render()
    {
        $students = Student::orderBy('score', 'desc')->paginate(10);

        return view('livewire.ranking-pagination', ['students' => $students]);
    }
    
}
