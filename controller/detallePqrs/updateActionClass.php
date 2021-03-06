<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;

/**
 * Description of ejemploClass
 *
 * @author Mariana Lopez <lopezmariana1990@gmail.com>
 */
class updateActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $pqrs_id = request::getInstance()->getPost(detallePqrsTableClass::getNameField(detallePqrsTableClass::PQRS_ID, true));
        $respuesta = request::getInstance()->getPost(detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, true));
        $usuario_id = request::getInstance()->getPost(detallePqrsTableClass::getNameField(detallePqrsTableClass::USUARIO_ID, true));

        $ids = array(
            detallePqrsTableClass::ID => $id
        );

        $data = array(
            detallePqrsTableClass::PQRS_ID => $pqrs_id,
            detallePqrsTableClass::RESPUESTA => $respuesta,
            detallePqrsTableClass::USUARIO_ID => $usuario_id,
        );

        detallePqrsTableClass::update($ids, $data);
      }

      routing::getInstance()->redirect('detallePqrs', 'index');
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
