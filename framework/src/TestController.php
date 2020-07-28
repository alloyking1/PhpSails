<?php

    namespace Alloy;

    use Alloy\Controller;

    class TestController extends Controller {

        public $result;

        public function __construct (){
            $controller = new Controller;
            return $this->result = $controller->controllerIndx();
        }  

        public function result(){
            return $this->result;
        } 
    }