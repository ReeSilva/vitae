@extends('main.default')

@section('content')

  @if (count($errors) > 0)

    <div class="alert alert-danger">
      <ul>

        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach

      </ul>
    </div>

  @endif

  <form method="POST" action="register">
    {!! csrf_field() !!}

    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
          <label for="userEmail">Email</label>
          <input type="email" class="form-control" id="userEmail" name="email" placeholder="Digite seu email">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
          <label for="password">Senha</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="checkbox">
          <label>
            <input type="checkbox">Mantenha-me logado
          </label>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-2 col-sm-offset-6">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>

  </form>

@stop
