<?php


namespace App\Traits;


use App\Models\AttributeRelationship;

trait AttributeTrait
{
    public function attributes(){
        return $this->morphMany(AttributeRelationship::class, 'subject');
    }
}
