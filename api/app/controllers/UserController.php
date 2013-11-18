<?php
/**
 * Created by JetBrains PhpStorm.
 * User: P2DC
 * Date: 12/11/2556
 * Time: 15:55 น.
 * To change this template use File | Settings | File Templates.
 */

namespace Controller;
use Illuminate\Support\Facades\Validator;
use User, Response, Input, DB;

class UserController extends \Controller {
    public function index(){
        $res = Response::json(User::all());
        $res->send();
    }

    public function show($id){
        /*
        $user = User::find($id);
        if(is_null($user)){
            return Response::json(array(
                "error"=> array(
                    "type"=> "NotFoundUser"
                )
            ));
        }
        */
        $cn = new \MongoClient();
        $db = $cn->selectDB("test");
        $userCollection = $db->selectCollection("users");
        $user = $userCollection->findOne(array('_id' => new \MongoId($id)), array("username", "recent"));
        $res = Response::json($user);
        $res->send();
    }

    public function store(){
        $validate = Validator::make(Input::all(), array(
            "fb_id"=> "required",
            "first_name"=> "required",
            "last_name"=> "required"
        ));
        $data = array();
        $data = Input::all();
        $data['recent'] = array(
            "magazines"=> array(
                array("name"=> "Time", "page"=> 5),
                array("name"=> "Hip", "page"=> 7),
                array("name"=> "Gay Thailand", "page"=> 21),
                array("name"=> "Garena", "page"=> 11),
            )
        );

        $user = new User($data);
        $user->save();
        $res = Response::json($user);
        $res->send();
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
    }
}