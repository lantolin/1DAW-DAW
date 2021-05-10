<html>
<body>
<h2>Hello World!</h2>
<p><%= java.util.Calendar.getInstance().getTime() %></p>  
<p><% out.print( java.util.Calendar.getInstance().getTime() ); %></p>
<p>Contar hasta tres:</p>
<% for (int i=1; i<4; i++) { %>
    <p>Este es el: <%= i %>.</p>
<% } %>
<p><a href="./UnServlet">Un Servlet</a></p>  
</body>
</html>
