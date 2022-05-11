<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Http\Requests\ClientRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller //controler resource
{
    public function index()
    {
        $clients = \App\Models\Client::paginate(2);
        return view('admin.clients.index', compact('clients'));
    }

    public function create(Request $request)
    {
        $clientType = Client::getClientType($request->client_type);
        return view('admin.clients.create', ['client' => new Client(), 'clientType' => $clientType]);
    }

    public function store(ClientRequest $request)
    {
        $data = $request->only($request->rules());
        $data['defaulter'] = $request->has('defaulter');
        $data['client_type'] = Client::getClientType($request->client_type);
        Client::create($data);
        return redirect()->route('clients.index');
    }

    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        $clientType = $client->client_type;
        return view('admin.clients.edit', compact('client', 'clientType'));
    }

    public function update(ClientRequest $request, Client $client)
    {
        $data = $request->only(array_keys($request->rules()));
        $data['defaulter'] = $request->has('defaulter');
        $client->fill($data);
        $client->save();
        return redirect()->route('clients.index')
            ->with('message','Cliente alterado com sucesso');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')
            ->with('message','Cliente excluído com sucesso');
    }
}
