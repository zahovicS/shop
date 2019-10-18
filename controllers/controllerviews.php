


<?php 

	class controllersViews
	{
		function __construct()
		{
			include "views/base.php";
		}

		function shop()
		{
			sup();
			include "controllers/controllersProductos.php";
			$tabla=new controllersProductos();

			$r=$tabla->record;
			$r->listar();
			inf();
		}
	}

 ?>
