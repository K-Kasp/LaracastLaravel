<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function categories()
  {
    return $this->belongsToMany(Category::class, 'company_category');
  }

  public static function companies_count_rounded()
  {
    $total = 0;

    $companies = Shop::all()->count();

    /* Round to closest 100 */
    $total = ceil($companies / 100) * 100;

    return $total;
  }

  public function get_company_website_url()
  {
    $website = [];
    $website_attribute = $this->user->seller->get_attribute_value_by_id(40);

    $website['href'] = $website_attribute;

    return $website;
  }

  public function get_company_logo()
  {

    if ($this->logo) {
      $logo = uploaded_asset($this->logo);
    } else {
      $logo = "https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png";
    }

    return $logo;
  }

  public function get_company_cover()
  {

    if ($this->sliders) {
      $logo = uploaded_asset($this->sliders);
    } else {
      $logo = "https://images.unsplash.com/photo-1476231682828-37e571bc172f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80";
    }

    return $logo;
  }

  public function company_has_logo()
  {
    if ($this->logo) {
      return true;
    } else {
      return false;
    }
  }

  public function company_size_calculated()
  {
    /* Size goes 1/5 */
    $size = 1;

    $turnover = $this->user->seller->get_attribute_value_by_id(35);
    /* Micro company Size */
    if ($turnover < 2000000) {
      $size = 1;
    } else if ($turnover < 12000000) {
      $size = 2;
    } else if ($turnover < 60000000) {
      $size = 3;
    } else if ($turnover < 1000000000) {
      $size = 4;
    } else {
      $size = 5;
    }

    return $size;
  }



  public function company_has_description()
  {
    if ($this->meta_description) {
      return true;
    } else {
      return false;
    }
  }


  public function company_has_required_attributes()
  {
    $attributeCount = $this->user->seller->attributes()
      ->count();

    if ($attributeCount > 5) {
      return true;
    } else {
      return false;
    }
  }

  public function company_has_category()
  {
    $categories = $this->categories()->count();

    if ($categories > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function company_is_verified()
  {

    $verification_status = strtolower($this->user->seller->get_attribute_value_by_id(51));

    if ($verification_status === 'yes') {
      return true;
    } else {
      return false;
    }
  }

  public function profile_completeness()
  {
    $total = 0;
    if ($this->company_has_description()) {
      $total += 25;
    }

    if ($this->company_has_logo()) {
      $total += 25;
    }

    if ($this->company_has_required_attributes()) {
      $total += 25;
    }

    if ($this->company_has_category()) {
      $total += 25;
    }
    return $total;
  }
}
