<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="d-flex justify-content-center"><h1>Criando Produtos</h1></div>
    
    <div class="container">
        @if (session('mensagem'))
    <div class="alert alert-success">
        {{ session('mensagem') }}
    </div>
@endif
    <form action="{{route('produto.store')}}" method="POST">
        @csrf
        <br>
        <div class="form-group">
          <label for="nome">Nome do produto</label>
          <input type="text" class="form-control" placeholder="Digite o nome do produto" id="nome" name="nome">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Descricao</label>
            <textarea type="textarea" class="form-control" placeholder="Digite a descricao do produto" name="descricao"></textarea>
       
        </div> 
        <br>
        <div class="form-group">
            <label for="valor">Valor do produto</label>
            <input type="number" class="form-control" placeholder="Valor do produto" name="valor">
          </div>  
          <br>  


<button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>