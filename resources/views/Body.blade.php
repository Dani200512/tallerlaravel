<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Formulario Body </h1>
<form action="{{route('Body.store')}}" method="POST" enctype="multipart/form-data">

   @csrf

   <label>
       Ingrese su denominacion:
       <br>
       <input type="text" name="denomination">
   </label>
   <br><br>


   <button type="submit">Enviar Formulario:</button>

   </form>
</body>
</html>
