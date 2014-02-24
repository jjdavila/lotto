<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/style.css">
 
        <title></title>
    </head>
    <body>
        
        <h2>Formulario de Registro</h2>
        <div class="group">
          <form action="registro.php" method="POST">
            <label for="nombre">Nombre completo<span>(requerido)</span></label>
            <input type="text" name="nombre" class="form-input" required/>
            
                <label for="cedula">Cédula o Pasaporte <span>(requerido)</span></label>
            <input type="text" name="cedula" class="form-input" required/>
            
              <label for="tel">Teléfono <span>(requerido)</span></label>
            <input type="text" name="tel" class="form-input" required/>

            <label for="email1">Correo electronico <span>(requerido)</span></label>
            <input type="email" name="email1" class="form-input" />
            
            <label for="email2">Verificar Correo electronico <span>(requerido)</span></label>
            <input type="email2" name="email2" class="form-input" />
            
            <label for="email3">Correo electronico alterno <span>(requerido)</span></label>
            <input type="email3" name="email3" class="form-input" />

            <label for="password">Contraseña <span>(requerido)</span></label>
            <input type="password" name="password" class="form-input" required/>
            
             <label for="password">Confirmar Contraseña <span>(requerido)</span></label>
            <input type="password" name="password" class="form-input" required/>

          
            <input class="form-btn" name="submit" type="submit" value="Registrarme!!" /> 
          </form>
        </div>
 
    </body>
</html>
