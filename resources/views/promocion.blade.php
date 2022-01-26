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
                <form>
                    <div class="form-group">
                      <label for="name">Nombre(*)</label>
                      <input type="text" class="form-control" id="name" aria-describedby="" placeholder="Nombre">
                      <small id="validation" class="form-text text-muted">Aquí montamos la respuesta de la validación del formulario</small>
                    </div>
                    <div class="form-group">
                      <label for="phone">Teléfono</label>
                      <input type="number" class="form-control" id="phone" placeholder="Teléfono">
                      <small id="validation" class="form-text text-muted">Aquí montamos la respuesta de la validación del formulario</small>
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
                    <input type="text" class="form-control" id="lastname" aria-describedby="" placeholder="Apellidos">
                    <small id="validation" class="form-text text-muted">Aquí montamos la respuesta de la validación del formulario</small>
                  </div>
                <div class="form-group">
                      <label for="email">Email(*)</label>
                      <input type="email" class="form-control" id="email" aria-describedby="" placeholder="Email">
                      <small id="validation" class="form-text text-muted">Aquí montamos la respuesta de la validación del formulario</small>
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
            <button type="button" class="btn btn-primary">Enviar</button>
         </div>
            
        </div>

    </div>
            

    {{--  JAVASCRIPT  --}}
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

</body>
</html>