<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactControllers extends Controller
{
    public function index(Request $request){
        $nom="mohamed";
        $language = ['php' , 'laravel' , 'react' , "js" , "html && css"];
        return view('index',compact('nom','language'));
    }

    public function about(Request $request){
        return view('about');
    }

    public function contact(){
                return view('contact');
            }

    public function sendContact(Request $request){
        $data = $request->all();

        // methode claire pour la validation
        $rules = [
            'name' =>'required|min:3|max:8|string',
            'email' =>'required|email|max:255',
            'sujet' =>'required',
            'message' =>'required'
        ];

        // $request->validate([
        //     'name' =>'required|min:3|max:8|string',
        //     'email' =>'required|email|max:255',
        //     'sujet' =>'required',
        //     'message' =>'required'
        // ]);

        $request->validate( $rules );
        return view('merciContact', $data);
    }

    public function confirmepassword(){
        return view('confirmepassword');
    }

    public function sendConfirmePassword(Request $request){
                // Validation
                $request->validate([
                    'password' => 'required|min:8|confirmed', // Le champ 'password_confirmation' doit correspondre à 'password'
                ], [
                    'password.required' => 'Le champ mot de passe est requis.',
                    'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                    'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
                ]);

                // Si la validation réussit, le code ici est exécuté

                return redirect('form-inscription')->with('success', 'Mot de passe confirmé avec succès !');
            }
        }




