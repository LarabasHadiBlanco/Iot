<?php
$jsonData = isset($_POST['json']) ? $_POST['json'] : '';

if (!empty($jsonData)) {
  $archivo = fopen('datos_iot.json', 'w');
  if ($archivo) {
    fwrite($archivo, $jsonData);
    fclose($archivo);
    chmod('datos_iot.json', 0777); // Establecer los permisos a 0777
    echo 'Datos guardados exitosamente.';
  } else {
    echo 'Error al abrir el archivo.';
  }
} else {
  echo 'No se recibieron datos.';
}
?>
