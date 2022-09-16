<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        're-examination',
        'incoming_letter_number',
        'outgoing_letter_number',
        'date_of_outgoing_letter',
        'Date_of_receipt_project_legal act',
        'document_type',
        'branch of legislation',
        'number_of_pages',
        'dev_group',
        'email',
        'comment',
        'phone',
    ];
}
