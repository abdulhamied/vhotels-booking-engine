<?php
namespace vengine\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseController extends ResponseController{
       
    /**
     *
     * @var \App\Repositories\Repository\BaseRepository
     */
    public $repository; 
    
    
    public function create() {
        
    }

    public function destroy($id) {
        if($this->repository->destroy($id))
        {
            return $this->success("Succcessfully Deleted", []);
        }
        return $this->error("Unable to find the required record.");
    }

    public function edit($id) {
        
    }

    public function index(Request $request) {
        $paginationState = $this->repository->paginate;
        $data = $this->repository->getAll($request);
        if($paginationState)
        {
            $responseArray = $data->toArray();
            $responseArray['code'] = 200;
            $responseArray['message'] = "Data";
            return response($responseArray, 200);
        }

        if(empty($data))
        {
            return $this->success("No Data Found", []);
        }
        return $this->success("Data Returned", $data->toArray());
    }

    public function show($id) {
        $data = $this->repository->get($id);
        
        if(empty($data) || empty($data->toArray()))
        {
            return $this->error("No Record Found.");
        }
        return $this->success("Record Retrieved.", $data);
    }

    public function store(Request $request) {
        $data = $request->all();
        if(!$this->repository->store($data))
        {
            return $this->response(405, "Validation Errors", $this->repository->getErrors()->toArray(), 422);
        }
        return $this->success("Saved Successfully.", $this->repository->getStoredObject());
    }

    public function update($id, Request $request) {
        $data = $request->all();
        if(!$this->repository->update($id, $data))
        {
            return $this->response(405, "Validation Errors", $this->repository->getErrors(), 422 );
        }
        return $this->success('Updated Successfully.', $this->repository->getStoredObject());
    }


}