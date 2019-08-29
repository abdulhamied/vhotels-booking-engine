<?php
namespace vengine\Repositories\Package;

class PackageServiceRepository  extends \vengine\Repositories\BaseRepository{
    public function __construct(\vengine\Models\PackageService $model) {
        $this->model = $model;
        $this->rules = \vengine\Models\PackageService::$rules;
        $this->withParams  = ['package' , 'service'];
    }
}
