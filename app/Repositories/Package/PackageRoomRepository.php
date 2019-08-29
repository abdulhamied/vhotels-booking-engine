<?php
namespace vengine\Repositories\Package;

class PackageRoomRepository  extends \vengine\Repositories\BaseRepository{
    public function __construct(\vengine\Models\PackageRoom $model) {
        $this->model = $model;
        $this->rules = \vengine\Models\PackageRoom::$rules;
        $this->withParams  = ['package' , 'roomCategory'];
    }
}
