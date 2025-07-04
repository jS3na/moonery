<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'address_line' => 'required|max:255',
            'neighborhood' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'zip_code' => 'required|max:255',
            'complement' => 'nullable|max:255',
        ];
    }
}
