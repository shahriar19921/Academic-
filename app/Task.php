<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   public function scopeIncomplete() //Task incomplete()
   {

   		return static::where('completed', 0)->get();
   }
}
