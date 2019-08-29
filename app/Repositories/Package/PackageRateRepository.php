<?php
namespace vengine\Repositories\Package;

class PackageRateRepository  extends \vengine\Repositories\BaseRepository{
    public function __construct(\vengine\Models\PackageRate $model) {
        $this->model = $model;
        $this->rules = \vengine\Models\PackageRate::$rules;
        $this->withParams  = ['currency', 'zone', 'package'];
    }
}
