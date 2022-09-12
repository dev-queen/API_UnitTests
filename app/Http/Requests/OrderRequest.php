<?php

namespace App\Http\Requests;

class OrderRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'description'  => 'required|string',
            'customer_id' =>  'required|int',
            'application_id' => 'required|int',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'description.required' => 'Description required!',
            'customer_id.required' => 'Customer id required!',
            'application_id.required' => 'Application required'
        ];
    }
}
