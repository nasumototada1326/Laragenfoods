<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactForm extends FormRequest
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
            'shop_name' => 'required|string|max:20',
            'address' =>  'required|string|max:40',
            'category' => 'required|string|max:20',
            'shop_url' => 'url|nullable',
            'contact' => 'required|string|max:200',
            'caution' => 'required|accepted',
        ];
    }
}
