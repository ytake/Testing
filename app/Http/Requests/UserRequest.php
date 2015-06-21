<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{

    /** @var string  */
    protected $redirectRoute = 'user.index';

    /**
     * @return bool
     */
    public function authorize()
    {
        if(\Auth::user()) {
            return true;
        }
        return false;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ];
    }
}
