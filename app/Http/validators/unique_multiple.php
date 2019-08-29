<?php

/**
 * Validates that two or more fields are unique
 */
\Validator::extend('unique_multiple', function ($attribute, $value, $parameters, $validator)
{
    //if this is for an update then don't validate
    //todo: this might be an issue if we allow people to "update" one of the columns..but currently these are getting set on create only
    if (isset($validator->getData()['id'])) return true;

    // Get table name from first parameter
    $table = array_shift($parameters);

    // Build the query
    $query = DB::table($table);

    // Add the field conditions
    foreach ($parameters as $i => $field){
        $query->where($field, $validator->getData()[$field]);
    }

    // Validation result will be false if any rows match the combination
    return ($query->count() == 0);

});

//$rules = [
//  'initial_page' => 'required_with:end_page|integer|min:1|digits_between: 1,5',
//  'end_page' => 'required_with:initial_page|integer|greater_than_field:initial_page|digits_between:1,5'
//]; 
Validator::extend('greater_than_field', function($attribute, $value, $parameters, $validator) {
      $min_field = $parameters[0];
      $data = $validator->getData();
      $min_value = $data[$min_field];
      return $value > $min_value;
    });   

    Validator::replacer('greater_than_field', function($message, $attribute, $rule, $parameters) {
      return str_replace(':field', $parameters[0], $message);
    });