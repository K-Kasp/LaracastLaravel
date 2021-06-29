<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;


    public static function total_companies()
    {
        $total = Shop::count();
        return $total;
    }


    public static function total_production_capacity()
    {
        $total = 0;

        $companies = Shop::whereIn('user_id', verified_sellers_id())->get();

        foreach ($companies as $company) {
            $single_value = $company->user->seller->get_attribute_value_by_id(15);
            if (is_numeric($single_value)) {
                $total += $single_value;
            }
        }
        $output = number_format($total, 0, ".", ",");

        return $output;
    }

    public static function total_companies_turnover()
    {
        $total = 0;

        $companies = Shop::whereIn('user_id', verified_sellers_id())->get();

        foreach ($companies as $company) {
            $single_value = $company->user->seller->get_attribute_value_by_id(35);
            if (is_numeric($single_value)) {
                $total += $single_value;
            }
        }

        $output = number_format($total, 0, ".", ",");
        return $output;
    }

    public static function total_production_purchasing()
    {
        $total = 0;

        $companies = Shop::whereIn('user_id', verified_sellers_id())->get();

        foreach ($companies as $company) {
            $single_value = $company->user->seller->get_attribute_value_by_id(22);
            if (is_numeric($single_value)) {
                $total += $single_value;
            }
        }

        $output = number_format($total, 0, ".", ",");

        return $output;
    }
}
