<form action="formulario_control_1.php" method="post">
  <label for="DNI">DNI:</label>
  <input type="text" id="dni" name="dni"
  pattern="[0-9]{8}[A-Za-z]{1}" title="El DNI tiene 8 dígitos y una letra"><br><br>
  <input type="submit" value="Enviar">
</form> 


<form action="formulario_control_2.php" method="post">
  <label for="email">Email:</label>
  <input type="text" name="email"
  pattern="[a-z0-9._]+@[a-z0-9.-]+\.[a-z]{2,}" title="Formato de email incorrecto"><br><br>
  <input type="submit" value="Enviar">
</form>