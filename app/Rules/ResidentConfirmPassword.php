<?php

namespace App\Rules;

use App\Models\resident_account;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class ResidentConfirmPassword implements Rule
{
    public $email = "pass";

    /**
     * Create a new rule instance.
     *
     * @return void
     */


    public function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $username = $this->username;
        
        $users = resident_account::where("username","=", $username)->first();
        if ($users == null) {
            return false;
        }
        else {
            if (Hash::check($value, $users->password)) {
                return true;
            }
            else {
                return false;
            }
        }

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Incorrect password!!';
    }
}
