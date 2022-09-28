<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Curso;
use Illuminate\Http\Request;
use Flash;
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $nombre = $request->get('buscarpor');
        $cursos = Curso::where('nombre','like',"%$nombre%")->paginate(4);
        return view('cursos.index',compact('cursos'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'nombre' => 'required',
            'descripcion' => 'required|alpha',
            'fechainic' => 'required',
            'fechafin' => 'required',
            'estado' => 'required'
        ];
            $mensaje =[
                'required' =>'El :attribute es requerido',
                'descripcion.required' => 'La :attribute es requerida',
                'fechainic.required' => 'La fecha de inicio es requerida',
                'fechafin.required' => 'La fecha de finalizacion es requerida',
                'estado.required' => 'El  estado es requerido'
        ];
        $this->validate($request,$rules,$mensaje);
        $cursos= request()->except('_token');
        Curso::insert($cursos);
        Flash::success('Creado correctamente');
        return redirect (route('cursos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $cursos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursos=Curso::findorFail($id);
        return view('cursos.show', compact('cursos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $cursos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursos=Curso::findorFail($id);
        return view ('cursos.edit', compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $curso=request()->except(['_token','_method']);
        Curso::where('id','=',$id)->update($curso);
        Flash::success('Actualizado correctamente');
        return redirect ('cursos'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $cursos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Curso::destroy($id);
        Flash::error('Eliminado correctamente');
        return redirect('cursos');
    }
}
