<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;


class Company extends Model
{
    use HasFactory;

    protected $table ='company';

    protected $fillable = [
        'name',
        'description'        
    ];

    public function project(){

        return $this->hasMany(project::class);

    }

}
