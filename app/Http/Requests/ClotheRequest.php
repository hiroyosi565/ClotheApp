<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClotheRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */


    public function rules()
    {
        return [
            'clothe.brand' => 'required|string|max:100',
            'clothe.body' => 'required|string|max:4000',
            'clothe.cost' => 'required',
            'clothe.favorite' => 'required|integer|max:5',
            'clothe.bought_at' => 'required|date|max:100',
            'clothe.category_id' => 'required|integer|max:5',
            'clothe.image_path' => 'required|string|max:200',
        ];
    }
}
