@extends('template.layouts.layout')
@section('content')
    <!-- this for search but i need to include without  background page-->

    @push('css')
        @vite(['resources/css/template/companies/create.css'])
    @endpush





    @include('template.companies.forms._create_company')
@endsection
