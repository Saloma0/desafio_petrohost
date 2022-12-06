<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Vaga;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VagasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $vagas = Vaga::all();

        return view('admin.vagas.index', compact('vagas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categoria::all();

        return view('admin.vagas.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'type' => 'required',
            'short_description' => 'required',
            'local' => 'required',
            'long_description' => 'required',
            'id_category' => 'required',
        ],
    [
        'id_category.required' => 'Selecione a categoria da vaga'
    ]);

        $slug = Str::of($request->name)->slug('-');
      
        if($request->file('photo')){

            $fileExtension = $request->file('photo')->getClientOriginalExtension();

            if ($fileExtension == 'png' || $fileExtension == 'jpg') {
                # code...

                $path = $request->file('photo')->store('public');

                $vagas = Vaga::insert([
                    'slug' => $slug,
                    'name' => $request->name,
                    'company_name' => $request->company_name,
                    'type' => $request->type,
                    'short_description' => $request->short_description,
                    'local' => $request->local,
                    'long_description' => $request->long_description,
                    'photo' => $path,
                    'id_category' => $request->id_category,
                    'created_at' => Carbon::now(),
                ]);
    
                if($vagas){
                    return redirect()->route('vagas.create')->with(['success'=>'success']); 
                }else{
                    return redirect()->route('vagas.create')->with(['fail'=>'fail']);
                }

            }else{
                return redirect()->route('vagas.create')->with(['fail'=>'fail']);
            }

        }else{

            
            $vagas = Vaga::insert([
                'slug' => $slug,
                'name' => $request->name,
                'company_name' => $request->company_name,
                'type' => $request->type,
                'short_description' => $request->short_description,
                'local' => $request->local,
                'long_description' => $request->long_description,
                'id_category' => $request->id_category,
                'created_at' => Carbon::now(),
            ]);

            if($vagas){
                return redirect()->route('vagas.create')->with(['success'=>'success']); 
            }else{
                return redirect()->route('vagas.create')->with(['fail'=>'fail']);
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vaga = Vaga::findOrFail($id);

        $categories = Categoria::all();

        return view('admin.vagas.edit',compact('vaga','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validate = $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'type' => 'required',
            'short_description' => 'required',
            'local' => 'required',
            'long_description' => 'required',
            'id_category' => 'required',
        ],
        [
            'id_category.required' => 'Selecione a categoria da vaga'
        ]);


         $slug = Str::of($request->name)->slug('-');
      
        if($request->file('photo')){

            $fileExtension = $request->file('photo')->getClientOriginalExtension();

            if ($fileExtension == 'png' || $fileExtension == 'jpg') {
                # code...

                $path = $request->file('photo')->store('public');

                $vagas = Vaga::findOrFail($id);

                $vagas->update([
                    'slug' => $slug,
                    'name' => $request->name,
                    'company_name' => $request->company_name,
                    'type' => $request->type,
                    'short_description' => $request->short_description,
                    'local' => $request->local,
                    'long_description' => $request->long_description,
                    'photo' => $path,
                    'id_category' => $request->id_category
                ]);
    
                if($vagas){
                    return redirect()->back()->with(['success'=>'success']); 
                }else{
                    return redirect()->back()->with(['fail'=>'fail']);
                }

            }else{
                return redirect()->back()->with(['fail'=>'fail']);
            }

        }else{

            $vagas = Vaga::findOrFail($id);

            $vagas->update([
                'slug' => $slug,
                'name' => $request->name,
                'company_name' => $request->company_name,
                'type' => $request->type,
                'short_description' => $request->short_description,
                'local' => $request->local,
                'long_description' => $request->long_description,
                'id_category' => $request->id_category,
            ]);

            if($vagas){
                return redirect()->back()->with(['success'=>'success']); 
            }else{
                return redirect()->back()->with(['fail'=>'fail']);
            }

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Vaga::findOrFail($id)->delete();

        return redirect()->back()->with(['success'=>'Eliminado com sucesso']);
    }
}
