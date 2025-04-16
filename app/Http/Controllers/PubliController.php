<?php
namespace App\Http\Controllers;

use App\Models\Cars;
use App\Mail\WorkMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Component as ComponentModel;

class PubliController extends Controller
{
    public function home()
    {

        $cars = Cars::latest()->take(4)->get();
        // dd($cars->all());

        return view('welcome', compact('cars'));

    }
    public function work()
    {
        return view('work');
    }

    public function submit(Request $request)
    {
        $name    = $request->name;
        $surname = $request->surname;
        $email   = $request->email;
        $phone   = $request->phone;
        $comment = $request->comment;
        $cv      = $request->file('cv')->store('cv', 'public');

        $content = compact('name', 'surname', 'email', 'phone', 'comment', 'cv');

        Mail::to('carstore@admin.it')->send(new WorkMail($content));

        return redirect (route('home'))->with('message','Grazie per averci contattao, la tua candidatura sarà presa in esame quanto prima');
    }

    public function indice(){
        return view ('indice');
    }


    public function modifica($id){
        return view ('modifica', compact('id') );
    }

   
    // public function edit($id){
    // $article = Article:: find($id);
    // return view ('edit', compact('article') );
    // }
}
