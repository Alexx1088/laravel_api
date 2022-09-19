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
            're_examination' => 'required|string',
            'incoming_letter_number' => 'required|string',
            'outgoing_letter_number' => 'required|integer',
            'date_of_outgoing_letter' => 'required|date',
            'date_of_receipt_project_legal_act' => 'required|date',
            'document_type' => 'nullable',
            'number_of_pages' => 'required|integer',
            'dev_group' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|string',
            'phone' => 'required|integer|digits_between:6,15',
            'branch_of_legislation' => 'required|string',
            'locale' => 'string',
            'project_act_name_ru' => 'required|string',
            'project_act_name_kk' => 'required|string',
            'purpose_legal_act_ru' => 'required|string',
            'documents_submitted_for_expertise_ru' => 'required|string',
            'documents_submitted_for_expertise_kk' => 'required|string',
            'subject_and_goals_expertise_ru' => 'required|string',
            'subject_and_goals_expertise_kk' => 'required|string',
            'full_name_ru' => 'required|string',
            'full_name_kk' => 'required|string',
            'job_title_ru' => 'required|string',
            'job_title_kk' => 'required|string',

        ];
    }
}
