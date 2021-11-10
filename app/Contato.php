<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista()
    {
        $contatos = [
            ['nome' => 'Luciano André', 'idade' => 36],
            ['nome' => 'Nathalia Pedrosa', 'idade' => 32]
        ];

        return $contatos;
    }
}
