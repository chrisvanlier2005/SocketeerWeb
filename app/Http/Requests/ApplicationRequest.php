<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'server_key' => ['required'],
            'client_key' => ['required'],
            'app_name' => ['required'],
            'callback' => ['nullable'],
        ];
    }
}
