<?php
namespace vengine\Repositories\CacheTariff;


class TaxCalculateService {
    public static function calculateTax($tariffID, $total, $peopleCount = 1)
    {
        if(!\Cache::has("tariff.".$tariffID))
        {
            $tariff = \vengine\Models\Tariff::with(['taxes'])
                ->find($tariffID);
            \Cache::put('tariff.'.$tariffID, $tariff, 1);
        }
        $tariff = \Cache::get("tariff.".$tariffID);
        $taxObject = [
            'total' => 0,
            'type' => [],
            'services' => [],
            'services_amount' => 0
        ];

        foreach($tariff->taxes as $tax)
        {
            if($tax->pivot->inclusive == 0){
                if($tax->type == 'service_charge')
                {
                    $taxObject['services_amount'] += ($tax->amount * ($total/100));
                    
                    $total += ($tax->amount * ($total/100));
                    $taxObject['services'][] = [
                            'name' => $tax->name,
                            'amount' =>  ($tax->amount * ($total/100)),
                            'type' => $tax->type
                        ];
                }
            }
        }
        
        foreach($tariff->taxes as $tax)
        {
            if($tax->pivot->inclusive == 0){
                if($tax->type == 'fixed')
                {
                    $taxObject['total'] += $tax->amount;
                    $taxObject['type'][] = [
                        'name' => $tax->name,
                        'amount' => $tax->amount,
                        'type' => $tax->type
                    ];
                }
                else if($tax->type == 'percent')
                {
                    $taxObject['total'] += (($tax->amount/100) * $total);
                    $taxObject['type'][] = [
                        'name' => $tax->name,
                        'amount' => (($tax->amount/100) * $total),
                        'type' => $tax->type
                    ];
                }
                else if($tax->type == 'per_person')
                {
                    $taxObject['total'] += $peopleCount * $tax->amount;
                    $taxObject['type'][] = [
                        'name' => $tax->name,
                        'amount' => $peopleCount * $tax->amount,
                        'type' => $tax->type
                    ];
                }
            }
        }
        return $taxObject;
    }
}
