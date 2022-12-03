<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Job;
use App\Models\Project;


class Company extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'website', 'status'];

    /**
     * Get parent Job.
     *
     * @return BelongsTo
     */
    public function job(){
        return $this->belongsTo(Job::class);
    }

    /**
     * Has many Projects.
     *
     * @return HasMany
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
