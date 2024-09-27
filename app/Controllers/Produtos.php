<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Produtos extends BaseController
{
    private $produtoModel;
      public function __construct(){
        $this->produtoModel = new \App\Models\ProdutoModel();
    }
    public function index()
    {
       $data =[//esse array aqui vela esse texto do titulo para o index
            'titulo'=>'Listando os produtos',
            'produtos'=>$this->produtoModel->findAll()

       ];
       $produtos =[
            [
            'nome' =>"Notebock",
            'descricao'=>"Produto Usuado",
            'valor_de_compra'=> 899.99,
            'valor_de_venda'=> 1399.9,
            'quantidade' => 11,
            'validade' => "",
            ],
            [
            'nome' =>"Computador  I7",
            'descricao'=>"Produto Novo",
            'valor_de_compra'=> 1899.99,
            'valor_de_venda'=> 2399.9,
            'quantidade' => 1,
            'validade' => "",
            ],
       ];

       return view('Produtos/index', $data, $produtos);// o produtos está no controller e o index está na views
    }





    public function novo()
    {
        return "Novo Produtos";
    }
}
