<?php

namespace dott\controllers;

use Illuminate\Http\Request as HttpRequest;
use dott\services\BussinessServices;
use Illuminate\Http\Response;

class BussinessesController extends BaseController
{
    /**
     * @var BussinessServices
     */
    protected  $bussinessServices;

    /**
     * BussinessesController constructor.
     * @param BussinessServices $bussinessServices
     */
    public function __construct(BussinessServices $bussinessServices)
    {
        $this->bussinessServices = $bussinessServices;
    }

    /**
     * @return string
     */
    public function index(HttpRequest $request)
    {
        $bussinesses = $this->bussinessServices->listing($request);
        return json_encode([
            'status' => true,
            'message' => 'List of bussinesses',
            'body' => $bussinesses
        ]);
    }

    /**
     * @param HttpRequest $request
     * @return Response
     */
    public function store(HttpRequest $request)
    {
        $bussiness = $this->bussinessServices->store($request);

        $response = new Response();
        $response->setContent([
            'status' => 200,
            'message' => 'Successfully stored',
            'body' => $bussiness
        ] );
        $response->setStatusCode(200);
        return $response;
    }

    /**
     * @param $id
     * @return Response
     */
    public function get($id){
        $bussiness = $this->bussinessServices->get($id);
        $response = new Response();
        $response->setContent([
            'status' => 200,
            'message' => '',
            'body' => $bussiness
        ] );
        $response->setStatusCode(200);
        return $response;
    }

    /**
     * @param $id
     * @return Response
     */
    public function update($id, HttpRequest $request){
        $bussiness = $this->bussinessServices->update($id,$request);
        $response = new Response();
        $response->setContent([
            'status' => 200,
            'message' => 'Successfully Updated',
            'body' => $bussiness
        ] );
        $response->setStatusCode(200);
        return $response;
    }

    /**
     * @param $id
     * @return Response
     */
    public function delete($id){
        $bussiness = $this->bussinessServices->delete($id);
        $response = new Response();
        $response->setContent([
            'status' => 200,
            'message' => 'Successfully Deleted',
            'body' => $bussiness
        ] );
        $response->setStatusCode(200);
        return $response;
    }

    /**
     * @param HttpRequest $request
     * @return Response
     */
    public function search(HttpRequest $request){
        $bussinesses = $this->bussinessServices->search($request);
        $response = new Response();
        $response->setContent([
            'status' => 200,
            'message' => 'Results',
            'body' => $bussinesses
        ] );
        $response->setStatusCode(200);
        return $response;
    }

}
