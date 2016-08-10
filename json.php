<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Parsear o leer JSON con jQuery - EjemploCodigo</title>
	
</head>


<body>
    
    
<?php 

$server = "localhost";
$user = "matius";
$pass = "matius78";
$bd = "dbseguridadsocial";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT * FROM tblusuarios";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$usuarios = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{
    $strIdEmpresa = $row['strIdEmpresa'];
    $strIdUsuario = $row['strIdUsuario'];
    $strApellido1 = $row['strApellido1'];
    $strApellido2 = $row['strApellido2'];
    $strNombres = $row['strNombres'];
    $strAFP = $row['strAFP'];
    $strEPS = $row['strEPS'];
    $strARP = $row['strARP'];
    $strCCF = $row['strCCF'];
    $strClave = $row['strClave'];
    $intSalarioBase = $row['intSalarioBase'];
    $intValorAPagar = $row['intValorAPagar'];
    $intDiaLimitePago = $row['intDiaLimitePago'];
    $strOperador = $row['strOperador'];
    $intTelefono = $row['intTelefono'];
    
    /*$usuarios[] = array('strIdEmpresa' => $strIdEmpresa,'strIdUsuario' => $strIdUsuario,'strApellido1' => $strApellido1,
                        'strApellido2' => $strApellido2,'strNombres' => $strNombres,'strAFP' => $strAFP,'strEPS' => $strEPS,
                        'strEPS' => $strEPS,'$strARP' => $$strARP,'strCCF' => $strCCF,'strClave' => $strClave,
                        'intSalarioBase' => $intSalarioBase,'intValorAPagar' => $intValorAPagar,'intDiaLimitePago' => $intDiaLimitePago,
                        'strOperador' => $strOperador,'intTelefono' => $intTelefono);*/
     $usuarios[] = array('strIdEmpresa' => $strIdEmpresa
    
}

    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/
    

?>
    
    </body>
</html>