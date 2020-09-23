<!DOCTYPE html>
<html lang="es">
<head>
	<title>Productos</title>
	<link rel="stylesheet" type="text/css" href="css/CssLogin.css">
</head>
<body>
	<div id="fondo"></div>
	<form method="POST" action="{{route('registroproductos')}}">
	  @csrf
	<div class='login'>
      <input name="idproducto" placeholder='ProductoID'>
      <input name="idproveedor" placeholder="Producto Proveedor">
      <input name="pnombre" placeholder="Nombre">
      <input name="precio" placeholder='Precio'>
      <input name="stock" placeholder="Stock">
      <input text="descripcion" placeholder="Descripcion">
      <input type="submit" value='registrar'/>
    </form>
  		
	</div>
	</form>
</body>
</html>