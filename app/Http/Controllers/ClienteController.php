<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Repositories\ClienteRepository;
use App\Repositories\Interfaces\IClienteRepository;
use Facade\Ignition\Support\FakeComposer;
use Illuminate\Http\Request;

use Faker\Factory as Faker;

class ClienteController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = Cliente::all();
        return view('clientes.index')->with(['clientes' => $clientes]);
    }

    public function repository(IClienteRepository $interface){

        //Fazendo a chamada do metodo all no repository
        $clientes = $interface->all();
        return view('clientes.index')->with(['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IClienteRepository $interface)
    {
        $faker = Faker::create();
        $gender = $faker->randomElement(['male', 'female']);
        $dados = [
            'nome' => $faker->name($gender),
            'email' => $faker->unique()->safeEmail,
            'sexo' => $gender,
            'pais' => $faker->countryCode

        ];
        $interface->store($dados);
        return redirect()->route('cliente.repository');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
