
<?php 
	class modelProductos
	{
		/*ACTIVE RECORD*/
		public $precio;
		public $nombre;

		private $conexion;


		function __construct(){
			include "setting/connect.php";
			$objDB=new connect();
			$this->conexion=$objDB->conexion;
		}

		function listar()
		{
			$q="select nombre,precio from productos";
			$c=$this->conexion;

			$resultado=$c->query($q);

			while($campos=$resultado->fetch_assoc())
			{
				echo <<<HTML
				<div class="productos__item">
				<figure class="productos__imagen">
					<img src="views/images/pro.png" />
				</figure>
				<p class="productos__nombre">{$campos["nombre"]}</p>
				
				<p class="productos__precio">
					<label>{$campos["precio"]}</label>
					<input type="number" min="1" name="" class="productos__cantidad">
				</p>
				<a href="#" class="productos__add">Agregar</a>
				</div>
HTML;
}

		}


	}

 ?>