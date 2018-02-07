<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Auth;

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
        return back();
    }

    public function storeArray(Array $data)
    {
        $usuario = new Usuario;
        $usuario->nome=$data->nome;
        $usuario->email=$data->email;
        $usuario->telefone=$data->telefone;
        $usuario->endereco=$data->endereco;
        $usuario->senha=$data->senha;
        $usuario->cpf=$data->cpf;
        $usuario->data_nascimento=$data->data_nascimento;
        $usuario->categorias=$data->categorias;
        $usuario->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showPerfil($request)
    {

        $usuario= Usuario::where(
          'categorias', Auth::user()->categorias)->get();

        return redirect('goPerfil')->with('id',$usuario->id);

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
      return redirect('login');
    }
    public function goCadastro()
    {
      return view('cadastro');
    }
    public function goPerfil()
    {
      return view('home');
    }
}
