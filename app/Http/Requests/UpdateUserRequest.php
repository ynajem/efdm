<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('admin'), 403);
        return true;
    }

    public function rules()
    {
        return [
            'username' => ['required'],
            'firstname' => ['required'],
            'lastname' => ['required'],
            'roles.*'   => ['integer'],
        ];
    }
}
