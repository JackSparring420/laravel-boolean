@extends('layouts.main-layout')
@section('content')
    
    <postcards-component user="{{Auth::check()}}"></postcards-component>

@endsection