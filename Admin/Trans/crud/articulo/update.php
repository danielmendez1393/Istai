<?php 
    session_start();
    require_once("../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objArt = new articulos;
    $UpArt = $objArt->readall($_POST['SubArtid']);
 ?>
<div >
              <h3></h3>
                  <form class="form" target="upd"  method="POST"  action="<?=$CONFIG['pathtrans']?>Artmodificar.php">
                        <input type="hidden" name="art_id" value="<?=$UpArt['id_art']?>">
                    

                    <div class="input-field col s12">      
                          <select name="fkley" >
                             <option value="<?=$UpArt['fk_idleyes_art']?>" ><?=$UpArt['tipo']?></option>
                          </select>
                          <label>Tipo de Ley</label>
                        </div>                                              

                        <div class="input-field col s12">
                          <input name="idarticulo"  type="number" class="validate" value="<?=$UpArt['num_art']?>" required >
                          <label for="idarticulo">Numero de Articulo</label>
                        </div> 

                        <div class="input-field col s12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="artdesc" length="120" required><?=$UpArt['descripcion']?></textarea>
                            <label for="icon_prefix2">Descripcion del Articulo</label>
                        </div> 

                        <div align="center" class="col l12" style="align-items: center;">
                            <!--input type="submit" value="Enviar" class="form-button" /-->
                            <button class="btn waves-effect waves-light col l12" type="submit" name="Submitmodificar" >Enviar
                                <i class="material-icons "></i>
                              </button>
                        </div>
                </form>

                            <iframe name="upd" height="0" width="0" ></iframe>
            </div>


