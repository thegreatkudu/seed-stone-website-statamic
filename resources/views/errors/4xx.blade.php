@extends('errors.standalone')

@section('code', $exception->getStatusCode())
@section('board', 'Site')
@section('title', 'Request not completed')
@section('heading', 'This request could not be completed.')
@section('message', 'Something about the link or form was not right. Start again from the home page, or contact us for help.')
