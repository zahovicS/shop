


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

		function resume()
		{
			sup();
			extract($_POST);
			echo "Agregaste al Carrito: ";
			echo "<hr />";
			echo "Producto: ".$producto."<br />";
			echo "Precio: S/ ".$precio."<br />";
			echo "Cantidad: ".$cantidad."<br />";
			echo "Total: S/ ".$precio*$cantidad;
			echo "<hr />";
			echo "Resumen de su Carrito de Compras:";
			inf();
		}
	}

 ?>
