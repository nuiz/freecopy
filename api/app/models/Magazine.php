<?php
/**
 * Created by JetBrains PhpStorm.
 * User: P2DC
 * Date: 14/11/2556
 * Time: 10:35 น.
 * To change this template use File | Settings | File Templates.
 */

use Jenssegers\Mongodb\Model as Eloquent;

class Magazine extends Eloquent {
    protected $collection = "magazine";
    public function index(){
        return Magazine::all();
    }
}