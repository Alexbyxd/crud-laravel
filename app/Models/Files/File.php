<?php

namespace App\Models\Files;

use App\Models\Folders\Folder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'folder_id'
    ];
    // relacion de muchos a uno
    public function folder(){
        return $this->belongsTo(Folder::class);
    }
}
