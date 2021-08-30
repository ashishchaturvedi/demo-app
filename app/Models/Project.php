<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comments;

class Project extends Model
{
    use HasFactory;

    protected $table ='project';

    protected $fillable = [
        'name',
        'company_id',
        'description'        
    ];

    public function comment(){
        return $this->hasMany(comments::class);
    }
}
