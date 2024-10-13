<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'to',
        'from',
        'due_date',
        'status',
    ];
    public function assigner(){
        return $this->belongsTo(User::class,'from','id');
    }
    public function assignee()
    {
        return $this->belongsTo(User::class, 'to', 'id');
    }
}
