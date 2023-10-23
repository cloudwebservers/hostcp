<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'mobilenumber' => 'required|unique:clients',
            'email' => 'required|email|unique:clients',
            'password' => 'required|min:8',
            'companyname' => 'nullable|max:255',
            'address1' => 'sometimes|max:255',
            'address2' => 'sometimes|max:255',
            'city' => 'sometimes|max:255',
            'state' => 'sometimes|max:255',
            'postcode' => 'sometimes|max:255',
            'country' => 'required|max:255',
            'notes' => 'nullable|max:255',
            'status' => 'sometimes|integer|in:0,1',
            'email_unverified' => 'sometimes|integer|in:0,1',
            'mobile_unverified' => 'sometimes|integer|in:0,1',
            'referred_by' => 'sometimes|integer',
            'balance' => 'sometimes|numeric|between:0,100000.00',
        ];
    }
}
