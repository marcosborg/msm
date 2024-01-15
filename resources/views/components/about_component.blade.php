<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row">
            <div class="col-lg-6" data-aos="zoom-in">
                @if ($about->image)
                <img src="{{ $about->image->getUrl() }}" class="img-fluid" alt="{{ $about->title ?? '' }}">
                @endif
            </div>
            <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                <div class="content pt-4 pt-lg-0">
                    <h3>{{ $about->title ?? '' }}</h3>
                    <p class="fst-italic">
                        {{ $about->subtitle ?? '' }}
                    </p>
                    <div class="about">
                        {!! $about->text ?? '' !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

@section('styles')
<style>
    .about li {
        list-style-type: none;
        padding-left: 25px;
        background-image: url('{{ asset('website/assets/img/check-circle-fill.svg') }}');
        background-repeat: no-repeat;
        background-position: 0 0.2em;
        background-size: 16px 16px;
    }
</style>
@endsection
