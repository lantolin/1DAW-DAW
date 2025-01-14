<html>
<body>
	<h2>Hello World!</h2>
	<form name="formulario" action="saludo" method="GET">
		<label>Nombre:</label> 
		<input type="text" name="nombre" /> 
		<input type="submit" value="Submit" />
	</form>
	<p>${saludo}</p>
	<p>Son las <%=java.util.Calendar.getInstance().getTime()%></p>
</body>
</html>