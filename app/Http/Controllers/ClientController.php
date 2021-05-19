<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientAdresse;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    private $objClient;
    private $objClientAdresse;


    public function __construct(){
        $this->objClient = new Client();
        $this->objClientAdresse = new ClientAdresse();

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $client = $this->objClient->All();
        //dd( $this->objClient->find(1)->relAdresses);
        return view('index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $client = Client::create($request->all());
        $client->relAdresses()->create($input);
         
      return redirect('clients');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = $this->objClient->find($id);
        return view('show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = $this->objClient->find($id);
        return view('create', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clients = Client::find($id);
        $inputClients = $request->except('_method', '_token');
        $inputAdss = $request->except('_method', '_token', 'name', 'email', 'phone');
        
        $clients->update($inputClients);
        $clients->relAdresses()->update($inputAdss);
        
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $client = $this->objClient->find($id);
       $client ->delete();
       $client ->relAdresses()->delete();

       return($client)?"deletado":"não deletado";

    }
}
