<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sharing extends Model
{
    protected $table = "sharing";

    public function sharing(){
        return $this->select('*')->get();
    }
}
