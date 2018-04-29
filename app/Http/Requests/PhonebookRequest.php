<?php
 
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhonebookRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        // you can take these rouls from laravel website  https://laravel.com/docs/5.6/validation#validation-quickstart
        return [
            'name'=>'required|max:255',
           // 'phone'=>'required|max:10|numeric',
            'phone'=>'required|numeric',
            'email'=>'required|email|unique:phonebooks'// it mean for phonebook table
            //
        ];
    }
}
