<?php
class Conexion
{
    public $mysqli;
    private $error;

    public function conectar()
    {
        try
        {
            $this->mysqli = new mysqli("localhost", "root", "s3guR0.", "directorio");
            if ($this->mysqli->connect_errno) {
                throw new Exception("Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error);
            }
            return true;
        }
        catch(Exception $e)
        {
            $this->error = $e->getMessage();
            return false;
        }
    }

    public function informacionDelHost()
    {
        echo $this->mysqli->host_info . "\n";
    }

    public function getError()
    {
        return $this->error;
    }

    public function cerrar()
    {
        $this->mysqli->close();
    }
}
?>
