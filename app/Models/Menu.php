<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name'];

    public function articles(){
        return $this->belongsToMany(Article::class, "menu_article", "menu_id", "article_id")->orderBy('order', 'ASC')->withPivot(["order", "name"]);
    }
}
