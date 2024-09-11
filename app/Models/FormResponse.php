<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'skills_interested',
        'specializations_interested',
        'course_certification_importance',
        'course_format_preference',
        'support_mentorship_expectation',
        'course_budget',
        'long_term_goals',
        'prior_experience',
    ];
}