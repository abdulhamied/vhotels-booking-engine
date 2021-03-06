<?php
namespace vengine\Services;


class FormService {
    
    
    
    protected $config = [];
    
    protected $gConfig = [];
    
    protected $oneTimeConfig = [];
    
    protected $inputTypes = [
        'texteditor',
        'text',
        'password',
        'number',
        'date',
        'hidden',
        'atoll_island'
    ];
    
    protected $inputTypeWithValues = [
        'checkbox',
        'radio',
        'select'
        
    ];
    
    protected $defaultConfig = [
        'errorFieldPrefix' => "",
        'plain' => false,
        'additionalAttrs' => "",
        'modelPrefix' => "form"
    ];
    
    public function __construct() {
        
        $this->setViewNameSpace();
        $this->applyDefaults();
            
    }
    
    function setViewNameSpace() {
        
        $dirpath = realpath(__DIR__);
        $templatefile = $dirpath.DIRECTORY_SEPARATOR."FormService".DIRECTORY_SEPARATOR."Templates";
        view()->addNamespace('form_views', $templatefile);
    }
    
    function applyDefaults() {

        $this->config = array_merge($this->config, $this->defaultConfig);
        
    }
    
    function setConfig($gVals = [] ) {
        if(empty($gVals)) {
            exit();
        } else {
            $this->config = array_merge($this->config, $gVals);
        }
        
        return $this;
        
    }
    
    function setField($configName, $value) {
        
        $this->config[$configName] = $value;

        return $this;
        
    }
    
    function start() {
        return '<form class="form-horizontal" ng-model="form" style="width: auto;">';
    }
    
    function end() {
        return '</form>';
    }
    
    
    function __call($func, $arguments) {
        
        
        
        if(isset($this->config['label'])) {
            unset($this->config['label']);
        }
        if(isset($this->config['cssClass'])) {
            unset($this->config['cssClass']);
        }
        
        $this->labelFieldDimension();
        
        if(!in_array($func, array_merge($this->inputTypes, $this->inputTypeWithValues))) {
            
            var_dump($this->inputTypes);
            
            dd("function ".$func." does not exist;");
        }
        
        if(count($arguments) > 1) {
            
            dd("function ".$func." expects only 1 argument");
            
        }
        
        $this->config['type'] = $func;
        $this->config['name'] = $arguments[0];
        
        if(!in_array($func, $this->inputTypeWithValues)) {
            
            $this->config['values'] = ["val1", "val2"];
        }
        
        return $this;
    }
    
    function attrs($attrs) {
        
        $attrString = "";
        
        foreach($attrs as $key => $attr) {
            $attrString .= $key."=\"".$attr."\" ";
        }
        
        $this->oneTimeConfig['additionalAttrs'] = $attrString;
        
        
        return $this;
        
    }
    
    
    function fromArray($values) {
        
        $isAssoc = (count($values)>2 && array_key_exists(0, $values));
        if($isAssoc) {
            
            foreach($values as $value) {
                $valuesAssoc[$value] = $value;
            }
            
        } else {
            
            $valuesAssoc = $values;
        }
        
        
        $this->config['values'] = $valuesAssoc;
        return $this;
        
    }
    
    function fromDb($tableName, $displayField, $valueField, $whereConditions = []) {
        
        
        $this->config['values'] = \DB::table($tableName)
                ->orderBy($valueField);
        foreach ($whereConditions as $where) {
            $this->config['values']->where($where[0], $where[1], $where[2]);
        }
        $this->config['values'] = $this->config['values']->lists($displayField, $valueField);
        
        return $this; 
    }
    
    function label($label = "label1") {
        
        
        $this->config['label'] = $label;
        
        return $this; 
    }
    
    function cssClass($cssClass = "col-md-12")
    {
        $this->config['cssClass'] = $cssClass;
        return $this;
    }
    
    function labelFieldDimension($label = 4, $field = 8)
    {
        $this->config['cssLabel']  = 'col-md-'.$label;
        $this->config['cssField']  = 'col-md-'.$field;
        return $this;
    }
    
    function saveButton() {
        return   '<div class="row-fluid"><div class="form-group">' .
                    '<div class=" col-sm-offset-10 col-sm-2">' .
                    '<button type="button" ng-click="save(form)" '.
                    'class=" btn btn-primary full-width" text="Save">Save</button>' .
                    '</div>' .
                  '</div></div>';
    }
    
    
    function r($oneTimeConfig = []) {
        
        
        $tempConfig = $this->config;
        
        $this->config = array_merge($this->config, $this->oneTimeConfig);
        
        $this->config = array_merge($this->config, $oneTimeConfig);

        $this->config['ngModel'] = $this->config['name'];
        
        $this->config['errorField'] = $this->config['name'];
        
        $config = (object) $this->config;
        
        $viewString = \View::make('form_views::fields', compact('config'))->render();
        
        $this->oneTimeConfig = [];
        
        $this->config = $tempConfig;
        
        return $viewString;
        
    }
    

    
    function __toString() {
        return $this->r();
    }
    

}