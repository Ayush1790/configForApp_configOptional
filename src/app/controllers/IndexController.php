<?php

use Phalcon\Mvc\Controller;
include APP_PATH."/etc/app.php";

class IndexController extends Controller
{
    public function indexAction()
    {
        print_r(version);
        die;
    }
}
