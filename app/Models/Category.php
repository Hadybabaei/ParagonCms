<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'position_id',
        'designalgoritm_id',
        'description',
        'thumbnail',
    ];
    public function Article()
    {
        return $this->hasMany(Article::class);
    }
    public function Position()
    {
        return $this->belongsTo(Position::class);
    }
    public function Designalgoritm()
    {
        return $this->belongsTo(Designalgoritm::class);
    }
}
