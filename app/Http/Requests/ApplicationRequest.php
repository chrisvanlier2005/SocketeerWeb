<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'app_name' => ['required', 'min:5', 'max:255'],
            'server' => ['required', 'exists:servers,id'],
            'callback' => ['nullable'],
        ];
    }
}
