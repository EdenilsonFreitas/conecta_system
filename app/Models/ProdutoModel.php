<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
 /** public function cadastraRegistro()
  {
    return "Módulo responsável por cadastrar todos os registros do produto!";
  }
   */

    protected $table      = 'produtos';
    protected $primaryKey = 'id_produto';

    protected $useTimestamps = true;  // Habilita created_at e updated_at
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at'; // Se estiver usando soft deletes

    // Resto da configuração do Model
}