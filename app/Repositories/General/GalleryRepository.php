<?php
namespace vengine\Repositories\General;

class GalleryRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\Gallery $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\Gallery::$rules;
    }
}
