<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Citizendatas extends Model
{
    use HasFactory;
    protected $table = "citizens";
    protected $guarded = ['id']; 
    protected $fillable=['namakk','norumah','rt','rw','status'];

    public $increment = true;

    public static function boot()
{
    parent::boot();

    static::creating(function ($model) {
        $before_id = DB::table('citizens')->orderBy('id', 'desc')->latest()->first();

        $model->id = $before_id ? $before_id->id + 1 : 1;

        return true;
    });
}

}
