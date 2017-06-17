<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> b4196be09117dab5d01105c295d7b073d6429004

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            //
        'title' => 'required|unique:books,titlt',
        'author_id' => 'required|exists:authors,id',
        'amount' => 'numeric',
        'cover' => 'image|max:2048'
        ];
    }
}
=======
            'title'=>'required|unique:books,title',
            'author_id'=>'required|exists:authors,id',
            'amount'=>'numeric',
            'cover'=>'image|max:2048'
        ];
    }
}
>>>>>>> b4196be09117dab5d01105c295d7b073d6429004
