<?php

namespace App\Http\Requests\Api;

use App\Models\UserApiKey;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ApiRequest extends FormRequest
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
            'api_key' => 'required|exists:user_api_keys',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'api_key.required' => 'An API key is required',
            'api_key.exists' => 'Invalid API key: You must be granted a valid key.',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.*
    * @return array
    */
    protected function failedValidation(Validator $validator)
    {
        {
            throw new HttpResponseException(response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
            ], 401));
        }
    }
}
