<?php

namespace App;

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AttributeTrait;
use App\Traits\GalleryTrait;
use App\Traits\ReviewTrait;

class Seller extends Model
{
  use AttributeTrait;
  use GalleryTrait;
  use ReviewTrait;

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function payments()
  {
    return $this->hasMany(Payment::class);
  }

  public function get_attribute_label_by_id($id)
  {
    $attribute = $this
      ->attributes()
      ->where('attribute_id', '=', $id)
      ->first();

    if (!$attribute) {
      return false;
    }


    // dd($attribute->attributes()->get());

    $label = Attribute::where('id', $attribute->attribute_id)->first();
    $custom_properties = json_decode($label->custom_properties);
    if (isset($custom_properties->unit)) {
      $label = $custom_properties->unit;
    } else {
      $label = false;
    }

    return $label;
  }

  public function get_attribute_value_by_id($id)
  {
    $attribute = $this
      ->attributes()
      ->where('attribute_id', '=', $id)
      ->first();


    if (isset($attribute->attribute_value_id)) {
      $value =  AttributeValue::find($attribute->attribute_value_id)->values;
    } else {
      $value = translate('No Data');
    }
    return $value;
  }
}
