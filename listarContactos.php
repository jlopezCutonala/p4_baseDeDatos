<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table>';
             echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Apellido Paterno</th>';
                echo '<th>Apellido Materno</th>';
                echo '<th>Nombre</th>';
                echo '<th>Domicilio</th>';
                echo '<th>Colonia</th>';
                echo '<th>C&oacute;digo Postal</th>';
                echo '<th>Municipio</th>';
                echo '<th>Estado</th>';
                echo '<th>Pa&iacute;s</th>';
                echo '<th>Mapa</th>';
                echo '<th>Tel&eacute;fono</th>';
                echo '<th>Celular</th>';
                echo '<th>Radio</th>';
                echo '<th>Email</th>';
                echo '<th>Observaciones</th>';
                echo '<th>saved_at</th>';
                echo '<th>modified_in</th>';
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td>'.$contacto['id']. '</td>';
                    echo '<td>'.$contacto['ap'].'</td>';
                    echo '<td>'.$contacto['am'].'</td>';
                    echo '<td>'.$contacto['nombre'].'</td>';
                    echo '<td>'.$contacto['domicilio'].'</td>';
                    echo '<td>'.$contacto['colonia'].'</td>';
                    echo '<td>'.$contacto['cp'].'</td>';
                    echo '<td>'.$contacto['municipio'].'</td>';
                    echo '<td>'.$contacto['estado'].'</td>';
                    echo '<td>'.$contacto['pais'].'</td>';
                    echo '<td>'.$contacto['mapa'].'</td>';
                    echo '<td>'.$contacto['telefono'].'</td>';
                    echo '<td>'.$contacto['celular'].'</td>';
                    echo '<td>'.$contacto['radio'].'</td>';
                    echo '<td>'.$contacto['email'].'</td>';
                    echo '<td>'.$contacto['observaciones'].'</td>';
                    echo '<td>'.$contacto['saved_at'].'</td>';
                    echo '<td>'.$contacto['modified_in'].'</td>';
                echo '</tr>';
            }
        echo "</table>";
    }
}

?>
