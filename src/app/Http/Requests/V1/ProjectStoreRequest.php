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
            're-examination' => 'required|string',
            'incoming_letter_number' => 'required|digits:30',
            'outgoing_letter_number' => 'required|digits:30',
            'date_of_outgoing_letter' => 'required|date',
            'Date_of_receipt_project_legal act' => 'required|date',
            'document_type' => 'nullable',
            'project_act_name_rus' => 'required|string',
            'project_act_name_kaz' => 'required|string',
            'branch of legislation' => 'required|string',
            'purpose_legal_act_rus' => 'required|string',
            'documents_submitted_for_expertise_rus' => 'required|string',
            'documents_submitted_for_expertise_kaz' => 'required|string',
            'subject_and_goals_expertise_rus' => 'required|string',
            'subject_and_goals_expertise_kaz' => 'required|string',
            'number_of_pages' => 'required|digits:3',
            'dev_group' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|string',
            'full_name_rus' => 'required|string',
            'full_name_kaz' => 'required|string',
            'job_title_rus' => 'required|string',
            'job_title_kz' => 'required|string',
            'phone' => 'required|digits:15' ,
        ];
    }
}
