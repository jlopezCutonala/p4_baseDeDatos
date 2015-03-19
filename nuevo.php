<html>
    <body>
        <div>
            <h1>Nuevo contacto</h1>
            <form action="guardar.php" method="POST">
                <label for="nombre">Nombre</label></br>
                <input type="text" maxlength="100" name="nombre" id="nombre">
                </br>
                </br>
                <label for="ap">Ap</label></br>
                <input type="text" maxlength="100" name="ap" id="ap">
                </br>
                </br>
                <label for="am">Am</label></br>
                <input type="text" maxlength="100" name="am" id="am">
                </br>
                </br>
                <label for="domicilio">Domicilio</label></br>
                <input type="text" maxlength="256" name="domicilio" id="domicilio">
                </br>
                </br>
                <label for="colonia">Colonia</label></br>
                <input type="text" maxlength="256" name="colonia" id="colonia">
                </br>
                </br>
                <label for="cp">CP</label></br>
                <input type="text" maxlength="10" name="cp" id="cp">
                </br>
                </br>
                <label for="municipio">Municipio</label></br>
                <input type="text" maxlength="100" name="municipio" id="municipio">
                </br>
                </br>
                <label for="estado">Estado</label></br>
                <input type="text" maxlength="10" name="estado" id="estado">
                </br>
                </br>
                <label for="pais">Pais</label></br>
                <input type="text" maxlength="100" name="pais" id="pais">
                </br>
                </br>
                <label for="observaciones">Observaciones</label></br>
                <textarea name="observaciones"></textarea>
                </br>
                </br>
                <input type="submit" name="enviar" Value="Entrar">
            </form>
        </div>
    </body>
</html>
