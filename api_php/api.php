<?php
require_once 'controllerjson.php';
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

$apicall = isset($_GET['apicall']) ? $_GET['apicall'] : '';

switch ($apicall) {

  //http://localhost/api_php/api.php?apicall=readcategoria
  case 'readcategoria':
    $db = new ControllerJson();
    $response = array(
      'error' => false,
      'message' => 'Solicitud completada correctamente',
      'contenido' => $db->readcategoriaController(),
    );
    break;

  //http://localhost/api_php/api.php?apicall=createcategoria + body (Json)
  case 'createcategoria':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json, true);

      if ($data === null) {
        $response = array(
          'error' => true,
          'message' => 'Error en el contenido JSON',
        );
      } else {
        $tipo_categoria = $data['tipo_categoria'];

        $db = new ControllerJson();
        $result = $db->createcategoriaController($tipo_categoria);

        if ($result) {
          $response = array(
            'error' => false,
            'message' => 'Categoria agregada correctamente',
            'contenido' => $db->readcategoriaController(),
          );
        } else {
          $response = array(
            'error' => true,
            'message' => 'Ocurrió un error, intenta nuevamente',
          );
        }
      }
    } else {
      $response = array(
        'error' => true,
        'message' => 'Método de solicitud no válido',
      );
    }
    break;

  //http://localhost/api_php/api.php?apicall=updatecategoria + body (Json)
  case 'updatecategoria':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json, true);

      if ($data === null) {
        $response = array(
          'error' => true,
          'message' => 'Error en el contenido JSON',
        );
      } else {
        $id_categoria = $data['id_categoria'];
        $tipo_categoria = $data['tipo_categoria'];

        $db = new ControllerJson();
        $result = $db->updatecategoriaController($id_categoria, $tipo_categoria);

        if ($result) {
          $response = array(
            'error' => false,
            'message' => 'Categoria actualizada correctamente',
            'contenido' => $db->readcategoriaController(),
          );
        } else {
          $response = array(
            'error' => true,
            'message' => 'Ocurrió un error al actualizar el usuario',
          );
        }
      }
    } else {
      $response = array(
        'error' => true,
        'message' => 'Método de solicitud no válido',
      );
    }
    break;

  //http://localhost/api_php/api.php?apicall=deletecategoria + body (Json)
  case 'deletecategoria':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json, true);

      if ($data === null) {
        $response = array(
          'error' => true,
          'message' => 'Error en el contenido JSON',
        );
      } else {
        $id_categoria = $data['id_categoria'];

        $db = new ControllerJson();
        $result = $db->deletecategoriaController($id_categoria);

        if ($result) {
          $response = array(
            'error' => false,
            'message' => 'Categoria eliminado correctamente',
            'contenido' => $db->readcategoriaController(),
          );
        } else {
          $response = array(
            'error' => true,
            'message' => 'Ocurrió un error al eliminar la categoria',
          );
        }
      }
    } else {
      $response = array(
        'error' => true,
        'message' => 'Método de solicitud no válido',
      );
    }
    break;



  //------PARTE DE PRESENTACION--------
      
    
  //http://localhost/api_php/api.php?apicall=readpresentacion
  case 'readpresentacion':
    $db = new ControllerJson();
    $response = array(
      'error' => false,
      'message' => 'Solicitud completada correctamente',
      'contenido' => $db->readPresentacionController(),
    );
    break;

  //http://localhost/api_php/api.php?apicall=createpresentacion + body (Json)
  case 'createpresentacion':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json, true);

      if ($data === null) {
        $response = array(
          'error' => true,
          'message' => 'Error en el contenido JSON',
        );
      } else {
        $nom_presentacion = $data['nom_presentacion'];

        $db = new ControllerJson();
        $result = $db->createPresentacionController($nom_presentacion);

        if ($result) {
          $response = array(
            'error' => false,
            'message' => 'Presentación agregada correctamente',
            'contenido' => $db->readPresentacionController(),
          );
        } else {
          $response = array(
            'error' => true,
            'message' => 'Ocurrió un error, intenta nuevamente',
          );
        }
      }
    } else {
      $response = array(
        'error' => true,
        'message' => 'Método de solicitud no válido',
      );
    }
    break;

  //http://localhost/api_php/api.php?apicall=updatepresentacion + body (Json)
  case 'updatepresentacion':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json, true);

      if ($data === null) {
        $response = array(
          'error' => true,
          'message' => 'Error en el contenido JSON',
        );
      } else {
        $id_presentacion = $data['id_presentacion'];
        $nom_presentacion = $data['nom_presentacion'];

        $db = new ControllerJson();
        $result = $db->updatePresentacionController($id_presentacion, $nom_presentacion);

        if ($result) {
          $response = array(
            'error' => false,
            'message' => 'Presentación actualizada correctamente',
            'contenido' => $db->readPresentacionController(),
          );
        } else {
          $response = array(
            'error' => true,
            'message' => 'Ocurrió un error al actualizar la presentación',
          );
        }
      }
    } else {
      $response = array(
        'error' => true,
        'message' => 'Método de solicitud no válido',
      );
    }
    break;

  //http://localhost/api_php/api.php?apicall=deletepresentacion + body (Json)
  case 'deletepresentacion':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json, true);

      if ($data === null) {
        $response = array(
          'error' => true,
          'message' => 'Error en el contenido JSON',
        );
      } else {
        $id_presentacion = $data['id_presentacion'];

        $db = new ControllerJson();
        $result = $db->deletePresentacionController($id_presentacion);

        if ($result) {
          $response = array(
            'error' => false,
            'message' => 'Presentación eliminada correctamente',
            'contenido' => $db->readPresentacionController(),
          );
        } else {
          $response = array(
            'error' => true,
            'message' => 'Ocurrió un error al eliminar la presentación',
          );
        }
      }
    } else {
      $response = array(
        'error' => true,
        'message' => 'Método de solicitud no válido',
      );
    }
    break;


  //------PARTE DE PERSONA--------  debajo va el codigo de la tabla


  //http://localhost/api_php/api.php?apicall=readpersona
  case 'readpersona':
    $db = new ControllerJson();
    $response = array(
      'error' => false,
      'message' => 'Solicitud completada correctamente',
      'contenido' => $db->readPersonasController(),
    );
    break;

  //http://localhost/api_php/api.php?apicall=createpersona + body (Json)
  case 'createpersona':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json, true);

      if ($data === null) {
        $response = array(
          'error' => true,
          'message' => 'Error en el contenido JSON',
        );
      } else {
        $num_id=$data['num_id'];
        $tipo_id=$data['tipo_id']; 
        $prim_nombre=$data['prim_nombre'];
        $segun_nombre=$data['segun_nombre'];
        $prim_apellido=$data['prim_apellido'];
        $segun_apellido=$data['segun_apellido'];
        $telefono=$data['telefono'];
        $direccion=$data['direccion'];
        $nom_usuario=$data['nom_usuario'];
        $contra_usuario=$data['contra_usuario'];

        $db = new ControllerJson();
        $result = $db->createPersonaController($num_id,$tipo_id,$prim_nombre,$segun_nombre,$prim_apellido,$segun_apellido,$telefono,$direccion,$nom_usuario,$contra_usuario);

        if ($result) {
          $response = array(
            'error' => false,
            'message' => 'Usuario agregado correctamente',
            'contenido' => $db->readPersonasController(),
          );
        } else {
          $response = array(
            'error' => true,
            'message' => 'Ocurrió un error, intenta nuevamente',
          );
        }
      }
    } else {
      $response = array(
        'error' => true,
        'message' => 'Método de solicitud no válido',
      );
    }
    break;
  //http://localhost/api_php/api.php?apicall=updatepersona + body (Json)
  case 'updatepersona':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json, true);

      if ($data === null) {
        $response = array(
          'error' => true,
          'message' => 'Error en el contenido JSON',
        );
      } else {
        $num_id=$data['num_id'];
        $tipo_id=$data['tipo_id']; 
        $prim_nombre=$data['prim_nombre'];
        $segun_nombre=$data['segun_nombre'];
        $prim_apellido=$data['prim_apellido'];
        $segun_apellido=$data['segun_apellido'];
        $telefono=$data['telefono'];
        $direccion=$data['direccion'];
        $nom_usuario=$data['nom_usuario'];
        $contra_usuario=$data['contra_usuario'];

        $db = new ControllerJson();
        $result = $db->updatePersonaController($num_id,$tipo_id,$prim_nombre,$segun_nombre,$prim_apellido,$segun_apellido,$telefono,$direccion,$nom_usuario,$contra_usuario);

        if ($result) {
          $response = array(
            'error' => false,
            'message' => 'Persona actualizada correctamente',
            'contenido' => $db->readPersonasController(),
          );
        } else {
          $response = array(
            'error' => true,
            'message' => 'Ocurrió un error al actualizar el usuario',
          );
        }
      }
    } else {
      $response = array(
        'error' => true,
        'message' => 'Método de solicitud no válido',
      );
    }
    break;
  //http://localhost/api_php/api.php?apicall=deletepersona + body (Json)
  case 'deletepersona':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json, true);

      if ($data === null) {
        $response = array(
          'error' => true,
          'message' => 'Error en el contenido JSON',
        );
      } else {
        $num_id = $data['num_id'];

        $db = new ControllerJson();
        $result = $db->deletePersonaController($num_id);

        if ($result) {
          $response = array(
            'error' => false,
            'message' => 'Persona eliminada correctamente',
            'contenido' => $db->readPersonasController(),
          );
        } else {
          $response = array(
            'error' => true,
            'message' => 'Ocurrió un error al eliminar la persona',
          );
        }
      }
    } else {
      $response = array(
        'error' => true,
        'message' => 'Método de solicitud no válido',
      );
    }
    break;

  //------PARTE DE INGRESO--------  debajo va el codigo de la tabla

  //http://localhost/api_php/api_php/api.php?apicall=readingreso
  case 'readingreso':
    $db = new ControllerJson();
    $response = array(
      'error' => false,
      'message' => 'Solicitud completada correctamente',
      'contenido' => $db->readIngresoController(),
    );
    break;
 
  //http://localhost/api_php/api.php?apicall=createingreso + body (Json)
  case 'createingreso':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json, true);

      if ($data === null) {
        $response = array(
          'error' => true,
          'message' => 'Error en el contenido JSON',
        );
      } else {
        $fecha_ingreso = $data['fecha_ingreso'];
        $cant_producto = $data['cant_producto'];

        $db = new ControllerJson();
        $result = $db->createIngresoController($fecha_ingreso, $cant_producto);

        if ($result) {
          $response = array(
            'error' => false,
            'message' => 'Ingreso agregado correctamente',
            'contenido' => $db->readIngresoController(),
          );
        } else {
          $response = array(
            'error' => true,
            'message' => 'Ocurrió un error, intenta nuevamente',
          );
        }
      }
    } else {
      $response = array(
        'error' => true,
        'message' => 'Método de solicitud no válido',
      );
    }
    break;
    
     //---------EN CASO DE ACTUALIZAR LOS INGRESOS DESCOMENTAR------------
  // //http://localhost/api_php/api.php?apicall=updateingreso + body (Json)
  // case 'updateingreso':
  //   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //     $json = file_get_contents('php://input');
  //     $data = json_decode($json, true);

  //     if ($data === null) {
  //       $response = array(
  //         'error' => true,
  //         'message' => 'Error en el contenido JSON',
  //       );
  //     } else {
  //       $id_ingreso = $data['id_ingreso'];
  //       $fecha_ingreso = $data['fecha_ingreso'];
  //       $cant_producto = $data['cant_producto'];

  //       $db = new ControllerJson();
  //       $result = $db->updateIngresoController($id_ingreso, $fecha_ingreso, $cant_producto);

  //       if ($result) {
  //         $response = array(
  //           'error' => false,
  //           'message' => 'ingreso actualizado correctamente',
  //           'contenido' => $db->readIngresoController(),
  //         );
  //       } else {
  //         $response = array(
  //           'error' => true,
  //           'message' => 'Ocurrió un error al actualizar el ingreso',
  //         );
  //       }
  //     }
  //   } else {
  //     $response = array(
  //       'error' => true,
  //       'message' => 'Método de solicitud no válido',
  //     );
  //   }
  //   break;
    
  //http://localhost/api_php/api.php?apicall=deleteingreso + body (Json)
  case 'deleteingreso':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json, true);

      if ($data === null) {
        $response = array(
          'error' => true,
          'message' => 'Error en el contenido JSON',
        );
      } else {
        $id_ingreso = $data['id_ingreso'];

        $db = new ControllerJson();
        $result = $db->deleteIngresoController($id_ingreso);

        if ($result) {
          $response = array(
            'error' => false,
            'message' => 'Ingreso eliminado correctamente',
            'contenido' => $db->readIngresoController(),
          );
        } else {
          $response = array(
            'error' => true,
            'message' => 'Ocurrió un error al eliminar el ingreso',
          );
        }
      }
    } else {
      $response = array(
        'error' => true,
        'message' => 'Método de solicitud no válido',
      );
    }
    break;


  default:
    $response = array(
      'error' => true,
      'message' => 'Llamado Inválido del API',
    );
    break;
}

echo json_encode($response);
?>
