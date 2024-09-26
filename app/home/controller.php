<?php

class HomeController extends Sumish\Controller {
    public function indexAction() {
        $this->response->print('Home');
    }
}