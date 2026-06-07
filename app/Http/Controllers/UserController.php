<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
//use App\Rules\Uppercase;
use Illuminate\Support\Facades\Validator;
use Closure;
class UserController extends Controller
{
    public function addUser(UserRequest $req){
       $validate=$req->validate([
'username'=>['required',
function(string $attribute,mixed $value,Closure $fail){
if (strtoupper($value) !== $value) {
            $fail("The {$attribute} must be uppercase.");
        }
}],
'useremail'=>'required|email',
       ]);
       return $req->all(); 
    }
}
