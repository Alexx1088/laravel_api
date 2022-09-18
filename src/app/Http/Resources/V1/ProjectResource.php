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
            'project_act_name_rus' => $this->project_act_name_rus,
            'project_act_name_kaz' => $this->project_act_name_kaz,
            'purpose_legal_act_rus' => $this->purpose_legal_act_rus,
            'documents_submitted_for_expertise_rus' => $this->documents_submitted_for_expertise_rus,
            'documents_submitted_for_expertise_kaz' => $this->documents_submitted_for_expertise_kaz,
            'subject_and_goals_expertise_rus' => $this->subject_and_goals_expertise_rus,
            'subject_and_goals_expertise_kaz' => $this->subject_and_goals_expertise_kaz,
            'full_name_rus' => $this->full_name_rus,
            'full_name_kaz' => $this->full_name_kaz,
            'job_title_rus' => $this->job_title_rus,
            'job_title_kaz' => $this->job_title_kaz,
        ];
    }
}
