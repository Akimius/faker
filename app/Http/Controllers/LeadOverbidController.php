<?php

namespace App\Http\Controllers;

use App\BaseModel;
use App\LeadOverbid;

class LeadOverbidController extends AbstractBaseController
{
    /**
     * @var BaseModel
     */
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    /**
     * @return BaseModel
     */
    protected function getModel(): BaseModel
    {
        return new LeadOverbid();
    }
}
