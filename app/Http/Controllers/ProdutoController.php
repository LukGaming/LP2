<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use App\Models\Produto;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['numberofProducts'=> 10]);
        $produtos = Produto::paginate(10);
        return view('produtos/index',  compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:5|max:255',
            'descricao' => 'required|min:5',
            'valor' => 'required',
        ]);
        Produto::create($request->all());
        return redirect('produto/create')->with('mensagem', 'Produto Criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('produtos/show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('produtos/edit', ['produto'=>$produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return redirect('produto/'.$produto->id.'/edit')->with('mensagem', 'Produto Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect('produto')->with('mensagem', 'Produto ' . $produto->id . ' Removido com sucesso!');
    }
    public function differentNumberOfProducts($numberofProducts)
    {
        session(['numberofProducts'=> $numberofProducts]);
        $produtos = Produto::paginate($numberofProducts);
        return view('produtos/index',  compact('produtos'));
    }
}
