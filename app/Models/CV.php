<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Job;

class CV extends Model
{
    use HasFactory;

    protected $fillable = ['job_id', 'language_code', 'file'];

    /**
     * Get parent Job.
     *
     * @return BelongsTo
     */
    public function job(){
        return $this->belongsTo(Job::class);
    }
}
