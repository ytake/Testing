<?php
namespace App\Http\Validator;

use Illuminate\Validation\Validator;

class CustomValidator extends Validator
{

    /**
     * @param $attribute
     * @param $value
     * @return int
     */
    protected function validateLaravel($attribute, $value)
    {
        return ($value === 'Laravel5');
    }

}
