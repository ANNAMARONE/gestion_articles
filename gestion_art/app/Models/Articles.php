<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'description', 'type','date','image',
    ];
 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
