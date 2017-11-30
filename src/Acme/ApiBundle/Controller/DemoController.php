<?php

namespace Acme\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class DemoController extends FOSRestController {

    public function getDemosAction() {
        $data = array("hello" => "world");

        return $data;
    }

}
