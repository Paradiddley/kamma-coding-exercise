<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealShare extends Model
{
    use HasFactory;

    protected $table = 'deal_share';

    protected $fillable = [
        'sender_name',
        'recipient_name',
        'recipient_email',
    ];
}
