<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
       $this->forge->addField([
            'id_produto' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type'          => 'VARCHAR',
                'constraint'    => 128,
            ],
            'descricao' => [
                'type'          => 'TEXT',
            ],
            'valor_de_compra' => [
                'type'          => 'DOUBLE',
            ],
            'valor_de_venda' => [
                'type'          => 'DOUBLE',
            ],
            'quantidade' => [
                'type'          => 'INT',
            ],
            'validade' => [
                'type'          => 'DATE',
            ],
            'created_at' => [
                'type'          => 'DATETIME',
                'null'          => true,  // Remove o valor padrão
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
                'null'          => true,  // Remove o valor padrão
            ],
            'deleted_at' => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
        ]);

        $this->forge->addKey('id_produto', true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}