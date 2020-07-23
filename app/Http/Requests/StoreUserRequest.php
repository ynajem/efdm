<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('admin'), 403);
        return true;
    }

    public function rules()
    {
        return [
            'username' => ['required', 'unique:users'],
            'firstname' => ['required'],
            'lastname' => ['required'],
            'password' => ['required'],
            'entity_id' => ['required', 'integer'],
            'roles.*'   => ['integer'],
            'roles'     => ['required', 'array'],
            'sex' => ['required'],
        ];
    }

    public function validated()
    {
        return array_merge($this->all(), [
            'avatar' => "/svg/{$this->sex}_user.svg"
        ]);
    }
}
