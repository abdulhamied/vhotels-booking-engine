<?php
namespace vengine\Repositories\General;

class CompanyRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\Company $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\Company::$rules;
    }
}
