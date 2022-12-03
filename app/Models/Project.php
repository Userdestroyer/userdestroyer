<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Company;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['job_id', 'language_code', 'company_name', 'company_description', 'work_duration', 'my_achievements'];

    /**
     * Get parent Job.
     *
     * @return BelongsTo
     */
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
