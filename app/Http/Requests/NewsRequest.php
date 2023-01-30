<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

class NewsRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'max:128',
                $this->uniqueRule(),
            ],
            'description' => [
               'required',
               'string',
                'max:512',
                $this->uniqueRule(),
            ],
            'content'=>[
                'required',
                $this->uniqueRule(),
            ],
        ];
    }

    protected function uniqueRule()
    {
        $news_id = Route::current()->parameter('news');
        if($news_id)
        {
            return Rule::unique('news')->ignore($news_id);
        }

        return Rule::unique('news');
    }
}

