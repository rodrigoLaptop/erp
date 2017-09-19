@extends('vistaPrincipal.index')
@section('CONTENIDO')


    <div class="container" style="padding-bottom: 100px">

        <form class="form-signin" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="col-lg-12">
            <h2 align="center">Login</h2><br>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="sr-only">Contraseña</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button class="btn btn-lg btn-danger btn-block" type="submit"><i class="fa fa-sign-in"></i><span> Iniciar Sesión</span></button>
            </div>
        </form>

    </div> <!-- /container -->

@endsection