<?php
require_once 'conexion.php';
class UsuarioModel {
    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    public function registrarUsuario($nombre, $apellido, $telefono, $correo, $curp, $password) {
        try {
            $stmt = $this->db->prepare("INSERT INTO Cliente (Nombre, Apellido, Telefono, Correo, CURP, Password) VALUES (?, ?, ?, ?, ?, ?)");
            return $stmt->execute([$nombre, $apellido, $telefono, $correo, $curp, $password]);
        } catch (PDOException $e) {
            echo "Error al registrar usuario: " . $e->getMessage();
            return false;
        }
    }

    public function autenticarUsuario($correo, $password) {
        try {
            $stmt = $this->db->prepare("SELECT Id_Cliente, Nombre, Rol FROM Cliente WHERE Correo = ? AND Password = ?");
            $stmt->execute([$correo, $password]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            
            error_log("Intento de autenticación para correo: " . $correo);
            if ($usuario) {
                error_log("Usuario encontrado: " . print_r($usuario, true));
            } else {
                error_log("Usuario no encontrado");
                $checkEmail = $this->db->prepare("SELECT COUNT(*) FROM Cliente WHERE Correo = ?");
                $checkEmail->execute([$correo]);
                $emailExists = $checkEmail->fetchColumn();
                error_log("¿El correo existe? " . ($emailExists ? 'Sí' : 'No'));
            }
            
            return $usuario ? $usuario : false;
        } catch (PDOException $e) {
            error_log("Error en autenticación: " . $e->getMessage());
            return false;
        }
    }
}
?>
