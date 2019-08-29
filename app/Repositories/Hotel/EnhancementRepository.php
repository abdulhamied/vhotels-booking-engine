<?php
namespace vengine\Repositories\Hotel;

class EnhancementRepository extends \vengine\Repositories\BaseRepository{
    protected $rateModel;
    public function __construct(
            \vengine\Models\Enhancement $model, 
             \vengine\Models\EnhancementRate $rateModel
            ) {
        $this->model = $model;
        $this->rateModel = $rateModel;
        $this->rules = \vengine\Models\Enhancement::$rules;
        $this->with(['hotel', 'rates', 'currency', 'image']);
        
        $this->imageConfig = [
            [  
                'type' => 'morph',
                'typeModel' => 'vengine\Models\Enhancement',
                'morphTo' => "vengine\Models\Gallery",
                'variable' =>  "image",
                'image_type' => "cover",
                'multiple' => false
            ],
            [
                'type' => 'morph',
                'typeModel' => 'vengine\Models\Enhancement',
                'morphTo' => "vengine\Models\Gallery",
                'variable' =>  "gallery_images",
                'image_type' => "gallery",
                'multiple' => true
            ]
        ];
    }
    
    public function filter($hotelID, $startDate, $endDate)
    {
        $data = $this->rateModel->with(['enhancement', 'enhancement.image'])->whereHas("enhancement", function($q) use($hotelID){
                $q->where("hotel_id",'=', $hotelID );
        })
        ->where("start" , "<=", $startDate)
        ->where("end", ">=", $endDate)
        ->get();
        return $data;
    }
}
