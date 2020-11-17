<?php

namespace App\Repositories;

use App\Models\Cliente;
use App\Repositories\Interfaces\IClienteRepository;

class ClienteRepository  implements IClienteRepository
{

    //Passando o valor da variavel model para dentro do GenericRepository
    protected $model ;

    public function __construct(Cliente $model){
        $this->model = $model;
    }
    //Como o  ClienteRepository não tem o metodo all entao é chamado metodo da classe estendida


    public function all()
    {
        //Utilizamos o Model normal aqui com o metodo all.
        return $this->model->all();
    }


      public function store($dados)
    {
        $this->model->fill($dados);
        //Utilizamos o Model normal aqui com o metodo all.
        return $this->model->save();
    }

}
