<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  BOOTSTRAP  --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    {{--  RESPONSIVE  --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
   

    <title>Promoción Dapda</title>
</head>
<body>

  
    <div class="container">
        <div class="row">
          <div class="col-sm">
           <img src="{{ asset('img/mokka.jpg')}}" class="img-fluid"/>
          </div>
        </div>
    </div>

 {{--  Spinner de carga Bootstrap con modal  --}}
  <div class="modal fade bd-example-modal-lg" data-backdrop="static" data-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width: 48px">
            <<div class="loader">
            </div>
        </div>
    </div>
  </div>

    <div class="container">
        <div class="row align-items-start">
            <div class="col-sm col-md">
                <form method="POST" id="formulario" action="{{ url('promocion') }}">
                    <div class="form-group">
                      <label for="name">Nombre(*)</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nombre" value="{{old ('name')}}" >
                      @error('name')
                      <small id="validation" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
              </div>
                  <div class="col-sm col-md">
                    <div class="form-group">
                      <label for="lastname">Apellidos(*)</label>
                      <input type="text" class="form-control @error('lastname') is-invalid @enderror" name='lastname' id="lastname" placeholder="Apellidos" value="{{old ('lastname')}}" >
                      @error('lastname')
                      <small id="validation" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                  </div>
            </div>
        


                <div class="row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="email">Email(*)</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email"  placeholder="Email" value="{{old ('email')}}" >
                      @error('email')
                      <small id="validation" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm col-md">
                    <div class="form-group">
                      <label for="phone">Teléfono</label>
                      <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Teléfono" value="{{old ('phone')}}" >
                      @error('phone')
                      <small id="validation" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                  </div>
                </div>
            

            <div class="row">
              <div class="col-sm col-md">
                <div class="form-group">
                  <label for="vehicleclass">Tipo de vehículo(*)</label>
                  <select class="form-select" id="vehicleclass" name="vehicleclass" onChange="modeloVehiculo();">
                  <option selected disabled hidden value="Seleccione Tipo de Vehículo"></option>
                  <?php
                   foreach ($vehiculo as $v){
                       echo "<option value ='$v->id' name='$v->nombre' id='$v->id'>$v->nombre</option>";
                   }
                  ?>
                  </select>
                </div>
              </div>

              <div class="col-sm col-md">
                <div class="form-group">
                  <label for="vehiclemodel">Vehículo(*)</label>
                  <select class="form-select" id="vehiclemodel" name="vehiclemodel">
                  <option selected disabled hidden value= "Seleccione Modelo"></option>

                  </select>
                </div>  
            </div>
          </div>

          <div class="row">
            <div class="col-sm col-md">
                <div class="form-group">
                  <label for="call">Preferencia de llamada(*)</label>
                  <select class="form-select" id="call" name="call">
                    <option value="morning" name="mañana" id="mañana">Mañana</option>
                    <option value="tarde" name="tarde" id="tarde">Tarde</option>
                    <option value="noche" name="noche" id="noche">Noche</option>
                  </select>
              </div>
            </div>
          </div>  

        <div class="row">
         <div class="col-sm">
          <div class="modal">
          </div>
            <button type="submit" id="button" class="btn btn-primary" onclick="spinner();">Enviar</button>
            </form>
         </div>
            
        </div>

    </div>
 
            

    {{--  JAVASCRIPT  --}}
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>
</html>