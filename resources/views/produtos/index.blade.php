<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">

        </form>
        <h1>Lista de Produtos</h1>
        <form>
            <!--<div class="form-group">
                <label for="exampleFormControlSelect1" class="select_location">Quantidade de Produtos por página</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <!--<option id="link1"><a href="{{ url('differentNumberOfProducts/10') }}">10</a></option>
                    <option>10</option>
                    <option>30</option>
                    <option>50</option>
                    <option>100</option>
                    <option>500</option>
                </select>
            </div>
            -->
            <div class="form-group form-row">
                <label for="exampleFormControlSelect1" class="select_location">Quantidade de Produtos por página</label>
                <div class="form-row">
                <select class="select_location form-group col-md-2  " for="exampleFormControlSelect1" >
                    <option value="#"></option>
                    <option value="http://localhost:8000/differentNumberOfProducts/10">10</option>
                    <option value="http://localhost:8000/differentNumberOfProducts/15">15</option>
                    <option value="http://localhost:8000/differentNumberOfProducts/30">30</option>
                    <option value="http://localhost:8000/differentNumberOfProducts/50">50</option>
                    <option value="http://localhost:8000/differentNumberOfProducts/100">100</option>
                    <option value="http://localhost:8000/differentNumberOfProducts/500">500</option>
                    <option value="http://localhost:8000/differentNumberOfProducts/30">1000/option>
                </select>
            </div>
            </div>


            @if (\Session::has('mensagem'))
                <div class="alert alert-success">
                    <ul>
                        {{ session('mensagem') }}
                    </ul>
                </div>
            @endif

            @if (count($produtos) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descricao</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    @foreach ($produtos as $produto)


                        <tbody>
                            <tr>
                                <th scope="row">{{ $produto->id }}</th>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ Str::substr($produto->descricao, 0, 100) }}</td>
                                <td>{{ $produto->valor }}</td>
                                <td>
                                    <a href="{{ route('produto.show', $produto->id) }}">Detalhes</a>
                                </td>
                                <td>
                                    <form action="{{ route('produto.destroy', $produto->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                    {{-- Pagination --}}

                </table>
    </div>
    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {!! $produtos->links() !!}
    </div>
    @endif


    <script>
        $('.select_location').on('change', function() {
            window.location = $(this).val();
        });
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
