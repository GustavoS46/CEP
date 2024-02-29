<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="mb-5">Endereços Cadastrados</h1>
      <a class="btn btn-success" href="{{route('adicionar')}}">
        Adicionar CEP
      </a>

      @if(session('sucesso'))
          <div class="alert alert-success" role="alert">
            {{session('sucesso')}}
          </div>
      @endif

      @if(session('erro'))
          <div class="alert alert-danger" role="alert">
            {{session('erro')}}
          </div>
      @endif

      <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">CEP</th>
            <th scope="col">Logradouro</th>
            <th scope="col">Numero</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Data da Criação</th>
          </tr>
        </thead>
        <tbody>
            @foreach($enderecos as $endereco)
                <tr>
                    <td>{{$endereco->id}}</td>
                    <td>{{$endereco->cep}}</td>
                    <td>{{$endereco->logradouro}}</td>
                    <td>{{$endereco->numero}}</td>
                    <td>{{$endereco->bairro}}</td>
                    <td>{{$endereco->cidade}}</td>
                    <td>{{$endereco->estado}}</td>
                    <td>{{(new DateTime($endereco->created_at))->format('d/m/Y H:i:s')}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>