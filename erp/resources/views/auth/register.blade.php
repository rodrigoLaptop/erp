@extends('vistaPrincipal.index')

@section('CONTENIDO')

    <section class="contact-page">
        <div class="container">
            <div class="text-center">
                <h2>Datos Personales</h2>
            </div>
            <div class="row contact-wrap">
                <div class="col-md-6 col-md-offset-3">
                    {!!Form::open(array('url'=>'/register','method'=>'POST','autocomplete'=>'off'))!!}
                    {{Form::token()}}
                        <div class="form-group">
                            <input type="text" name="ci" class="form-control" id="ci" placeholder="C.I." />
                        </div>

                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre Completo" required />
                        </div>

                        <div class="form-group">
                            <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección"/>
                        </div>

                        <div class="form-group">
                            <input type="int" name="telefono" class="form-control" id="telefono" placeholder="Teléfono" />
                        </div>


                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"/>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña"/>
                        </div>

                        <div class="text-center">
                            <h2>Datos de la Empresa</h2>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" name="nit" id="nit" placeholder="NIT"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Empresa" required />
                        </div>

                        <div class="form-group">
                            <input type="text" name="dEmpresa" class="form-control" id="dEmpresa" placeholder="Dirección"/>
                        </div>

                        <div class="form-group">
                            <input type="int" name="tEmpresa" class="form-control" id="tEmpresa" placeholder="Teléfono" />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="eEmpresa" id="eEmpresa" placeholder="Email"  />
                        </div>

                        <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required>Registrarse</button>
                        </div>
                    {!!Form::close()!!}
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
@endsection
