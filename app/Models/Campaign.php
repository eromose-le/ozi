<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaignname',
        'campaignbody',
        'campaignfile',
        'campaignnumbers',
        'campaigncsv',
        'campaigndate',
        'campaigntime',
        'status',
        'progress',
        'actions',
        'actionsclass',
        'age1',
        'age2',
        'age3',
        'crypto',
        'fasion',
        'inspirational',
        'beauty',
        'technology',
    ];

    public function ownedBy(User $user)
    {
        return $user->id === $this->user_id;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
