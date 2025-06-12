<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    /** @use HasFactory<\Database\Factories\MessagesFactory> */
    use HasFactory;
    protected $fillable = [
        'message',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
