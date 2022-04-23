<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
     * @param $id
     * @return array
     */
    public function rules()
    {
        $id = $this->country->id ?? '';

        return [
            'name' => 'required|min:5|max:63',
            'code' => 'required|min:2|max:3|unique:countries,code,' .$id,
        ];
    }
}
