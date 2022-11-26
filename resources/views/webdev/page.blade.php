@extends('layouts.app')

@section('title')

@endsection

@section('content')

    <x-description :job="$job"/>

    <x-c-v :job="$job"/>

@endsection