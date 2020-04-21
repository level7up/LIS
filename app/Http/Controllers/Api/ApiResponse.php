<?php


namespace App\Http\Controllers\Api;

trait ApiResponse{

  public $resource_namespace = "\App\Http\Resources\\";

  public function apiResponse($data = null , $message = '' , $code = 200){

    $status = in_array($code , $this->successCodes()  );

    if(is_object($message)){

      $message = is_array($message->getMessages())? head($message->getMessages())[0]  : $message;

    }

    return response(compact('data' , 'status' ,'message'));

  }

  public function successResponse($data = null , $message = ''){

    $status = true;

    return response(compact('data' , 'status' ,'message'));

  }

  public function failedResponse($data = null , $message = '' , $code = 200){

    $status = false;

    if(is_object($message)){

      $message = is_array($message->getMessages())? head($message->getMessages())[0]  : $message;

    }

    return response(compact('data' , 'status' ,'message') , $code);

  }

  public function successCodes(){

    return [200 , 201 , 202];

  }
  public function takenEmail(){
    return $this->apiResponse(null , $message , 200);
  }
  public function notFound(){
    return $this->apiResponse(null , 'Not Found' , 404);
  }

  public function collection($resource , $collection , $flag = true){

    $resource = $this->resource_namespace . $resource;

    $collection = $resource::collection($collection);


    return $flag ? $this->apiResponse($collection , '' , $collection->isEmpty() ? 302 : 200 ) : $collection;

  }



  public function collections($collections){

    foreach($collections as $resource => $collection):

      $data[ array_keys($collection)[0] ] = $this->collection($resource , array_values($collection)[0] , false) ;

    endforeach;

    return $this->apiResponse($data , '' , 200);

  }


  public function single_row($resource , $row , $message = '' , $code = 200){

    if($row){

      $resource = $this->resource_namespace . $resource;

      $row = new $resource($row);

      return $this->apiResponse($row , $message , $code);
  }

  return $this->notFound();


  }

  public function api_user(){
    return auth('api')->user();
  }

}
