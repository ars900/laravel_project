<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Group extends Model
{
    use HasFactory;

    protected $table = 'group';


    protected $fillable = [
        'name',
        'user_id',
        'status',
    ];

    public function groupmember() {
        return $this->hasMany('App\Models\Groupmemeber', 'group_id','id');
    }

}
