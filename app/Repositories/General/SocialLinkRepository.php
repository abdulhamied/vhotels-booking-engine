<?php
namespace vengine\Repositories\General;

class SocialLinkRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\SocialLink $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\SocialLink::$rules;
    }
}
