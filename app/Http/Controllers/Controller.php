<?php

namespace App\Http\Controllers;

use App\LeadOverbid;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    public function __construct()
    {

    }

    public function insertRecords(): array
    {
        $count = request()->has('count') ? request('count') : 5;

        $overrideParams = $this->getFilteredQueryParams();

        try {
            $records = LeadOverbid::factory()->count($count)->create($overrideParams);
        } catch (\Throwable $exception) {
            return [
                'status'  => 'Failed',
                'message' => $exception->getMessage(),
            ];
        }

        return [
            'status'         => 'OK',
            'overrideParams' => $overrideParams,
            'data'           => $records,
        ];
    }

    public function truncateTable(): array
    {
            try {
                LeadOverbid::truncate();
            } catch (\Throwable $exception) {
                return [
                    'status'  => 'Failed',
                    'message' => $exception->getMessage(),
                ];
            }

        return ['status' => 'table truncated at: ' . now()];
    }

    /**
     * @return array
     */
    protected function getFilteredQueryParams(): array
    {
        $overrideParams = request()->all();
        $allTableFields = (new LeadOverbid())->getTableFields();

        return array_filter(
            $overrideParams,
            static function ($key) use ($allTableFields) {
                return in_array($key, $allTableFields, true);
            },
            ARRAY_FILTER_USE_KEY
        );
    }
}
