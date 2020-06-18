<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreEntityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('admin'), 403);
        return true;
    }

    public function rules()
    {
        return [
            'name'  => ['required',],
            'label' => ['required',]
        ];
    }
}
