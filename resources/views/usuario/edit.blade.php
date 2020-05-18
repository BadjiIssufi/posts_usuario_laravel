@extends('templates.app')

@section('conteudo')

    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active"><a href="/usuarios">Usuários</a></li>
                    <li role="presentation"><a href="{{route("usuarios.index")}}">Posts</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">Prova de Web - Posts</h3>
        </div>

        <div class="row marketing">

            <div class="col-sm-12">
                <form class="form-inline" action="{{route("usuarios.update", $usuario->id)}}" method="post">
                    @method("put")

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-sm-10">
                        <label for="nomeusuario" class="col-sm-4 control-label">Nome do Usuário</label>
                        <div class="input-group col-sm-8">
                            <input type="text" class="form-control" name="nome" id="nomeusuario" value="{{$usuario->nome}}">
                        </div>
                    </div>
                    <div class="form-group col-sm-2">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>

            <br><br><br><br>



        </div>

        <footer class="footer">
            <p>&copy; 2020 SI - UFMT/CUR</p>
        </footer>

    </div> <!-- /container -->

@endsection
