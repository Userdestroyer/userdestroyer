<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\CV;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'codename', 'occupation', 'experience', 'description'];

    /**
     * Has many CVs.
     *
     * @return HasMany
     */
    public function CV(): HasMany
    {
        return $this->hasMany(CV::class);
    }

    public function getFirstNameUpperAttribute(){
        $name = explode(' ', $this->name);
        return mb_strtoupper($name[0], "utf-8");
    }

    public function getLastNameUpperAttribute(){
        $name = explode(' ', $this->name);
        return mb_strtoupper($name[1], "utf-8");
    }

    public function getCvLinkAttribute(){
        return asset('media/job/webdev/cv/'.$this->cv()->first()->file);
    }
}
