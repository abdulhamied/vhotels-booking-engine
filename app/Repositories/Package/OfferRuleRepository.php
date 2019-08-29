<?php
namespace vengine\Repositories\Package;

class OfferRuleRepository  extends \vengine\Repositories\BaseRepository{
    public function __construct(\vengine\Models\OfferRule $model) {
        $this->model = $model;
        $this->rules = \vengine\Models\OfferRule::$rules;
        $this->withParams  = [];
    }
}
