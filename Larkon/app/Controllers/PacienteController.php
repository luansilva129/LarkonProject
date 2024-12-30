<?php

namespace App\Controllers;

use App\Models\PacienteModel;

class PacienteController extends BaseController
{
    public function index()
    {
        $pacienteModel = new \App\Models\PacienteModel();
    }

    public function cadastrar()
    {
        return view('pacientes/cadastro-pacientes');
    }
    
    public function listar()
    {
        $model = new PacienteModel();
        $pacientes = $model->findAll();

        // Processa os dados para o Grid.js
        $data['pacientes'] = array_map(function ($paciente) {
            return [
                $paciente['nome'],
                date('d/m/Y', strtotime($paciente['datanascimento'])),
                $paciente['email'],
                $paciente['telefone'],
                $paciente['id'], 
            ];
        }, $pacientes);

        return view('pacientes/listar-pacientes', $data);
    }

    public function save()
    {
        $model = new PacienteModel();

        $validation = $this->validate([
            'nome' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'cpf' => 'required|min_length[11]|max_length[14]',
        ]);
        
        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = $this->request->getPost([
            'nome', 'logradouro', 'bairro', 'cidade', 
            'cep', 'telefone', 'datanascimento', 'cpf', 'email'
        ]);

        if ($model->insert($data)) {
            return redirect()->to('/listar-pacientes')->with('success', 'Paciente cadastrado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao salvar os dados.');
        }
    }

    public function editar($id)
    {
        $model = new PacienteModel();
        $paciente = $model->find($id);

        if (!$paciente) {
            return redirect()->to('/listar-pacientes')->with('error', 'Paciente não encontrado.');
        }

        return view('pacientes/editar-paciente', ['paciente' => $paciente]);
    }

    public function atualizar($id)
    {
        $model = new PacienteModel();

        $paciente = $model->find($id);
        if (!$paciente) {
            return redirect()->to('/listar-pacientes')->with('error', 'Paciente não encontrado.');
        }

        $validation = $this->validate([
            'nome' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'cpf' => 'required',
        ]);

        if (!$validation) {
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }

        $data = $this->request->getPost([
            'nome', 'logradouro', 'bairro', 'cidade',
            'cep', 'telefone', 'datanascimento', 'cpf', 'email'
        ]);

        if ($model->update($id, $data)) {
            return redirect()->to('/listar-pacientes')->with('success', 'Paciente atualizado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao atualizar os dados.');
        }
    }

    public function excluir($id)
    {
        $model = new PacienteModel();

        // Verifica se o paciente existe
        $paciente = $model->find($id);
        if (!$paciente) {
            return redirect()->to('/listar-pacientes')->with('error', 'Paciente não encontrado.');
        }

        // Tenta excluir o paciente
        if ($model->delete($id)) {
            return redirect()->to('/listar-pacientes')->with('success', 'Paciente excluído com sucesso!');
        } else {
            return redirect()->to('/listar-pacientes')->with('error', 'Erro ao excluir o paciente.');
        }
    }
    
}
