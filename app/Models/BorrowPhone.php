<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowPhone extends Model
{
    use HasFactory;

    protected $fillable = ['borrowing_date', 'borrowing_time', 'reason'];
}
