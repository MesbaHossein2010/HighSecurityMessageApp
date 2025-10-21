<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'content',
    ];

    // The user who sent the message
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // The user who receives the message
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
