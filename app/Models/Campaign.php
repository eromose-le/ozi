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
        'campaignnumbers',
        'campaigncsv',
        'campaigndate',
        'campaigntime',
        'status',
        'progress',
        'actions',
        'actionsclass',
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
