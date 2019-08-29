<?php
namespace vengine\Repositories\General;

class ContactRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\Contact $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\Contact::$rules;
        $this->with([]);
    }
}
