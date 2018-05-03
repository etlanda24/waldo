<?php

namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\User;
use Illuminate\Http\Response;
use League\Fractal;
use App\Transformers\UsersTransformer;
use App\Repositories\Formater;
use Illuminate\Http\Request;

class UserController extends BaseController
{   
    public function index()
    {
    	// php -S localhost:8000 -t ./public
    	$user = User::all();
   		return response()->json([
         'data' => $user,'meta' => [
         	'pagination' => '4'
         ]
    	], 200);

    //     $count = \App\User::get()->count();

    //     $version = \App\User::get();
    //     $dataVersion = [];
    //     if ($version) {
    //         $manager = new \League\Fractal\Manager();
    //         $manager->setSerializer(new \App\Repositories\CostumeDataArraySerializer());
    //         $resource = new Fractal\Resource\Collection($version, new UsersTransformer());
    //         $dataVersion = $manager->createData($resource)->toArray();
    //     }

    //     return $this->response()->success($dataVersion, ['meta.count' => $count]);
     }
}
