<div class="header-social-links d-flex align-items-center">
    @foreach ($socials as $social)
    <a href="{{ $social->link }}" target="_new" class="twitter">{!! $social->icon !!}</a>
    @endforeach
</div>