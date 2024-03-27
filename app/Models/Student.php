<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\addClass;

class Student extends Model
{
    use HasFactory;

    public function class(){
        return $this->belongsTo(addClass::class, 'class_id', 'cid');
    }
}
