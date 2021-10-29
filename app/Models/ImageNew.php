<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageNew extends Model
{
    protected $table = 'image_news';
    protected $fillable = ['id', 'id_new', 'image'];
    public $timestams = false;
}