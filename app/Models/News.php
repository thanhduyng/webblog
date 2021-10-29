<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['id', 'id_category_new', 'name','background_image','description','address','go_date','status','deleted_at'];
    public $timestams = false;
}
