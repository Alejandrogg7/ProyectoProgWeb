<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: url(https://static8.depositphotos.com/1371851/851/i/450/depositphotos_8513015-stock-photo-barber-shop-pole.jpg);
                background-size: 100% 100%;
                background-repeat: repeat-y;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .formu{
              background-color: white;
              border-radius: 3px;
              font-size: 0.8em;
              margin: 0 auto;
              padding: 35px;
              color: #999;
              padding-right: 40px;
            }

            input, textarea{
			      border: 0;
			      outline: none;
                  width: 100%;
	        	}

            .tabla{
              background-color: white;
              color: black;
              text-align: left;
              border-collapse: collapse;
              width: 100%;
              margin-left: 50px;
            }

            th, td{
              padding: 20px;
            }

            thead{
              background-color: #246355;
              color: white;
            }

            tr:nth-child(even){
              background-color: #ddd;
            }
            tr:hover td{
              background-color: #369681;
              color: white;
            }
            .contenedor{
              display: flex;
              flex-wrap: nowrap;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                Editor de turno ingresado              
                </div>
                <div class="contenedor">
                <div class="formu">
                <form method="POST" action="/editarturnobd" class="needs-validation" novalidate>
                @csrf
                <div class="form-row">
                <div class="col-md-10 mb-3">
                        <label for="validationTooltip01">Descripción del corte</label>
                        <input type="text" name="description_text" id="validationTooltip01" class="form-control" value="{{ $objectToUpdate->descripcion_corte }}" required>
                        <input type="hidden" name="id_responsable_hidden" value="{{ $objectToUpdate->id }}">
                        <div class="valid-tooltip">
                            Registro correcto!
                        </div>
                </div>
                
                <div class="col-md-10 mb-3">
                        <label for="validationTooltip02">Barbero</label>
                        <input type="text" name="barbero_text" id="validationTooltip02" class="form-control" value="{{ $objectToUpdate->barbero }}" required>
                        <div class="valid-tooltip">
                            Registro correcto!
                        </div>
                </div> 

                <div>
                        <label for="validationTooltip03">Fecha Turno</label>
                        <input type="date" name="fecha_date" id="validationTooltip03" class="form-control" value="{{ $objectToUpdate->fecha_turno }}" required>
                        <div class="valid-tooltip">
                            Registro correcto!
                        </div>
                </div>
                <div class="col-md-10 mb-3">
                        <label for="validationTooltip02">Responsable Reserva</label>
                        <input type="text" name="responsable_text" id="validationTooltip02" class="form-control" value="{{ $objectToUpdate->responsable }}" required>
                        <div class="valid-tooltip">
                            Registro correcto!
                        </div>
                </div>  
                </div>

                <div>
                        <input type="submit" value="Editar" id="" class="btn btn-primary">
                </div> 
                </form> 
                    </div>
                </div>
            </div>
        </div>
        </body>
</html>