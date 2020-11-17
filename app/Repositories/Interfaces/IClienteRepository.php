<?php
namespace App\Repositories\Interfaces;

interface IClienteRepository{


    public function all();
    public function store($dados);

}
