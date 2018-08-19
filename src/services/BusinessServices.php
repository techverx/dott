<?php

namespace dott\services;

use dott\repos\BusinessRepo;
use Illuminate\Support\Facades\Request;

class BusinessServices extends BaseService
{
    /**
     * @var BusinessRepo
     */
    protected $businessRepo;

    /**
     * BusinessServices constructor.
     * @param BusinessRepo $businessRepo
     *
     */
    public function __construct(BusinessRepo $businessRepo)
    {
        $this->businessRepo = $businessRepo;
    }

    /**
     * @param Request $request
     */
    public function store(Request $request){
        return $this->businessRepo->create($request);
    }

    /**
     * @return array
     */
    public function listing(){
        return $this->businessRepo->listing();
    }
}