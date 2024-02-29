<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnderecoController extends Controller
{
  public function index() 
  {
    $enderecos = Endereco::all();
    return view(view: 'listagem')->with(
        [
            'enderecos' => $enderecos,
        ]
    );
  }

  public function adicionar()
  {
    return view( view: 'busca');
  }

  public function buscar(
    Request $request
  ) {
      $cep = $request->input( key: 'cep');
      $response = Http::get(url: "http://viacep.com.br/ws/$cep/json/")->json();
      //dd($response);

      return view( view: 'adicionar')->with(
        [
          'cep' => $request->input( key: 'cep'),
          'logradouro' => $response['logradouro'],
          'bairro' => $response['bairro'], 
          'cidade' => $response['localidade'], 
          'estado' => $response['uf'],  
        ]
        );
  }

  public function salvar(
    SalverRequest $request
  ) {
      $endereco = Endereco::where('cep', $request->input( key: 'cep'))->first();

      if (!$endereco) {
          Endereco::creat(
              [
                  'cep' => $request->input( key: 'cep'),
                  'logradouro' => $request->input( key: 'logradouro'),
                  'numero' => $request->input( key: 'numero'),
                  'bairro' => $request->input( key: 'bairro'),
                  'cidade' => $request->input( key: 'cidade'),
                  'estado' => $request->input( key: 'estado'),
              ]
          );

          return redirect( to: '/')->withSucesso('Endereço salvo com sucesso');
      }

      return redirect( to: '/')->withErro('O endereço já está cadastrado');
  }

}