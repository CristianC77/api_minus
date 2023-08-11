<?php
require_once 'modelojson.php';

class ControllerJson
{
    //----------//Controller Categoria//----------
    public function createcategoriaController($tipo_categoria)
    {
        $datosController = array(
            "tipo_categoria" => $tipo_categoria
        );
        $datos = new Datos();
        $respuesta = $datos->createcategoriaModel($datosController, "categorias");//"categorias"=Tabla de la DB
        return $respuesta;
    }

    public function readcategoriaController()
    {
        $datos = new Datos();
        $respuesta = $datos->readcategoriaModel("categorias");//"categorias"=Tabla en la DB
        return $respuesta;
    }

    public function updatecategoriaController($id_categoria, $tipo_categoria)
    {
        $datosController = array(
            "id_categoria" => $id_categoria,
            "tipo_categoria" => $tipo_categoria
        );
        $datos = new Datos();
        $respuesta = $datos->updatecategoriaModel($datosController, "categorias");//"categorias"=Tabla en la DB
        return $respuesta;
    }

    public function deletecategoriaController($id_categoria)
    {
        $datos = new Datos();
        $respuesta = $datos->deletecategoriaModel($id_categoria, "categorias");//"categorias"=Tabla en la DB
        return $respuesta;
    }


    //----------//Controller Presentacion//----------//

    public function createPresentacionController($nom_presentacion)
    {
        $datosController = array(
            "nom_presentacion" => $nom_presentacion
        );
        $datos = new Datos();
        $respuesta = $datos->createPresentacionModel($datosController, "presentacion");
        return $respuesta;
    }

    public function readPresentacionController()
    {
        $datos = new Datos();
        $respuesta = $datos->readPresentacionModel("presentacion");
        return $respuesta;
    }

    public function updatePresentacionController($id_presentacion, $nom_presentacion)
    {
        $datosController = array(
            "id_presentacion" => $id_presentacion,
            "nom_presentacion" => $nom_presentacion
        );
        $datos = new Datos();
        $respuesta = $datos->updatePresentacionModel($datosController, "presentacion");
        return $respuesta;
    }

    public function deletePresentacionController($id_presentacion)
    {
        $datos = new Datos();
        $respuesta = $datos->deletePresentacionModel($id_presentacion, "presentacion");
        return $respuesta; 
    }

    //----------//Controller Persona//----------    debajo de este titulo va la tabla persona
    
    public function createPersonaController($num_id, $tipo_id, $prim_nombre, $segun_nombre, $prim_apellido, $segun_apellido, $telefono, $direccion, $nom_usuario, $contra_usuario)
    {
        $datosController = array(
            "num_id" => $num_id,
            "tipo_id" => $tipo_id, 
            "prim_nombre" => $prim_nombre,
            "segun_nombre" => $segun_nombre,
            "prim_apellido" => $prim_apellido,
            "segun_apellido" => $segun_apellido,
            "telefono" => $telefono,
            "direccion" => $direccion,
            "nom_usuario" => $nom_usuario,
            "contra_usuario" => $contra_usuario
        );
        $datos = new Datos();
        $respuesta = $datos->createPersonaModel($datosController, "persona");//"PERSONA"=---NOMBRE DE LA TABLA Y SE DEBE CAMBIAR A LA DEL PROYECTO--
        return $respuesta;
    }

    public function readPersonasController()
    {
        $datos = new Datos();
        $respuesta = $datos->readPersonasModel("persona");//"PERSONA"=---NOMBRE DE LA TABLA Y SE DEBE CAMBIAR A LA DEL PROYECTO--
        return $respuesta;
    }

    public function updatePersonaController($num_id, $tipo_id, $prim_nombre, $segun_nombre, $prim_apellido, $segun_apellido, $telefono, $direccion, $nom_usuario, $contra_usuario)//, $username, $password, $secretpin)
    {
        $datosController = array(
            "num_id" => $num_id,
            "tipo_id" => $tipo_id, 
            "prim_nombre" => $prim_nombre,
            "segun_nombre" => $segun_nombre,
            "prim_apellido" => $prim_apellido,
            "segun_apellido" => $segun_apellido,
            "telefono" => $telefono,
            "direccion" => $direccion,
            "nom_usuario" => $nom_usuario,
            "contra_usuario" => $contra_usuario
        );
        $datos = new Datos();
        $respuesta = $datos->updatePersonaModel($datosController, "persona");//"PERSONA"=---NOMBRE DE LA TABLA Y SE DEBE CAMBIAR A LA DEL PROYECTO--
        return $respuesta;
    }

    public function deletePersonaController($num_id)
    {
        $datos = new Datos();
        $respuesta = $datos->deletePersonaModel($num_id, "persona");//"PERSONA"=---NOMBRE DE LA TABLA Y SE DEBE CAMBIAR A LA DEL PROYECTO--
        return $respuesta;
    }
    
    //----------//CONTROLLER INGRESO//----------    debajo de este titulo va la tabla INGRESO
    
    public function createIngresoController($fecha_ingreso, $cant_producto)
    {
        $datosController = array(
            "fecha_ingreso" => $fecha_ingreso,
            "cant_producto" => $cant_producto
        );
        $datos = new Datos();
        $respuesta = $datos->createIngresoModel($datosController, "ingreso");
        return $respuesta;
    }    

    public function readIngresoController()
    {
        $datos = new Datos();
        $respuesta = $datos->readIngresoModel("ingreso");
        return $respuesta;
    }

    // public function updateIngresoController($id_ingreso, $fecha_ingreso, $cant_producto)
    // {
    //     $datosController = array(
    //         "id_ingreso" => $id_ingreso,
    //         "fecha_ingreso" => $fecha_ingreso,
    //         "cant_producto" => $cant_producto
    //     );
    //     $datos = new Datos();
    //     $respuesta = $datos->updateIngresoModel($datosController, "ingreso");
    //     return $respuesta;
    // }

    public function deleteIngresoController($id_ingreso)
    {
        $datos = new Datos();
        $respuesta = $datos->deleteIngresoModel($id_ingreso, "ingreso");
        return $respuesta;
    }
}
?>
