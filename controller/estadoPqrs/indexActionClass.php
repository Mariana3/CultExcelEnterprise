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
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class indexActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {

      $fields = array(
          estadoPqrsTableClass::ID,
          estadoPqrsTableClass::NOMBRE,
          estadoPqrsTableClass::ACTIVED,
          estadoPqrsTableClass::PQRS_ID
      );
      $orderBy = array(
          estadoPqrsTableClass::NOMBRE
      );
      $this->objEstadoPqrs = estadoPqrsTableClass::getAll($fields, true, $orderBy, 'ASC');
      $this->defineView('index', 'estadoPqrs', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
