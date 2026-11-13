@extends('errors.standalone')

@section('code', '503')
@section('board', 'Works')
@section('title', 'Down for maintenance')
@section('heading', 'We are improving the site.')
@section('message', 'The website will be back in a few minutes. For anything urgent, call +255 758 526 792 or email info@hmxtech.co.tz.')

@section('actions')
    <a href="tel:+255758526792" class="button">Call +255 758 526 792</a>
    <a href="mailto:info@hmxtech.co.tz" class="button is-secondary">Email us</a>
@endsection
