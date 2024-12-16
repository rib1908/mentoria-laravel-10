<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDeProdutoCadastrado = $this->buscaTotalProdutoCadastrado(); 
        $totalDeClienteCadastrado = $this->buscaTotalClienteCadastrado();
        $totalDeVendaCadastrado = $this->buscaTotalVendaCadastrado();



        return view('pages.dashboard.dashboard', compact('totalDeProdutoCadastrado', 'totalDeClienteCadastrado','totalDeVendaCadastrado')); 
    }

    public function buscaTotalProdutoCadastrado()
    {
        $findProduto = Produto::all()->count();

        return $findProduto;
    }

    public function buscaTotalClienteCadastrado()
    {
        $findCliente = Cliente::all()->count();

        return $findCliente;
    }

    public function buscaTotalVendaCadastrado()
    {
        $findVendas = Venda::all()->count();

        return $findVendas;
    }
   
}
