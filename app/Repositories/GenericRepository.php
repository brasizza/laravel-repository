<?php

namespace App\Repositories;


abstract class GenericRepository
{
    protected $model;
    //Primeira coisa que é chamado é o construct
    public function __construct()
    {

        //Chama um método para descobrir de qual modelo estamos falando
        $this->model = $this->resolveModel();
    }


    protected function resolveModel()
    {
        //Pegamos o valor do modelo da classe que foi extendida e colocada la no repositorio por meio da propriedade PROTECTED
        return app($this->model);
    }


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
