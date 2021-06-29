@extends('frontend.layouts.company-profile-layout')

@section('company_profile')


    <x-company-tabs :seller="$seller" type="news"></x-company-tabs>

    <div class="row">
        <div class="col-12 mb-3">
            <h1>{{ translate('Products of ') }} {{ $seller->user->shop->name }}
                <hr>
        </div>
    </div>
    <div class="company-pr-item ">
        <div class="row mx-md-n2 mb-3">


            <div class="col">
                <div class="row">
                    @foreach ($seller->user->products->where('published', 1) as $key => $product)
                        <div class="col-md-4">
                            @include('frontend.partials.product_box_1',['product' => $product])
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    </div>
    {{-- TODO: For company owner add a link to submit the PR content --}}
    <!-- End Card -->
@endsection
