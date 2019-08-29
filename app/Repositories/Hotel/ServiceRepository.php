<?php
namespace vengine\Repositories\Hotel;

class ServiceRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\Service $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\Service::$rules;
        $this->with(['company', 'hotel',
            'image' , 'gallery', 'logo'
            ]);
        
        $this->imageConfig = [
                    [  
                        'type' => 'morph',
                        'typeModel' => 'vengine\Models\Hotel',
                        'morphTo' => "vengine\Models\Gallery",
                        'variable' =>  "image",
                        'image_type' => "cover",
                        'multiple' => false
                    ],
                     [  
                         'type' => 'morph',
                         'typeModel' => 'vengine\Models\Hotel',
                         'morphTo' => "vengine\Models\Gallery",
                         'variable' =>  "logo",
                         'image_type' => "logo",
                         'multiple' => false
                     ],
                    [  
                        'type' => 'morph',
                        'typeModel' => 'vengine\Models\Hotel',
                        'morphTo' => "vengine\Models\Gallery",
                        'variable' =>  "gallery_images",
                        'image_type' => "gallery",
                        'multiple' => true
                    ]
                ];
    }
}