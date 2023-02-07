<?php

namespace App\Models;
use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'LastName','FirstName','MiddleName','Address','Email','ContactNumber',
    ];
    
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
