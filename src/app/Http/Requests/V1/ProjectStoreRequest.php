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
            'incoming_letter_number' => 'required|integer',
            'outgoing_letter_number' => 'required|integer',
          'date_of_outgoing_letter' => 'required|date',
            'date_of_receipt_project_legal_act' => 'required|date',
            'document_type' => 'nullable',
            'branch_of_legislation' => 'required|string',
            'number_of_pages' => 'required|integer',
            'dev_group' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|string',
            'phone' => 'required|integer',

        ];
    }
}
