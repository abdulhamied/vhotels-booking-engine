<?php
namespace vengine\Repositories\General;

class AgentRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\Agent $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\Agent::$rules;
        $this->with(['contact', 'location']);
    }
}
