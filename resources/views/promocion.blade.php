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

   

    <div class="container">
        <div class="row">
            <div class="col-sm">
                {{--  INSERTAR PRIMERA PARTE FORMULARIO  --}}
                <p>Columna form 1</p>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
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
                        <select class="form-control" id="vehicleclass">
                         <?php
                         foreach ($vehiculo as $v){
                             echo "<option>$v</option>";
                         }
                         
                         ?>
                        </select>
                      </div>
                    <div class="form-group">
                        <label for="call">Preferencia de llamada(*)</label>
                        <select class="form-control" id="call">
                          <option>Mañana</option>
                          <option>Tarde</option>
                          <option>Noche</option>
                        </select>
                    </div>  
            </div>
            <div class="col-sm">
                {{--  INSERTAR SEGUNDA PARTE FORMULARIO  --}}
                <p>Columna form 2</p>
                <div class="form-group">
                    <label for="lastname">Apellidos(*)</label>
                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" value="{{old ('lastname')}}" placeholder="Apellidos" required>
                    @error('lastname')
                    <small id="validation" class="form-text text-muted">{{$message}}</small>
                    @enderror
                  </div>
                <div class="form-group">
                      <label for="email">Email(*)</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old ('lastname')}}" placeholder="Email" required>
                      @error('email')
                      <small id="validation" class="form-text text-muted">{{$message}}</small>
                      @enderror
                </div>
                
                <div class="form-group">
                    <label for="vehiclemodel">Vehículo(*)</label>
                    <select class="form-control" id="vehiclemodel">
                      <?php
                      
                      foreach($turismo_comercial as $q){
                        echo "<option>$q</option>";
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