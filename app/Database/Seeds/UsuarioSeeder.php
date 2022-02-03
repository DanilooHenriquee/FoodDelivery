<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        
        $usuarioModel = new \App\Models\UsuarioModel;

        $usuario = [
            'nome'      => 'Alice de Oliveira Moraes',
            'email'     => 'alice@gmail.com',
            'cpf'       => '546.112.350-33',
            'telefone'  => '19-6666-6666'
        ];

        $usuarioModel->protect(false)->insert($usuario);

        $usuario = [
            'nome'      => 'Danilo Henrique Costa Farias',
            'email'     => 'danilo@gmail.com',
            'cpf'       => '585.971.540-47',
            'telefone'  => '19-7777-7777'
        ];

        $usuarioModel->protect(false)->insert($usuario);

        dd($usuarioModel->errors());

    }
}
