<?php

class errorContralador extends miControlador {

	public function index ($errorCode, $errorMessage){

        $this->view->errorMessage = $errorMessage;
        $this->view->errorCode = $errorCode;
        $this->view->render('error');
	}

}