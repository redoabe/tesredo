<?php

namespace redosociolla\Http\Requests\User;

use redosociolla\Http\Requests\Request;

class \CreateUserRequest extends Request
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
        return [
            //
			'username'       => 'required',
            'password'      => 'required',
            'level' 	 => 'required|numeric'
        ];
    }
	
	public function messages()
    {
        return [
            'username.required'  	=> 'Kolom username harus diisi',
            'password.required' 	=> 'Kolom password belum diisi',
            'password.password' 	=> 'password tidak sesuai',
            'level.required' 		=> 'Level user belum dipilih',
            'level.numeric'  		=> 'Level user tidak sesuai'
        ];
    }
}
