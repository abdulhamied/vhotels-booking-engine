<?php

namespace vengine\Http\Controllers\Api;


class ViewManageController extends \vengine\Http\Controllers\Controller{
    public function loadTemplate($templateName)
    {
        if($templateName == "menu")
        {
            return view('general.menu', [
                'menuItems' => \Config::get("menu"),
                'user' => \Auth::user()
                    ]);
        }
        return view("general.".$templateName);
    }
    
    public function loadResortMenu()
    {
       $user = \Auth::user();
       
       
       $menuList = [
            [
                'link' => 'v1.hotel.detail',
                'name' => 'Detail',
                'access' => "*"
            ],
            [
                'link' => 'v1.hotel.tariff_list',
                'name' => 'Tariff List',
                'access' => "superuser"
            ],
            [
                'link' => 'v1.hotel.tariff',
                'name' => 'Tariff',
                'access' => "superuser"
            ],
            [
                'link' => 'v1.hotel.tariff_calendar',
                'name' => 'Tariff Calender',
                'access' => "*"
            ],
            [
                'link' => 'v1.hotel.policy',
                'name' => 'Policy',
                'access' => "superuser"
            ],
        ];
        
        $responseArray = [];
        foreach($menuList as $menu)
        {
            if($user->type == 'superuser'){
                $responseArray[] = $menu;
            }else if($menu['access'] == "*")
            {
                $responseArray[] = $menu;
            }else if($menu['access'] ==$user->type){
                $responseArray[] = $menu;
            }
        }
        return $responseArray;
    }
    
    
    public function getAccessLevels()
    {
        $user = \Auth::user();
        $response = [
           'md' => md5($user->id),
           'type' => $user->type 
        ]; 
        return $response;
    }
}
