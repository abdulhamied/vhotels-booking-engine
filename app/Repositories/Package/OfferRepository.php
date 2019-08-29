<?php
namespace vengine\Repositories\Package;

class OfferRepository  extends \vengine\Repositories\BaseRepository{
    public function __construct(\vengine\Models\Offer $model) {
        $this->model = $model;
        $this->rules = \vengine\Models\Offer::$rules;
        $this->withParams  = ['hotel', 'roomCategory', 'image'];
        $this->imageConfig = [
                    [
                        'type' => 'morph',
                        'typeModel' => 'vengine\Models\Offer',
                        'morphTo' => "vengine\Models\Gallery",
                        'variable' =>  "image",
                        'image_type' => "cover",
                        'multiple' => false
                    ]
            ];
    }

}
