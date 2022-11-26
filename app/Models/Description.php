<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'codename', 'occupation', 'experience', 'description'];

    public function getFirstNameUpperAttribute(){
        $name = explode(' ', $this->name);
        return mb_strtoupper($name[0], "utf-8");
    }

    public function getLastNameUpperAttribute(){
        $name = explode(' ', $this->name);
        return mb_strtoupper($name[1], "utf-8");
    }
}
