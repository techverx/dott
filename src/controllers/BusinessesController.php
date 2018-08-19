<?php

namespace dott\controllers;

use Illuminate\Support\Facades\Request;
use dott\services\BusinessServices;

class BusinessesController extends BaseController
{
    /**
     * @var BusinessServices
     */
    protected  $businessServices;

    /**
     * BusinessesController constructor.
     * @param BusinessServices $businessServices
     */
    public function __construct(BusinessServices $businessServices)
    {
        $this->businessServices = $businessServices;
    }

    /**
     * @return string
     */
    public function index()
    {
        $businesses = $this->businessServices->listing();
        return json_encode([
            'status' => true,
            'message' => 'List of businesses',
            'body' => $businesses
        ]);
    }

    public function store(Request $request)
    {
        $this->businessServices->store($request);
        return json_encode([
            'status' => true,
            'message' => 'Successfully stored',
            'body' => ''
        ]);
    }
}
