<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Formulario de Service </h1>
<form action="{{route('Service.store')}}" method="POST" enctype="multipart/form-data">

   @csrf

   <label>
       Ingrese su actividad:
       <br>
       <input type="text" name="activity">
   </label>
   <br><br>


   <button type="submit">Enviar Formulario:</button>

   </form>
</body>
</html>
