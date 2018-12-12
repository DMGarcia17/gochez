<?php
if($_SERVER['REQUEST_URI'] == '/carrusel/administrador/inicio.php'){
    header('location: ../');
}
?>
   <div style="margin: 30px;">
    <h3>
        Imagenes del Carrusel (Slider)
        <br>
        <small>
            <small>El formato requerido para las imagenes es JPG. El tama&ntilde;o recomendado es 1920x903 px.</small>
        </small>
    </h3>

    <table class="table-hover mx-auto" id="tabla">
        <?php
        require_once('../core/proc.php');
        $db = new procedimientos();
        $res = $db->blankect_query("img_sli", "*");
        foreach($res as $r){
            echo "<tr>
                            <td><img src='../{$r['img']}' style='max-width: 400px;' class='img-fluid'></td>
                            <td><button class='btn btn-primary' onclick='mod(\"{$r['id_ima']}\", \"{$r['img']}\")'><i class='fas fa-cog'></i></button></td>
                            <td><button class='btn btn-danger' onclick='del(\"{$r['id_ima']}\", \"{$r['img']}\")'><i class='far fa-trash-alt'></i></button></td>
                        </tr>";
        }
        ?>
    </table>
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
                                            Elija una imagen con una extensi&oacute;n valida. La extensi&oacute;n requerida es JPG.
                                </div>";
                   break;
                   case 2:
                   echo "<div class=\"alert alert-danger\" role=\"alert\">
                                            Acci&oacute;n no realizada. Intente de nuevo.
                                </div>";
                   break;
           }
       }
       ?>
       
</div>
<div style="">
    <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modificar imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="procedimientos/slider.php?opt=2" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="id_img2" id="id_img2" class="form-control" readonly>
                        <label for="img_route2">Ruta de la imagen:</label>
                        <input type="text" name="img_rut2" id="img_rut2" class="form-control" readonly>
                        <label for="sliderMod">Nueva Imagen</label>
                        <input type="file" name="sliderMod" id="sliderMod" required class="form-control" accept="image/jpeg">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-success" type="submit">Guardar nueva imagen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div style="">
    <div class="modal fade" id="addN" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Subir nueva imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="procedimientos/slider.php?opt=1" method="post" enctype="multipart/form-data">
                        <label for="slider"><input type="file" id="slider" name="slider" class="form-control" accept="image/jpeg" required></label>
                        <button class="btn btn-primary" type="submit">Guardar nueva fotograf&iacute;a</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="">
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">¿Esta seguro de que quiere eliminar esta imagen?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="procedimientos/slider.php?opt=3" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="id_img" id="id_img" class="form-control" readonly>
                        <label for="img_route">Ruta de la imagen:</label><input type="text" name="img_rut" id="img_rut" class="form-control" readonly>
                        <img src="" class="img-fluid" id="img_prev">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-danger" type="submit">Eliminar imagen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        if (screen.width < 720) {
            $("#tabla").addClass("table-responsive");
        }
    });

</script>
