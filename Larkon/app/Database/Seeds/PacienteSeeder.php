<?php

namespace App\Database\Seeds;

use App\Models\PacienteModel;
use CodeIgniter\Database\Seeder;
use App\Models\Pacientes;

class PacienteSeeder extends Seeder
{
    public function run()
    {
        $paciente = new PacienteModel();

        $insertdata['nome'] = 'Luan';
        $insertdata['logradouro'] = 'Rua das embarcações 1';
        $insertdata['bairro'] = 'Nova Parnamirim';
        $insertdata['cidade'] = 'Parnamirim';
        $insertdata['cep'] = '59152-845';
        $insertdata['telefone'] = '(84) 98826-1495';
        $insertdata['datanascimento'] = '10/02/1999';
        $insertdata['cpf'] = '701.087.594-40';
        $insertdata['email'] = 'luan@demo.com';

        $paciente->insert($insertdata);
    }
}
