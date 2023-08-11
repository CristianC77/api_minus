<?php
require_once 'database.php';

class Datos extends Database
{
    //-----------// Modelo Categoria//----------

    public function createcategoriaModel($datosModel, $tabla)
    {
        $stmt = Database::getConnection()->prepare("INSERT INTO $tabla (tipo_categoria) VALUES (:tipo_categoria)");
        $stmt->bindParam(":tipo_categoria", $datosModel["tipo_categoria"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function readcategoriaModel($tabla)
    {
        $stmt = Database::getConnection()->prepare("SELECT id_categoria, tipo_categoria FROM $tabla");
        $stmt->execute();
        $stmt->bindColumn("id_categoria", $id_categoria);
        $stmt->bindColumn("tipo_categoria", $tipo_categoria);

        $categoria = array();

        while ($fila = $stmt->fetch(PDO::FETCH_BOUND)) {
            $cate = array();
            $cate["id_categoria"] = utf8_encode($id_categoria);
            $cate["tipo_categoria"] = utf8_encode($tipo_categoria);

            array_push($categoria, $cate);
        }

        return $categoria;
    }

    public function updatecategoriaModel($datosModel, $tabla)
    {
        $stmt = Database::getConnection()->prepare("UPDATE $tabla SET tipo_categoria = :tipo_categoria WHERE id_categoria = :id_categoria");
        $stmt->bindParam(":tipo_categoria", $datosModel["tipo_categoria"], PDO::PARAM_STR);
        $stmt->bindParam(":id_categoria", $datosModel["id_categoria"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletecategoriaModel($id_categoria, $tabla)
    {
        $stmt = Database::getConnection()->prepare("DELETE FROM $tabla WHERE id_categoria = :id_categoria");
        $stmt->bindParam(":id_categoria", $id_categoria, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }




    //----------//ModeloPresentacion//----------------

    public function createPresentacionModel($datosModel, $tabla)
    {
        $stmt = Database::getConnection()->prepare("INSERT INTO $tabla (nom_presentacion) VALUES (:nom_presentacion)");
        $stmt->bindParam(":nom_presentacion", $datosModel["nom_presentacion"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function readPresentacionModel($tabla)
    {
        $stmt = Database::getConnection()->prepare("SELECT id_presentacion, nom_presentacion FROM $tabla");
        $stmt->execute();
        $stmt->bindColumn("id_presentacion", $id_presentacion);
        $stmt->bindColumn("nom_presentacion", $nom_presentacion);

        $Presentacion = array();

        while ($fila = $stmt->fetch(PDO::FETCH_BOUND)) {
            $present = array();
            $present["id_presentacion"] = utf8_encode($id_presentacion);
            $present["nom_presentacion"] = utf8_encode($nom_presentacion);

            array_push($Presentacion, $present);
        }

        return $Presentacion;
    }

    public function updatePresentacionModel($datosModel, $tabla)
    {
        $stmt = Database::getConnection()->prepare("UPDATE $tabla SET nom_presentacion = :nom_presentacion WHERE id_presentacion = :id_presentacion");
        $stmt->bindParam(":nom_presentacion", $datosModel["nom_presentacion"], PDO::PARAM_STR);
        $stmt->bindParam(":id_presentacion", $datosModel["id_presentacion"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePresentacionModel($id_presentacion, $tabla)
    {
        $stmt = Database::getConnection()->prepare("DELETE FROM $tabla WHERE id_presentacion = :id_presentacion");
        $stmt->bindParam(":id_presentacion", $id_presentacion, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //----------//Modelo Persona//----------------   debajo la parte de la tabla "PERSONA"
    
    public function createPersonaModel($datosModel, $tabla)
    {
        $stmt = Database::getConnection()->prepare("INSERT INTO $tabla (num_id, tipo_id, prim_nombre, segun_nombre, prim_apellido, segun_apellido, telefono,direccion, nom_usuario, contra_usuario) VALUES (:num_id, :tipo_id, :prim_nombre, :segun_nombre, :prim_apellido, :segun_apellido, :telefono, :direccion, :nom_usuario, :contra_usuario)");
        
        // $stmt->bindParam(":num_id, :tipo_id, :prim_nombre, :segun_nombre, :prim_apellido, :segun_apellido, :telefono, :direccion, :nom_usuario, :contra_usuario", $datosModel["num_id, tipo_id, prim_nombre, segun_nombre, prim_apellido, segun_apellido, telefono, direccion, nom_usuario, contra_usuario"], PDO::PARAM_STR);

        //POR SI NO FUNCIONA "Descomentar"
        $stmt->bindParam(":num_id", $datosModel["num_id"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_id", $datosModel["tipo_id"], PDO::PARAM_STR);
        $stmt->bindParam(":prim_nombre", $datosModel["prim_nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":segun_nombre", $datosModel["segun_nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":prim_apellido", $datosModel["prim_apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":segun_apellido", $datosModel["segun_apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":nom_usuario", $datosModel["nom_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":contra_usuario", $datosModel["contra_usuario"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function readPersonasModel($tabla)
    {
        $stmt = Database::getConnection()->prepare("SELECT num_id, tipo_id, prim_nombre, segun_nombre, prim_apellido, segun_apellido, telefono, direccion, nom_usuario, contra_usuario  FROM $tabla");
        $stmt->execute();
        $stmt->bindColumn("num_id", $num_id);
        $stmt->bindColumn("tipo_id", $tipo_id);
        $stmt->bindColumn("prim_nombre", $prim_nombre);
        $stmt->bindColumn("segun_nombre", $segun_nombre);
        $stmt->bindColumn("prim_apellido", $prim_apellido);
        $stmt->bindColumn("segun_apellido", $segun_apellido);
        $stmt->bindColumn("telefono", $telefono);
        $stmt->bindColumn("direccion", $direccion);
        $stmt->bindColumn("nom_usuario", $nom_usuario);
        $stmt->bindColumn("contra_usuario", $contra_usuario);

        $usuarios = array();

        while ($fila = $stmt->fetch(PDO::FETCH_BOUND)) {
            $user = array();
            $user["num_id"] = utf8_encode($num_id);
            $user["tipo_id"] = utf8_encode($tipo_id);
            $user["prim_nombre"] = utf8_encode($prim_nombre);
            $user["segun_nombre"] = utf8_encode($segun_nombre);
            $user["prim_apellido"] = utf8_encode($prim_apellido);
            $user["segun_apellido"] = utf8_encode($segun_apellido);
            $user["telefono"] = utf8_encode($telefono);
            $user["direccion"] = utf8_encode($direccion);
            $user["nom_usuario"] = utf8_encode($nom_usuario);
            $user["contra_usuario"] = utf8_encode($contra_usuario);

            array_push($usuarios, $user);
        }

        return $usuarios;
    }

    public function updatePersonaModel($datosModel, $tabla)
    {
        $stmt = Database::getConnection()->prepare("UPDATE $tabla SET tipo_id=:tipo_id, prim_nombre=:prim_nombre, segun_nombre=:segun_nombre, prim_apellido=:prim_apellido, segun_apellido=:segun_apellido, telefono=:telefono, direccion=:direccion, nom_usuario=:nom_usuario, contra_usuario=:contra_usuario WHERE num_id = :num_id");

        $stmt->bindParam(":tipo_id", $datosModel["Tipo_id"], PDO::PARAM_STR);
        $stmt->bindParam(":prim_nombre", $datosModel["prim_nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":segun_nombre", $datosModel["segun_nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":prim_apellido", $datosModel["prim_apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":segun_apellido", $datosModel["segun_apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":nom_usuario", $datosModel["nom_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":contra_usuario", $datosModel["contra_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":num_id", $datosModel["num_id"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePersonaModel($num_id, $tabla)
    {
        $stmt = Database::getConnection()->prepare("DELETE FROM $tabla WHERE num_id = :num_id");
        $stmt->bindParam(":num_id", $num_id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //----------//MODELO INGRESO//----------------   debajo la parte de la tabla INGRESO
    public function createIngresoModel($datosModel, $tabla)
    {
        $stmt = Database::getConnection()->prepare("INSERT INTO $tabla (fecha_ingreso, cant_producto ) VALUES (:fecha_ingreso, :cant_producto)");
        
        $stmt->bindParam(":fecha_ingreso", $datosModel["fecha_ingreso"], PDO::PARAM_STR);
        $stmt->bindParam(":cant_producto", $datosModel["cant_producto"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function readIngresoModel($tabla)
    {
        $stmt = Database::getConnection()->prepare("SELECT id_ingreso, fecha_ingreso, cant_producto FROM $tabla");
        $stmt->execute();
        $stmt->bindColumn("id_ingreso", $id_Ingreso);
        $stmt->bindColumn("fecha_ingreso", $fecha_ingreso);
        $stmt->bindColumn("cant_producto", $cant_producto);

        $ingreso = array();

        while ($fila = $stmt->fetch(PDO::FETCH_BOUND)) {
            $ingre = array();
            $ingre["id_Ingreso"] = utf8_encode($id_ingreso);
            $ingre["fecha_ingreso"] = utf8_encode($fecha_ingreso);
            $ingre["cant_producto"] = utf8_encode($cant_producto);

            array_push($ingreso, $ingre);
        }

        return $ingreso;
    }

    // public function updateIngresoModel($datosModel, $tabla)
    // {
    //     $stmt = Database::getConnection()->prepare("UPDATE $tabla SET fecha_ingreso = fecha_ingreso, cant_producto = :cant_producto");
    //     $stmt->bindParam(":fecha_ingreso", $datosModel["fecha_ingreso"], PDO::PARAM_STR);
    //     $stmt->bindParam(":cant_producto", $datosModel["cant_producto"], PDO::PARAM_INT);
    //     $stmt->bindParam(":id_Ingreso", $datosModel["id_Ingreso"], PDO::PARAM_INT);

    //     if ($stmt->execute()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function deleteIngresoModel($id_ingreso, $tabla)
    {
        $stmt = Database::getConnection()->prepare("DELETE FROM $tabla WHERE id_ingreso = :id_ingreso");
        $stmt->bindParam(":id_ingreso", $id_ingreso, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>

