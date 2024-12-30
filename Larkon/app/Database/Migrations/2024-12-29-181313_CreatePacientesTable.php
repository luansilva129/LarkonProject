<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePacientesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true,],
            'nome' => ['type' => 'VARCHAR', 'constraint' => 255],
            'logradouro' => ['type' => 'VARCHAR', 'constraint' => 255,],
            'bairro' => ['type' => 'VARCHAR', 'constraint' => 255,],
            'cidade' => ['type' => 'VARCHAR', 'constraint' => 255,],
            'cep' => ['type' => 'VARCHAR', 'constraint' => 255,],
            'telefone' => ['type' => 'VARCHAR', 'constraint' => 255,],
            'datanascimento' => ['type' => 'VARCHAR', 'constraint' => 255],
            'cpf' => ['type' => 'VARCHAR', 'constraint' => 255],
            'email' => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pacientes');
    }

    public function down()
    {
        $this->forge->dropTable('pacientes');
    }
}
