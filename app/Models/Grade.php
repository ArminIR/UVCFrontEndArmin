<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function addResult($result)
    {
        if ($result > $this->best_grade) {
            $this->best_grade = $result;

            if ($result >= $this->lowest_passing_grade) {
                $this->passed_at = now();
                $this->save();
            }
        }
    }
}
