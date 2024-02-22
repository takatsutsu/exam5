<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'tell',
        'address',
        'building',
        'category_ID',
        'detail',
    ];

    public static $rules = array(
    'first_name' => 'required',
        'last_name' => 'required',
    'tell' => 'integer|min:10|max:11',
    'address' => 'required'
    
  );

    public function category()
            {
        return $this->belongsTo(Category::class);
            }
}
