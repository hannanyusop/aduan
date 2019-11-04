<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $table = 'reports';

    public function action_by(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}