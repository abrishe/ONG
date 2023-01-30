<?php


// // LLAMADA DE OBJETO
// $Persona = new ClassPersona($autor, $fecha, $adjuntar, $titulo, $textArticle);
class ClassArticle 

{



	protected $autor;
	protected $apellido;
	protected $fecha;
	protected $adjuntar;
	protected $titulo;
	protected $subtitulo;
	protected $textArticle;
	
	public function __construct($autor,$apellido, $fecha, $adjuntar, $titulo, $textArticle,$subtitulo)
	{
		$this->setAutor($autor);
		$this->setApellido($apellido);
		$this->setFecha($fecha);
		$this->setAdjuntar($adjuntar);
		$this->setTitulo($titulo);
		$this->setSubtitulo($subtitulo);
		$this->setTextArticle($textArticle);
	}

	// function QueryDataBase(){
	// 	$query = "SELECT * FROM articulo";
	// 	$Resultado_consulta = mysqli_query($this->connection,$query);
	// 	while($consulta = mysqli_fetch_array($Resultado_consulta)){
			
	// 		$conexionData->$consulta['autor'] = getAutor();
	// 		$conexionData->$consulta['apellido'] = getApellido();
	// 		$conexionData->$consulta['fecha'] = getFecha();
	// 		$conexionData->$consulta['titulo'] = getTitulo();
	// 		$conexionData->$consulta['subtitulo'] = getSubtitulo();
	// 		$conexionData->$consulta['textArticle'] = getTextArticle();
	// 	}
	// 	}	

	public function setTextArticle($textArticle)
	{
		$this->textArticle = $textArticle;
	}

	public function getTextArticle()
	{
		return $this->textArticle;
	}


	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
	}

	public function getFecha()
	{
		return $this->fecha;
	}



	public function setAdjuntar($adjuntar)
	{
		$this->adjuntar = $adjuntar;
	}

	public function getAdjuntar()
	{
		return $this->adjuntar;
	}



	public function setAutor($autor)
	{
		$this->autor = $autor;
	}

	public function getAutor()
	{
		return $this->autor;
	}


	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}

	public function getApellido()
	{
		return $this->apellido;
	}



	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;
	}

	public function getTitulo()
	{
		return $this->titulo;
	}


	public function setSubtitulo($subtitulo)
	{
		$this->subtitulo = $subtitulo;
	}

	public function getSubtitulo()
	{
		return $this->subtitulo;
	}

	public function  getMostrarDatos()
	{

		echo "Name: ->" . $this->autor . "<br>";
		echo "Name: ->" . $this->apellido . "<br>";
		echo "Last name: ->" . $this->fecha . "<br>";
		echo "I am: -> " . $this->adjuntar . "<br>";
		echo "Nif: -> " . $this->titulo . "<br>";
		echo "Nif: -> " . $this->subtitulo . "<br>";
		echo "Precio Matricula: -> " . $this->textArticle . "<br>";
	}

}
