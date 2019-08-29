<?php
namespace vengine\Http\Controllers\Api\Location;
use Illuminate\Http\Request;

class TaxController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Location\TaxRepository $repository
            ) {
        $this->repository = $repository;
    }
    
    public function getTaxBetweenDuration(Request $request)
    {
        $rules = [
            'start' => 'required|date',
            'end' => 'required|date'
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors.', $validator->messages(), 405);
        }
        $data = $this->repository->getTaxBetweenDuration($request->get("start"), $request->get("end"));
        return $this->success("Tax between duration.", $data);
    }
    
}
