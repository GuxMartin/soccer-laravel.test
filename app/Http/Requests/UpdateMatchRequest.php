<?php

namespace App\Http\Requests;

use App\Models\Match;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMatchRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('match_edit');
    }

    public function rules()
    {
        return [
            'local_id' => [
                'required',
                'integer',
            ],
            'away_id' => [
                'required',
                'integer',
            ],
            'start_date' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
        ];
    }
}
