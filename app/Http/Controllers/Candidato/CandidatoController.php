<?php

namespace App\Http\Controllers\Candidato;

use App\Http\Controllers\Controller;
use App\Models\Candidatura;
use App\Models\Categoria;
use App\Models\Vaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidatoController extends Controller
{
    //

    public function index(){

        $vagas3 = Vaga::latest()->limit(3)->get();
        $vagas5 = Vaga::latest()->limit(5)->get();

        $categories = Categoria::all();

        return view('candidato.index', compact('vagas3','vagas5','categories'));
    }

    public function dashboard(){
        $candidaturas = Candidatura::all()->where('user_id',Auth::user()->id);
        return view('dashboard', compact('candidaturas'));
    }

    public function candidatura($slug){
        
        $vagas3 = Vaga::latest()->limit(3)->get();
        $categories = Categoria::all();
        $vaga = Vaga::where('slug',$slug)->first();

       return view('candidato.candidatura', compact(['vagas3','categories','vaga']));
    }

    public function vagaSingle($slug){
        $vaga = Vaga::where('slug',$slug)->first();

        $vagas3 = Vaga::latest()->limit(3)->get();

        $categories = Categoria::all();

        return view('candidato.single',compact('vaga', 'vagas3', 'categories'));
    }

    public function todasVagas(){

        $vagas = Vaga::latest()->paginate(5);

        $categories = Categoria::all();

        return view('candidato.todas-vagas',compact('vagas', 'categories'));
    }

    
}
