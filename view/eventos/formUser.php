<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>

<div class="container container-fluid">
    <div class="mainbox  col-sm-8 col-sm-offset-2 ">
        <h1 class="page-header"><span class="bg-steps">1 </span> <span> Detalle Del Evento</span></h1>  
        <div class="col-xs-12 ">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::NOMBRE, true) ?>">Nombre Del Evento <span>*</span><?php echo i18n::__('nombre') ?></label>		
                <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::NOMBRE, true) ?>" placeholder="Dale Un nombre Unico E Inconfundible" required autofocus>
            </div>
        </div>
        <div class="col-xs-12 ">
            <div class="form-group">
                <label for="lugar_latitud"> Ubicacion<?php echo i18n::__('lugar_latitud') ?>:</label>		
                <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, true) ?>" placeholder="lugar_latitud" required>
            </div>
        </div>
        <div class="col-xs-12 ">
            <div class="form-group">		
                <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, true) ?>" placeholder="lugar_longitud" required>
                <ul>
                    <li><a class="btn btn-link"><i class="fa fa-laptop"></i> Evento Online</a> <a class="btn btn-link"><i class="fa fa-search"></i>  ¿No Encuentras Tu Ubicacion?</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::DIRECCION, true) ?>" >Direccion Del Lugar Del Evento<?php echo i18n::__('direccion') ?>:</label>		
                <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::DIRECCION, true) ?>" placeholder="Direccion Del Lugar Del Evento" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <div class="col-xs-6">
                    <div class="input-group date" id="datetimePicker">
                        <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true) ?>">INICIO<?php echo i18n::__('') ?>:</label>		
                        <input class="form-control" type="datetime-local" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true) ?>" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true) ?>">FINALIZACION<?php echo i18n::__('fecha_final_evento') ?>:</label>		
                <input class="form-control" type="datetime-local" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true) ?>"  required>
            </div>
        </div>
        <div class="col-xs-12 ">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::IMAGEN, true) ?>">Imagen De Evento <?php echo i18n::__('') ?>:</label>		
                <input class="file" type="file" name="<?php echo eventoTableClass::getNameField(eventoTableClass::IMAGEN, true) ?>" required>
            </div>
        </div>
        <div class="col-xs-12 ">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true) ?>"> Descripcion Del Evento<?php echo i18n::__('descripcion') ?>:</label>
                <textarea class="form-control" rows="5" maxlength="180" name="<?php echo eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true) ?>" placeholder="Comenta que tiene tu Evento De Especial." required></textarea>

            </div>
            </br></br>
        </div>
        <h1 class="page-header"><span class="bg-steps">2 </span><span>  Ajustes Adicionales</span></h1>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true) ?>" >FECHA DE INICIO DE LA PUBLICACION DEL EVENTO<?php echo i18n::__('fecha_inicial_publicacion') ?>:</label>		
                <input class="form-control" type="datetime-local" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true) ?>" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true) ?>">FECHA FINALIZACION DE LA PUBLICACION DEL EVENTO<?php echo i18n::__('fecha_final_publicacion') ?>:</label>		
                <input class="form-control" type="datetime-local" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true) ?>" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::COSTO, true) ?>">COSTO<?php echo i18n::__('costo') ?>:</label>		
                <input class="form-control" type="number" name="<?php echo eventoTableClass::getNameField(eventoTableClass::COSTO, true) ?>" readonly required>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true) ?>"> TIPO DE EVENTO<?php echo i18n::__('categoria_id') ?>:</label>
                <select class="form-control" name="<?php echo eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true) ?>" required>
                    <option>Seleccionar El Tipo De Evento</option>
                    <option value="1">Categoria1</option>
                    <option value="2">Categoria2</option>
                </select>
            </div>
        </div>

    </div>
</div></br>