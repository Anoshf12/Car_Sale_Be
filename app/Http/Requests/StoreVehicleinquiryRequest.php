<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleinquiryRequest extends FormRequest
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
            "name" => "required",
            "contact" => "required",
            "email" => "required",
            "profession" => "required",
            "address" => "required",
            "make" => "required",
            "brand" => "required",
            "model" => "required",
            "payment" => "required",
            "insurance" => "required",
            "remarks" => "required"
        ];
    }
}
