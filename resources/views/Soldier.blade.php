<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Formulario soldier </h1>
<form action="{{route('Soldier.store')}}" method="POST" enctype="multipart/form-data">

   @csrf

   <label>
       Ingrese su nombre:
       <br>
       <input type="text" name="name">
   </label>
   <br><br>
   <label>
       Ingrese su apellido:
       <br>
       <input type="text" name="lastname">
   </label>
   <br><br>
   <label>
    Ingrese su grado:
    <br>
    <input type="text" name="degree">
</label>
<br><br>

   <button type="submit">Enviar Formulario:</button>

   </form>
</body>
</html>
