<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

use App\Traits;

class Project extends Model
{
    use HasFactory, HasApiTokens, Translationable;

    protected $fillable = [
        're_examination',
        'incoming_letter_number',
        'outgoing_letter_number',
        'date_of_outgoing_letter',
        'date_of_receipt_project_legal_act',
        'document_type',
        'branch_of_legislation',
        'number_of_pages',
        'dev_group',
        'email',
        'comment',
        'phone',
        'locale',
        'project_act_name_ru',
        'project_act_name_kk',
        'purpose_legal_act_ru',
        'documents_submitted_for_expertise_ru',
        'documents_submitted_for_expertise_kk',
        'subject_and_goals_expertise_ru',
        'subject_and_goals_expertise_kk',
        'full_name_ru',
        'full_name_kk',
        'job_title_ru',
        'job_title_kk',
    ];
}
