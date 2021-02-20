<?php

namespace App\Http\Controllers;

use App\BaseModel;

abstract class AbstractBaseController extends Controller
{
    /**
     * @var BaseModel
     */
    protected BaseModel $model;

    /**
     * @return BaseModel
     */
    abstract protected function getModel(): BaseModel;

    /**
     * @return array
     */
    public function insertRecords(): array
    {
        $count = request()->has('count') ? request('count') : 5;

        $overrideParams = $this->getFilteredQueryParams();

        try {
            $records = $this->model::factory()->count($count)->create($overrideParams);
        } catch (\Throwable $exception) {
            return [
                'status'  => 'Failed',
                'message' => $exception->getMessage(),
            ];
        }

        return [
            'status'            => 'OK',
            'Number of records' => $count,
            'overrideParams'    => $overrideParams,
            'data'              => $records,
        ];
    }

    /**
     * @return array
     */
    public function truncateTable(): array
    {
            try {
                $this->model::truncate();
            } catch (\Throwable $exception) {
                return [
                    'status'  => 'Failed',
                    'message' => $exception->getMessage(),
                ];
            }

        return [
            'status'  => 'OK',
            'message' => 'table truncated at: ' . now(),
        ];
    }

    /**
     * @return array
     */
    private function getFilteredQueryParams(): array
    {
        $overrideParams = request()->all();
        $allTableFields = $this->model->getTableFields();

        return array_filter(
            $overrideParams,
            static function ($key) use ($allTableFields) {
                return in_array($key, $allTableFields, true);
            },
            ARRAY_FILTER_USE_KEY
        );
    }
}
