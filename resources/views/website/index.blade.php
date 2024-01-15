@extends('layouts.website')
@section('header')
<x-hero />
@endsection
@section('main')
<x-about_component />
<x-portfolio />
<x-cta />
<x-clients />
<x-faq />
<x-contact />
@endsection