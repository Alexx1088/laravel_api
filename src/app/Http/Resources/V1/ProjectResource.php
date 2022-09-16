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

            're_examination' => $this->re_examination,
            'incoming_letter_number' => $this->incoming_letter_number,
            'outgoing_letter_number' => $this->outgoing_letter_number,
            'date_of_outgoing_letter' => $this->date_of_outgoing_letter,
            'date_of_receipt_project_legal act' => $this->date_of_receipt_project_legal_act,
            'document_type' => $this->document_type,
            'branch of legislation' => $this->branch_of_legislation,
            'number_of_pages' => $this->number_of_pages,
            'dev_group' => $this->dev_group,
            'email' => $this->email,
            'comment' => $this->comment,
            'phone' => $this->phone,
        ];
    }
}
