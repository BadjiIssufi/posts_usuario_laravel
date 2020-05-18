@extends('templates.app')

@section('conteudo')

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
              <li role="presentation" class="active"><a href="/usuarios">Usuários</a></li>
              <li role="presentation"><a href="{{route("Usuario.index")}}">Posts</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Prova de Web - Posts</h3>
      </div>

      <div class="row marketing">
        <h3>Eu sou "Marcelo Silva"
        <button class="btn btn-xs btn-primary" onclick="history.back()">Voltar</button>
        </h3>
      </div>

      <div class="row marketing">

        <div class="col-sm-12">
            <form class="form-inline" action="/posts/1" method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group col-sm-10">
                <label for="mensagem" class="col-sm-4 control-label">Mensagem</label>
                <div class="input-group col-sm-8">
                  <input type="text" class="form-control" name="mensagem" id="mensagem">
                </div>
              </div>
              <div class="form-group col-sm-2">
                  <button type="submit" class="btn btn-primary">Postar</button>
              </div>
            </form>
        </div>

        <br><br><br><br>
        <div class="col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading">TODOS OS POSTS</div>

              <table class="table table-bordered table-hover" >
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Postado por</th>
                    <th>Mensagem</th>
                    <th>Likes</th>
                    <th>Like/Unlike</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Marcelo Silva</td>
                    <td>Olá, sejam todos bem vindos!</td>
                    <td>
                        <span class="label label-primary">Marcelo Silva</span>
                        <span class="label label-primary">Orlando Ferreira</span>
                        <span class="label label-primary">Adriano Gusmão</span>
                    </td>
                    <td>
                        <a class="btn btn-default btn-danger btn-sm" href="/posts/1/unlike/1" role="button">Unlike</a>
                        <!-- rota: /posts/{usuario_id}/unlike/{post_id} -->
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Orlando Ferreira</td>
                    <td>Uma ótima prova.</td>
                    <td>
                        <span class="label label-primary">Adriano Gusmão</span>
                    </td>
                    <td>
                        <a class="btn btn-default btn-danger btn-sm" href="/posts/1/like/2" role="button">Like</a>
                        <!-- rota: /posts/{usuario_id}/unlike/{post_id} -->
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Orlando Ferreira</td>
                    <td>Boa noite.</td>
                    <td>
                        <span class="label label-primary">Orlando Ferreira</span>
                        <span class="label label-primary">Adriano Gusmão</span>
                    </td>
                    <td>
                        <a class="btn btn-default btn-danger btn-sm" href="/posts/1/unlike/3" role="button">Unlike</a>
                        <!-- rota: /posts/{usuario_id}/unlike/{post_id} -->
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
        </div>


      </div>

      <footer class="footer">
        <p>&copy; 2020 SI - UFMT/CUR</p>
      </footer>

    </div> <!-- /container -->

@endsection



