<?php
namespace vengine\Repositories\General;

class UiFavouriteLinkRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\UiFavouriteLink $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\UiFavouriteLink::$rules;
        $this->with([]);
    }
}
