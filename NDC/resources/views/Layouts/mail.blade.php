<html>
<head></head>
<body>

<h3>Cordial saludo señor(a) {{ $nombre }}</h3>

<p>Atentamente desde el área de instalaciones y equipos nos gustaria comentarle que su solicitud a continuación ha sido ejecutada satisfactoriamente.</p>

<div class="table-responsive">
  <table class="table">
  	<tr>
    	<th># de solicitud</th>
        <th>Descripción</th>
        <th>Fecha de cierre</th>
    </tr>
    <tr>
    	<td>{{ $id }}</td>
		<td>{{ $descripcion }}</td>
        <td>{{ $fecha }}</td>
    </tr>
  </table>
</div>


<p>Si realmente no esta satisfecho con el resultado, puede responder este correo electrónico con su insatisfacción y reabriremos la solicitud para su gestión.</p>

<p>Saludos,</p>

<img src="http://unipanamericana.edu.co/formularios/2017/web/siaf/img/siaf-01.png" height="100" width="300"><br>
| <b>Instalaciones y equipos</b> | <a href="https://unipanamericana.edu.co">www.unipanamericana.edu.co</a> | 5558210 Ext. 483 - 486 |
</body>
</html>
