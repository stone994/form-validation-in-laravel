<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Override;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username'=>'required',
            'useremail'=>'required|email',
            'userpass'=>'required|alpha_num|min:6',
            'userage'=>'required|numeric|min:18',
            'usercity'=>'required',
        ];
    }
    #[Override]
    // public function messages()
    // {
    //     return [
    //          "username.required"=>'user name is required',
    //         "useremail.required"=>'user email is required',
    //         "useremail.email"=>'user name is required',
    //         "userage.required"=>'user name is required',
    //         "userage.numeric"=>'user name is required',
    //         "userage.min:18"=>'user name is required',
    //     ];
    // }
   
    public function attributes()
    {
        return [
             'username'=>'User Name',
            'useremail'=>'User Email',
            'userpass'=>'User Pass',
            'userage'=>'User Age',
            'usercity'=>'User City',
        ];
    }
    #[Override]
    protected function prepareForValidation():void
    {
        $this->merge([
            'username'=>Str::slug($this->username),
        ]);        
    }
    protected $stopOnFirstFailure = true;
}
