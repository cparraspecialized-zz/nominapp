@extends ('layouts.admin')
@section ('content')
        {!!Form::open(array('url'=>'Parametros','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
        {{Form::token()}}
     
          <div class="col-lg-12 col-sm-12 form-group">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Crear un Rol</h5>
              </div>
              <div class="card-body">               
                <div class="form-group">
                  <label for="salarioMinimo"><p class="font-weight-normal">Salario Minimo: </p></label>
                  <input type="text" name="salarioMinimo" class="form-control" placeholder="SMMLV">
                </div>
                <div class="form-group">
                  <label for="auxilioTransportes"><p class="font-weight-normal">Auxilio Transporte: </p></label>
                  <input type="text" name="auxilioTransportes" class="form-control" placeholder="AUX. TRANSPORTE">
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
                <button class="btn btn-danger btn-lg btn-block" type="reset">Cancelar</button>
    
              </div>
            </div>
          </div>
          {!!Form::close()!!}
@endsection