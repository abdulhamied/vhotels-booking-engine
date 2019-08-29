<?php
namespace vengine\Repositories\Hotel;

class RoomRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\Room $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\Room::$rules;
                $this->with([
                    'roomCategory', 'hotel', 'occupancies',
                    'facilities', 'company', 'image', 'gallery'
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
                        'variable' =>  "gallery_images",
                        'image_type' => "gallery",
                        'multiple' => true
                    ]
                ];

                $this->imageCrop = true;
                $this->imageCropSizes = [
                    'width' => 1920,
                    'height' => 1080
                ];
    }
}
