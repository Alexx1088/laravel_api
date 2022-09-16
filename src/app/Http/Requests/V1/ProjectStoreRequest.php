<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
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
}
