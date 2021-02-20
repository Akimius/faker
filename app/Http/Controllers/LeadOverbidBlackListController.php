<?php

namespace App\Http\Controllers;

use App\BaseModel;
use App\LeadOverbidBlackList;

class LeadOverbidBlackListController extends AbstractBaseController
{
    /**
     * @var BaseModel
     */
    protected BaseModel $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    /**
     * @return BaseModel
     */
    protected function getModel(): BaseModel
    {
        return new LeadOverbidBlackList();
    }
}
