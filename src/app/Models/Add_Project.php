<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_Project extends Model
{
    use HasFactory;

    protected $fillable = [
        're-examination',
        'incoming_letter_number',
        'outgoing_letter_number',
        'date_of_outgoing_letter',
        'Date_of_receipt_project_legal act',
        'document_type',
        'project_act_name_rus',
        'project_act_name_kaz',
        'branch of legislation',
        'purpose_legal_act_rus',
        'documents_submitted_for_expertise_rus',
        'documents_submitted_for_expertise_kaz',
        'subject_and_goals_expertise_rus',
        'subject_and_goals_expertise_kaz',
        'number_of_pages',
        'dev_group',
        'email',
        'comment',
        'full_name_rus',
        'full_name_kaz',
        'job_title_rus',
        'job_title_kz',
        'phone',
    ];
}
