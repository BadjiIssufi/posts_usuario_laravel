@extends('templates.app')

@section('conteudo')

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="/usuarios">Usuários</a></li>
            <li role="presentation" class="active"><a href="/posts">Posts</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Prova de Web - Posts</h3>
      </div>

      <div class="row marketing">
        <h2>Gerenciar os posts de:</h2>
      </div>

      <div class="row marketing">

          @foreach($usuarios as $u)
              <div class="col-lg-3">
                  <a href="#">
                      <img class="img-circle" src="{{ URL::to('images/user.png') }}"
                           alt="Generic placeholder image" width="128" height="128">
                      <h2>{{$u->nome}}</h2>
                  </a>
              </div>
          @endforeach

        <div class="col-lg-3">
          <a href="/posts/1">
            <img class="img-circle" src="{{ URL::to('images/user.png') }}" alt="Generic placeholder image" width="128" height="128">
            <h2>Marcelo Silva</h2>
          </a>
        </div>

        <div class="col-lg-3">
          <a href="/posts/1">
            <img class="img-circle" src="{{ URL::to('images/user.png') }}" alt="Generic placeholder image" width="128" height="128">
            <h2>Orlando Ferreira</h2>
          </a>
        </div>

        <div class="col-lg-3">
          <a href="/posts/1">
            <img class="img-circle" src="{{ URL::to('images/user.png') }}" alt="Generic placeholder image" width="128" height="128">
            <h2>Adriano Gusmão</h2>
          </a>
        </div>

      </div>

      <footer class="footer">
        <p>&copy; 2020 SI - UFMT/CUR</p>
      </footer>

    </div> <!-- /container -->

@endsection



