<div class="mb-3 mb-lg-0 b2b-banner">
    {{-- TODO: Intercept this click with javascript function, like in example on line 25 --}}
    <a href="
                                    {{ qs_url($banner->refer_url, [
    'utm_source' => 'b2bwood',
    'utm_campaign' => $banner->campaign,
    'utm_medium' => 'cpc',
    'utm_content' => $banner->title,
]) }}"
        data-banner-url="{{ route('affiliate_banner.track', encrypt($banner->id)) }}"
        class="d-block text-reset b2b-banner-link">
        <img src="{{ uploaded_asset($banner->banner) }}" data-src="{{ uploaded_asset($banner->banner) }}"
            alt="{{ $banner->title }}" class="img-fluid lazyloaded">
    </a>
</div>
@section('script')
    <script>
        $(".b2b-banner a").on('click', function(e) {
            e.preventDefault();
            let banner_url = $(this).attr('data-banner-url');
            window.location.href = banner_url;
        })

    </script>
@endsection
