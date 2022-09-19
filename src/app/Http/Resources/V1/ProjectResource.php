<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //    return parent::toArray($request);

        return [
            'id' => $this->id,
            're_examination' => $this->re_examination,
            'incoming_letter_number' => $this->incoming_letter_number,
            'outgoing_letter_number' => $this->outgoing_letter_number,
            'date_of_outgoing_letter' => $this->date_of_outgoing_letter,
            'date_of_receipt_project_legal_act' =>
                $this->date_of_receipt_project_legal_act,
            'document_type' => $this->document_type,
            'branch_of_legislation' => $this->branch_of_legislation,
            'number_of_pages' => $this->number_of_pages,
            'dev_group' => $this->dev_group,
            'email' => $this->email,
            'comment' => $this->comment,
            'phone' => $this->phone,
            'locale' => $this->locale,
            'project_act_name_ru' => $this->project_act_name_ru,
            'project_act_name_kk' => $this->project_act_name_kk,
            'purpose_legal_act_ru' => $this->purpose_legal_act_ru,
            'documents_submitted_for_expertise_ru' =>
                $this->documents_submitted_for_expertise_ru,
            'documents_submitted_for_expertise_kk' =>
                $this->documents_submitted_for_expertise_kk,
            'subject_and_goals_expertise_ru' => $this->subject_and_goals_expertise_ru,
            'subject_and_goals_expertise_kk' => $this->subject_and_goals_expertise_kk,
            'full_name_ru' => $this->full_name_ru,
            'full_name_kk' => $this->full_name_kk,
            'job_title_ru' => $this->job_title_ru,
            'job_title_kk' => $this->job_title_kk,
        ];
    }
}
