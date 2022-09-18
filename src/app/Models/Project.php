<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Project extends Model
{
    use HasFactory, HasApiTokens;

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
        'project_act_name_rus',
        'project_act_name_kaz',
        'purpose_legal_act_rus',
        'documents_submitted_for_expertise_rus',
        'documents_submitted_for_expertise_kaz',
        'subject_and_goals_expertise_rus',
        'subject_and_goals_expertise_kaz',
        'full_name_rus',
        'full_name_kaz',
        'job_title_rus',
        'job_title_kaz',

    ];
}
