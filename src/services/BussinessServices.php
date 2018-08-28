<?php

namespace dott\services;

use dott\repos\BussinessRepo;
use Illuminate\Http\Request as HttpRequest;

class BussinessServices extends BaseService
{
    /**
     * @var BussinessRepo
     */
    protected $bussinessRepo;

    /**
     * BussinessServices constructor.
     * @param BussinessRepo $bussinessRepo
     *
     */
    public function __construct(BussinessRepo $bussinessRepo)
    {
        $this->bussinessRepo = $bussinessRepo;
    }

    /**
     * @param HttpRequest $request
     * @return mixed
     */
    public function store(HttpRequest $request){
        return $this->bussinessRepo->create($request);
    }

    /**
     * @return array
     */
    public function listing(HttpRequest $request){
        return $this->bussinessRepo->listing($request);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($id){
        return $this->bussinessRepo->get($id);
    }

    /**
     * @param $id
     */
    public function update($id, HttpRequest $request){
        return $this->bussinessRepo->update($id, $request);
    }

    /**
     * @param $id
     */
    public function delete($id){
        return $this->bussinessRepo->delete($id);
    }

    /**
     * @param HttpRequest $request
     * @return mixed
     */
    public function search(HttpRequest $request){
        return $this->bussinessRepo->search($request);
    }

}