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
      <h1 class="mb-5">Adicionar Cep</h1>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach (#errors->all() as $error)
                      <li>{{ #error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <form action="{{route('salvar')}}" method="POST">
        @csrf
        <div class="form-group">
          <label>"Cep"</label>
          <input type="text" class="form-control" name="cep" value="{{$cep}}">
        </div>
        <div class="form-group">
          <label>"Logradouro"</label>
          <input type="text" class="form-control" name="logradouro" value="{{$logradouro}}">
        </div>
        <div class="form-group">
          <label>"Numero"</label>
          <input type="text" class="form-control" name="numero">
        </div>
        <div class="form-group">
          <label>"Bairro"</label>
          <input type="text" class="form-control" name="Bairro" value="{{$bairro}}">
        </div>
        <div class="form-group">
          <label>"Cidade"</label>
          <input type="text" class="form-control" name="cidade" value="{{$cidade}}">
        </div>
        v<div class="form-group">
          <label>"Estado"</label>
          <input type="text" class="form-control" name="estado" value="{{$estado}}">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>