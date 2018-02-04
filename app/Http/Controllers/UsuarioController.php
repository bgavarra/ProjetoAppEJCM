<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuarios = Usuario::all();

      return view('welcome',['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->nome=$request->nome;
        $usuario->email=$request->email;
        $usuario->telefone=$request->telefone;
        $usuario->endereco=$request->endereco;
        $usuario->senha=$request->senha;
        $usuario->cpf=$request->cpf;
        $usuario->data_nascimento=$request->data_nascimento;
        $usuario->categorias=$request->categorias;
        $usuario->save();
        return back;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $usuario= Usuario::find()->where('categorias',{{$id}});
        //
        // return view('welcome'['usuario'=>$usuario]);

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
      $usuario = Usuario::find($id);
      $usuario->nome=$request->nome;
      $usuario->senha=$request->senha;
      $usuario->telefone=$request->telefone;
      $usuario->endereco=$request->endereco;
      $usuario->data_nascimento=$request->data_nascimento;
      $usuario->categorias=$request->categorias;
      $usuario->save();
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $usuario = Usuario::find($id);
      $usuario->delete();
      return back();
    }

    public function goTest()
    {
      return view('teste');
    }
    public function goHome()
    {
      return view('welcome');
    }
    public function goLogin()
    {
      return view('teste');
    }
    public function goCadastro()
    {
      return view('teste');
    }
}
