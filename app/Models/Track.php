<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Track extends Model
{
    use HasFactory;
    protected $fillable=['title', 'path'];

    public function getUrlPathAttribute(){
        return Storage::url($this->path);
    }
}
