<?php

use Illuminate\Database\Seeder;
Use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => 'Luciano André',
            'email' => 'prof.lucianoandre@gmail.com',
            'password' => bcrypt('1234')
        ];

        if (User::where('email', $dados['email'])->count()) {
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
        }else {
            User::create($dados);
        }
    }
}
