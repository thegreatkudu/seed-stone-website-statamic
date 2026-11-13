@extends('errors.standalone')

@section('code', '419')
@section('board', 'Permit')
@section('title', 'Page expired')
@section('heading', 'This page has expired.')
@section('message', 'The form was open for a long time, so it timed out for your security. Go back, refresh the page and send it again.')

@section('actions')
    <a href="{{ url()->previous() === url()->current() ? '/' : url()->previous() }}" class="button">Go back and try again</a>
    <a href="/" class="button is-secondary">Go to the home page</a>
@endsection
