<?php

namespace App\Http\Requests;

use App\Models\Club;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateClubRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('club_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:clubs,name,' . request()->route('club')->id,
            ],
            'slug' => [
                'string',
                'min:3',
                'max:3',
                'required',
                'unique:clubs,slug,' . request()->route('club')->id,
            ],
            'category_id' => [
                'required',
                'integer',
            ],
        ];
    }
}