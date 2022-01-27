<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  BOOTSTRAP  --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    {{--  RESPONSIVE  --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Promoción</title>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-sm">
            <?php
                // En la variable $query me vienen los datos de la consulta a la DB
               // echo $query;
            ?>
           <img src="{{ asset('img/mokka.jpg')}}" class="img-fluid"/>
          </div>
        </div>
    </div>
    
{{--  SPINNER  --}}
    <div class="spinner" role="status">
      <span class="sr-only">Loading...</span>
    </div>

   

    <div class="container">
        <div class="row">
            <div class="col-sm">
                {{--  INSERTAR PRIMERA PARTE FORMULARIO  --}}
                <p>Columna form 1</p>
                <form method="POST" action="{{ url('promocion') }}">
                    <div class="form-group">
                      <label for="name">Nombre(*)</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nombre" value="{{old ('name')}}" required>
                      @error('name')
                      <small id="validation" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="phone">Teléfono</label>
                      <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Teléfono" value="{{old ('phone')}}" >
                      @error('phone')
                      <small id="validation" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="vehicleclass">Tipo de vehículo(*)</label>
                        <select class="form-control" id="vehicleclass" name="vehicleclass">
                         <?php
                         foreach ($vehiculo as $v){
                             echo "<option value ='$v' name='$v' id='$v'>$v</option>";
                         }
                         ?>
                        </select>
                      </div>
                    <div class="form-group">
                        <label for="call">Preferencia de llamada(*)</label>
                        <select class="form-control" id="call" name="call">
                          <option value="morning" name="mañana" id="mañana">Mañana</option>
                          <option value="tarde" name="tarde" id="tarde">Tarde</option>
                          <option value="noche" name="noche" id="noche">Noche</option>
                        </select>
                    </div>  
            </div>
            <div class="col-sm">
                {{--  INSERTAR SEGUNDA PARTE FORMULARIO  --}}
                <p>Columna form 2</p>
                <div class="form-group">
                    <label for="lastname">Apellidos(*)</label>
                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" name='lastname' id="lastname" placeholder="Apellidos" value="{{old ('lastname')}}" required>
                    @error('lastname')
                    <small id="validation" class="form-text text-muted">{{$message}}</small>
                    @enderror
                  </div>
                <div class="form-group">
                      <label for="email">Email(*)</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"  placeholder="Email" value="{{old ('email')}}" required>
                      @error('email')
                      <small id="validation" class="form-text text-muted">{{$message}}</small>
                      @enderror
                </div>
                
                <div class="form-group">
                    <label for="vehiclemodel">Vehículo(*)</label>
                    <select class="form-control" id="vehiclemodel" name="vehiclemodel">
                      <?php
                      
                      foreach($turismo_comercial as $q){
                        echo "<option value='$q' name='$q' value='$q'>$q</option>";
                      }
                      ?>
                    </select>
                </div>  
            </div>
        </div>
        <div class="row">
         <div class="col-sm">
            <button type="submit" class="btn btn-primary">Enviar</button>
           
            </form>
         </div>
            
        </div>

    </div>
            

    {{--  JAVASCRIPT  --}}
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

</body>
</html>