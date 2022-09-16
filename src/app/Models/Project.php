<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

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
    ];
}
