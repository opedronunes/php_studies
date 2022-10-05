<html>
<head>
<title>Datatables</title>
	<link rel="stylesheet"  href="/styles/datatable_ajax_bootstrap.css">
	<link rel="stylesheet" href="/styles/datatable_bootstrap.css">

	<script src="/js/datatable_bootstrap.js"></script>	
	<script src="/js/jquery.js" type="text/javascript"></script>
    <script src="/js/datatable.js" type="text/javascript"></script>	
	
</head>
<body>
<div class="container my-4">
	<table id="contact-detail" class="table table-striped" style="width:100%">
	<thead>
		<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>CPF</th>
		<th>Endereço</th>
		<th>Perfil</th>
		</tr>
	</thead>
	</table>
	</div>
</body>
<script>
$(document).ready(function() {
    $('#contact-detail').dataTable({
		"scrollX": true,
		"pagingType": "numbers",
        "processing": true,
        "serverSide": true,
        "ajax": "server.php"
    } );
} );
</script>
</html>