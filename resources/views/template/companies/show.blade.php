@extends('template.layouts.layout')
@section('content')
    <!-- this for search but i need to include without  background page-->

    @push('css')
        @vite(['resources/css/template/company_form.css'])
    @endpush


    <div class="container" id="show-card">

        <div class="row service">
            <div class="col-md-6 card-body float-left">
                <img src="{{ '/' . $company->logo }}" class="card-img-top" alt="... " width="600px">


            </div>
            <div class="col-md-6 float-right">
                <div class="card-body">
                    <h1>compay name:{{ $company->name }}</h1>
                    <h3>company Number :{{ $company->phone }}</h3>
                    <h4>email:{{ $company->email }}</h4>
                    <h5>team_size : {{ $company->team_size }}</h5>
                    <h5>
                        <p>{{ $company->description }}</p>
                    </h5>
                </div>
                <div class="row" id="btn-create">
                    <a href="{{ route('companies.services.index', ['company' => $company]) }}" class="btn btn-secondary md"
                        id="">Back</a>
                </div>
                <div class=" " id="btn">
                    <button class="fab fa-facebook"></i></button>
                    <button class="fab fa-google"></i></button>
                    <button class="fab fa-twitter"></i></button>
                </div>
            </div>
        </div>


    </div>
@endsection

<!--

    <section id="page-banner">
        <div class="container">
            <div class="banner-dtl text-center">
                <div class="banner-heading">
                    <h2>Company Single</h2>
                </div>
                <div class="breadcrumb-block">
                    <span><a title="Home" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                    </span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem">
                        <span property="name">Company Single</span></span>
                </div>
            </div>
        </div>
    </section>
-->
