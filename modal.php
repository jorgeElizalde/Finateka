<!DOCTYPE html>
<html lang="es">
    <head>
        <meta>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Finantek</title>
        <link rel="icon" type="image/png" href="http://www.finanteka.com/wp-content/uploads/2019/03/Favicon.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/modal.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./js/validar.js">
    </head>
    <body>
<form class="contact100-form validate-form" method="POST" onsubmit="return valida();" >
  <div class="modal fade" id="dataContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modalbox" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title-center" id="exampleModalLongTitle">
        <br>Me interesa participar</h5>
      </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <label  class="control-label">Nombre's:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" >
            </div>
            <div class="col">
              <label  class="control-label">Apellidos:</label>
              <input type="text" class="form-control" id="apellido" name="apellido"  maxlength="45">
            </div>
          </div>
        <div class="col">
              <label  class="control-label">Email:</label>
              <input type="email" class="form-control" id="correo" name="correo"  >
        </div>
        <div class="row">
          <div class="col">
            <label class="control-label">Numero de contacto:</label>
            <input type="number" class="form-control" id="contacto" name="contacto"  maxlength="30"> 
          </div>
          <div class="col">
            <label  class="control-label">Me intereza:</label>
            <select>
              <option value="invertir">Invertir</option>
              <option value="prestamo">Prestamo</option>
            </select>
          </div>
        </div>
        <div class="col">
              <label  class="control-label">Mensaje:</label>
              <textarea class="form-control"  id="mensaje" name="mensaje" rows="3"></textarea>
            </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Enviar datos</button>
        </div>
      </div>
    </div>
  </div>
  </form>
</body>
</html>