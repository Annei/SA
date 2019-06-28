<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Sistema de Archivos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/app.css">
    
   
</head>
<body>
        <h1 class="page-header text-center">Sistema de Archivos Digitales</h1>

        <div class="container">
                <div class="row">
                  <div class="col-sm-4">
                      <div class="well">
                            <h2 class="text-center">Datos Expedientes</h2>
                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <strong>Matricula</strong>
                                </div>
                            </div>
                            <div class="form-row">
                                    <div class="col">
                                        <strong>Nombre</strong>
                                    </div>
                            </div>
                            <div class="form-row">
                                    <div class="col">
                                        <strong>Carrera</strong>
                                    </div>
                            </div>
                            <div class="form-row">
                                    <div class="col">
                                        <strong>Status</strong>
                                    </div>
                                </div>
                        </form>
                      
                      </div>
                  </div><!--Find de expedient3es-->

                 <div class="col-sm-7">
                    <h2 class="text-center">Carpetas</h2>
                    <div id="accordion">
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Carpeta 1
                                  </button>
                                </h5>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                        <form method="POST" action="{{ route('upload.file') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="file" name="file[]" multiple><br>
                                            <button type="submit" class="btn btn-primary">Agregar</button>
                                        </form>
                                        <table class="table table-bordered table-striped">
                                                <thead>
                                                    <th>Nombre del Archivo</th>
                                                    <th>Tamaño del Archivo</th>
                                                    <th>Actualización</th>
                                                    <th>Descarga</th>
                                                </thead>
                                                <tbody>
                                                    @if(count($files) > 0)
                                                        @foreach($files as $file)
                                                            <tr>
                                                                <td>{{ $file->name }}</td>
                                                                <td> 
                                                                    @if($file->size < 1000)
                                                                        {{ number_format($file->size,2) }} bytes
                                                                    @elseif($file->size >= 1000000)
                                                                        {{ number_format($file->size/1000000,2) }} mb
                                                                    @else
                                                                        {{ number_format($file->size/1000,2) }} kb
                                                                    @endif
                                                                </td>
                                                                <td>{{ date('M d, Y h:i A', strtotime($file->created_at)) }}</td>
                                                                
                                                            </tr>
                                                            <!--<img src='storage/upload/{{$file->name}}' name="{{$file->name}}" class="thumbnail">-->
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="4" class="text-center">No Table Data</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                </div>


                                        
                              </div>
                            </div><!---Collapse 1-->

                        <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                   Carpeta 2
                                  </button>
                                </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                        <form method="POST" action="{{ route('upload.file') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="file" name="file[]" multiple><br>
                                            <button type="submit" class="btn btn-primary">Agregar</button>
                                        </form>
                                        <table class="table table-bordered table-striped">
                                                <thead>
                                                    <th>Nombre del Archivo</th>
                                                    <th>Tamaño del Archivo</th>
                                                    <th>Actualización</th>
                                                    <th>Descarga</th>
                                                </thead>
                                                <tbody>
                                                    @if(count($files) > 0)
                                                        @foreach($files as $file)
                                                            <tr>
                                                                <td>{{ $file->name }}</td>
                                                                <td> 
                                                                    @if($file->size < 1000)
                                                                        {{ number_format($file->size,2) }} bytes
                                                                    @elseif($file->size >= 1000000)
                                                                        {{ number_format($file->size/1000000,2) }} mb
                                                                    @else
                                                                        {{ number_format($file->size/1000,2) }} kb
                                                                    @endif
                                                                </td>
                                                                <td>{{ date('M d, Y h:i A', strtotime($file->created_at)) }}</td>
                                                                
                                                            </tr>
                                                            <!--<img src='storage/upload/{{$file->name}}' name="{{$file->name}}" class="thumbnail">-->
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="4" class="text-center">No Table Data</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                   Carpeta 3
                                  </button>
                                </h5>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                        <form method="POST" action="{{ route('upload.file') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="file" name="file[]" multiple><br>
                                            <button type="submit" class="btn btn-primary">Agregar</button>
                                        </form>
                                        <table class="table table-bordered table-striped">
                                                <thead>
                                                    <th>Nombre del Archivo</th>
                                                    <th>Tamaño del Archivo</th>
                                                    <th>Actualización</th>
                                                    <th>Descarga</th>
                                                </thead>
                                                <tbody>
                                                    @if(count($files) > 0)
                                                        @foreach($files as $file)
                                                            <tr>
                                                                <td>{{ $file->name }}</td>
                                                                <td> 
                                                                    @if($file->size < 1000)
                                                                        {{ number_format($file->size,2) }} bytes
                                                                    @elseif($file->size >= 1000000)
                                                                        {{ number_format($file->size/1000000,2) }} mb
                                                                    @else
                                                                        {{ number_format($file->size/1000,2) }} kb
                                                                    @endif
                                                                </td>
                                                                <td>{{ date('M d, Y h:i A', strtotime($file->created_at)) }}</td>
                                                                
                                                            </tr>
                                                            <!--<img src='storage/upload/{{$file->name}}' name="{{$file->name}}" class="thumbnail">-->
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="4" class="text-center">No Table Data</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                   

                 </div><!--fINDE DE LA SEGUNDA PARTES CARPETAS-->
                     
                      

                      
                </div><!--FIN DEL ROW--->
        </div><!--fINDE DEL CONTAINER-->
               
  
       
                    
            
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
</body>
</html>
