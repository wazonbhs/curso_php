<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(function() {
          //$("#exampleInputEmail1").keyup(filtrar)
          //$("#exampleInputPassword1").keyup(filtrar)
          $("#btn_1").click(filtrar)
      });

      function filtrar()
      { 
        $.ajax({
          data: $("#frm_filtro").serialize(),
          type: "POST",
          dataType: "html",
          url: "ejemplo_ajax.php",
          beforeSend: function(){
                                //imagen de carga
                                $("#resultado").html("<img src='loader1.gif' width='60' height='60' />");
                          },
             /* error: function(){
                                alert("error petición ajax");
                    return false;
                          },*/
          success: function(data){
                                                                    
                                $("#resultado").empty();
                                $("#resultado").html(data);
            }
          });
      }
    </script>

    <title>Ejercicio 6</title>
  </head>
  <body>

    <form id="frm_filtro">
      <div class="form-group">
        <label for="valor_1">Valor 1</label>
        <input type="text" class="form-control" id="valor_1" name="valor_1">
        
      </div>
      

      <div class="form-group">
        <label for="valor_2">Valor 2</label>
        <input type="text" class="form-control" id="valor_2" name="valor_2">
      </div>
      
      <button type="button" class="btn btn-primary" id="btn_1">Submit</button>
    </form>

    <div id="resultado"></div>

  </body>
</html>