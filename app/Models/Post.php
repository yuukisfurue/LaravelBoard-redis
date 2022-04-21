<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Post -> posts
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'prefecture',
        'company',
        'jyob',
        'employmentstatus',
    ];
    
    public function scopeSearch($query) {
    $request = request();
    
    $query->when($request->name, function($q, $name) {
        $q->where('name', 'LIKE', '%' . $name . '%');
    })
    ->when($request->gender, function($q, $gender) {
        $q->where('gender', 'LIKE', '%' . $gender . '%');
    })
    ->when($request->prefecture, function($q, $prefecture) {
        $q->where('prefecture', 'LIKE', '%' . $prefecture . '%');
    })
    ->when($request->company, function($q, $company) {
        $q->where('company', 'LIKE', '%' . $company . '%');
    })
    ->when($request->jyob, function($q, $jyob) {
        $q->where('jyob', 'LIKE', '%' . $jyob . '%');
    })
    ->when($request->employmentstatus, function($q, $employmentstatus) {
        $q->where('employmentstatus', 'LIKE', '%' . $employmentstatus . '%');
    });
  }
}

