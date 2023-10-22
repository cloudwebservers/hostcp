<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'username' => $this->username,
            'mobilenumber' => $this->mobilenumber,
            'email' => $this->email,
            'companyname' => $this->companyname,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'city' => $this->city,
            'state' => $this->state,
            'postcode' => $this->postcode,
            'country' => $this->country,
            'datecreated' => $this->datecreated,
            'notes' => $this->notes,
            'lastlogin' => $this->lastlogin,
            'ip' => $this->ip,
            'status' => $this->status,
            'email_unverified' => $this->email_unverified,
            'mobile_unverified' => $this->mobile_unverified,
            'referred_by' => $this->referred_by,
            'balance' => $this->balance,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
