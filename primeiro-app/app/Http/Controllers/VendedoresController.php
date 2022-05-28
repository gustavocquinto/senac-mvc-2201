<?php

namespace App\Http\Controllers;
use App\Models\vendedores;

use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return vendedores::all();
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
        //
        $json = $request->getContent();
        return vendedores::create(json_decode($json, JSON_OBJECT_AS_ARRAY));
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
        $vendedor = vendedores::find($id);

        if($vendedor){
            return $vendedor;
        }
        else{
            return json_encode([$id => 'nao existe']);
        }
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
        //
        $vendedor = vendedores::find($id);

        if ($vendedor){
            $json = $request->getContent();
            $atualizacao = json_decode($json, JSON_OBJECT_AS_ARRAY);
            $vendedor->nome = $atualizacao['nome'];
            $ret = $vendedor->update() ? [$id => 'atualizado'] : [$id => 'Erro'];
        }
        else{
            $ret = [$id => 'Não existe'];
        
        }
        return json_encode($ret);
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
        $vendedor = vendedores::find($id);

        if($vendedor){
            $ret = $vendedor->delete() ? [$id => 'Apagado'] : [$id => 'Erro'];
        }
        else{
            $ret = [$id => 'não existe'];
        }

        return json_encode($ret);
    }

    public function checkVendedor(int $id):bool
    {
        $vendedores = [ 1 => 'Paulo',
                        2 => 'Carla',
                        3 => 'João', 
                        4 => 'Isonequex'];
        

        return array_key_exists($id, $vendedores);
    }

    public function getVendedor(int $id):string
    {
        $vendedores = [ 1 => 'Paulo',
                        2 => 'Carla',
                        3 => 'João', 
                        4 => 'Isonequex'];

        return $vendedores[$id];
    }

    

}
