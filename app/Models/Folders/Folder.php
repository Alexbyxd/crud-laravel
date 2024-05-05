<?php

namespace App\Models\Folders;

use App\Models\Files\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'main_folder_id'
    ];
    //relacion de uno a muchos
    public function subFolders(){
        return $this->hasMany(Folder::class, 'main_folder_id');
    }
    //relacion de uno a muchos
    public function files(){
        return $this->hasMany(File::class);
    }
}
