<?php

  namespace Controller\Home;
  use Mpwar\Controller\BaseController;
  use Mpwar\Component\Request\Request;
  use Mpwar\Component\Response\JsonResponse;
  use Mpwar\Component\Database\Sql;

  class JsonHome extends BaseController
  {
    
    public function __construct()
    {
      parent::__construct();
    }

    public function getJsonItem(Request $request, $name = '')
    {

      $database = new Sql('localhost', 'framework', 'root', 'ninina31');

      $json_result = array('msg' => $database->getItem($name));

      return new JsonResponse($json_result);
    }
  }
