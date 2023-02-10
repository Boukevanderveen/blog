<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Article;
use Auth;

class AuthController extends Controller
{

    function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email|unique:users,email',   // required and email format validation
            'password' => 'required|min:6', // required and number field validation

        ]); // create the validations
        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        } 
        else
        {
            $User = new User;
            $User->username = $request->username;
            $User->email = $request->email;
            $User->password = bcrypt($request->password);
            $User->isAdmin = 0;
            $User->save();

            return redirect("login");   
        }
    }

    function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required|min:6', // required and number field validation

        ]); // create the validations
        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        } 
        else 
        {
            if (\Auth::attempt($request->only(["username", "password"]))) {
                
                $articles = Article::All();
                return view('dashboard', ['articles' => $articles]);

            } else {
                return back()->withErrors( "Invalid credentials"); // auth fail redirect with error
            }
        }
    }

    function deleteArticle(Request $request)
    {
        $query = DB::table('articles')->where('id', $request->articleid)->delete();
        if($query)
        { 
        }
        else
        {

        }
    }
}