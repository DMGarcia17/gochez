<?php
if($_SERVER['REQUEST_URI'] == '/carrusel/administrador/categories.php'){
    header('location: ../');
}
        require_once('../core/proc.php');
        $db = new procedimientos();
?>
<div class="container">
    <h1>Categorias</h1>
    <div class="list-group">
        <?php
        $res = $db->blankect_query("categorias", "*");
        foreach($res as $r){
            echo "<btn class='list-group-item list-group-item-action' onclick='list(\"{$r['id_cat']}\", \"{$r['categoria']}\")'>{$r['categoria']}</btn>";
        }
        ?>
    </div>
    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#nLista"><i class="fas fa-plus-square"></i> Agregar nueva categor&iacute;a</button>
     <?php
       if(isset($_GET['err'])){
           switch($_GET['err']){
               case 0:
                   echo "<div class=\"alert alert-success\" role=\"alert\">
                                            Acci&oacute;n realizada con exito
                                </div>";
                   break;
                   case 1:
                   echo "<div class=\"alert alert-danger\" role=\"alert\">
                                            La operaci&oacute;n no pudo realizarse.
                                </div>";
                   break;
           }
       }
       ?>
</div>

<div class="modal fade" id="lista" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Opciones de texto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="procedimientos/categories.php?opt=1" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id_cat" id="id_cat" class="form-control" required>
                    <label for="cat">Texto Actual:</label>
                    <input type="text" name="cat" maxlength="60" id="cat" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-success" type="submit">Guardar nuevo texto</button>
                    <a class="btn btn-danger" id="del">Eliminar categoria</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="nLista" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Agregar nueva categor&iacute;a</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="procedimientos/categories.php?opt=0" method="post">
                <div class="modal-body">
                    <label for="cat">Texto:</label>
                    <input type="text" name="cat" maxlength="60" id="cat" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-success" type="submit">Guardar nuevo texto</button>
                </div>
            </form>
        </div>
    </div>
</div>
