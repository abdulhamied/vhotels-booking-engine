<?php
namespace vengine\Http\Controllers\Api\Package;
use Illuminate\Http\Request;

class PackageController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Package\PackageRepository $repository
            ) {
        $this->repository = $repository;
    }

    public function filterPackage(Request $request)
    {
        $rules = [
          'start_date' => "required|date",
          'end_date' => "required|date",
          'booking_date' => "date",
        ];

        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Error', $validator->messages());
        }

        $data = $this->repository
        ->filterPackage($request->get("start_date"),
        $request->get("end_date"));
        return $this->success("Packages List", $data);
    }
}
