<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ExampleModel extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'example_table';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 
        'email',
        'password'
    ];
}
