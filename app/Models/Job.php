<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\CV;
use App\Models\Description;
use App\Models\Company;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['codename'];

    /**
     * Has many CVs.
     *
     * @return HasMany
     */
    public function CV(): HasMany
    {
        return $this->hasMany(CV::class);
    }

    /**
     * Has many Descriptions.
     *
     * @return HasMany
     */
    public function description(): HasMany
    {
        return $this->hasMany(Description::class);
    }

    /**
     * Has many Companies.
     *
     * @return HasMany
     */
    public function company(): HasMany
    {
        return $this->hasMany(Company::class);
    }

    public function getFirstNameUpperAttribute(){
        $name = explode(' ', $this->description()->where('language_code', 'ENG')->first()->name);
        return mb_strtoupper($name[0], "utf-8");
    }

    public function getLastNameUpperAttribute(){
        $name = explode(' ', $this->description()->where('language_code', 'ENG')->first()->name);
        return mb_strtoupper($name[1], "utf-8");
    }

    public function getCvLinkAttribute(){
        return asset('media/job/webdev/cv/'.$this->cv()->first()->file);
    }

    public function getOccupationAttribute(){
        return $this->description()->where('language_code', 'ENG')->first()->occupation;
    }

    public function getExperienceAttribute(){
        return $this->description()->where('language_code', 'ENG')->first()->experience;
    }

    public function getDescriptionAttribute(){
        return $this->description()->where('language_code', 'ENG')->first()->description;
    }
}
