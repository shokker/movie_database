<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class tmdbRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
          }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image'=>'mimes:jpeg,jpg,png,gif|required|max:10000',
            'cover-img'=>'mimes:jpeg,jpg,png,gif|required|max:10000',
            //
        ];
    }
}
