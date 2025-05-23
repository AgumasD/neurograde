<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use User;
use Admin;
use ClassRoom;

class Teacher extends Model
{
   protected $fillable = [
    'user_id',
    'created_by',
   ]; 
 
   public function user() {
    return $this->belongsTo(User::class,"user_id");
   }

   public function admin() {
    return $this->belongsTo(Admin::class, 'created_by');
   }

   public function classes()
   {
    return $this->hasMany(ClassRoom::class, "teacher_id");
   }
}
