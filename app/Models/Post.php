<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SuperAdmin;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titel',
        'heading',
        'description',
        'image',
        'user_id',
        'superadmin_id',
        'admin_id',
    ];
    public function User()
    {
   $this->belongsTo(User::class, 'user_id');

   }
    public function SuperAdmin()
    {
   $this->belongsTo(SuperAdmin::class, 'superadmin_id');

    }


}
