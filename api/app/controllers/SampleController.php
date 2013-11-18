<?php
/**
 * Created by JetBrains PhpStorm.
 * User: P2DC
 * Date: 18/11/2556
 * Time: 10:29 น.
 * To change this template use File | Settings | File Templates.
 */

namespace Controller;
use Illuminate\Support\Facades\Validator;
use User, Response, Input, DB, View;

class SampleController extends \Controller {
    public function get_home(){
        return \View::make("samples/home");
    }
}