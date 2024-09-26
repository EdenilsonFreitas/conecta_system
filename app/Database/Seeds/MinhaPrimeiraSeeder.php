<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MinhaPrimeiraSeeder extends Seeder
{
    public function run()
    {
      $produtoModel = new \App\Models\ProdutoModel;

        $produto = [
            'nome'              => 'Notebock',
            'descricao'         => 'Descrição do produto para nossa primeira seeder',
            'valor_de_compra'   => '1299.9',
            'valor_de_venda'    => '1599.90',
            'quantidade'        => 10,
            'validade'          => '',
        ];
         $produtoModel->skipValidation(true)->protect(false)->insert($produto);

         $produto = [
            'nome'              => 'Mouse',
            'descricao'         => 'Descrição do produto para nossa primeira seeder',
            'valor_de_compra'   => '250.9',
            'valor_de_venda'    => '300',
            'quantidade'        => 10,
            'validade'          => '',
        ];
        $produtoModel->skipValidation(true)->protect(false)->insert($produto);

        dd($produtoModel->errors());
    }
}
