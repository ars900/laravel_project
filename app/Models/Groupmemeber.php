<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Groupmemeber extends Model
{
    use HasFactory;

    protected $table = 'groupmember';

    protected $fillable = [
        'groupid',
        'userid',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User', );
    }

    public function group() {
        return $this->belongsTo('App\Models\Group');
    }
}
