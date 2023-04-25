@extends('layout')
@section('content')
    <div class="card" style="width: 18rem;">
        <h1>compay name:{{ $company->name }}</h1>
        <br>
        <img src="{{ '/' . $company->logo }}" class="card-img-top" alt="...">
        <br>
        <h5>company nulber :{{ $company->Your_company_number }}</h5>
        <br>
        <h2>email:{{ $company->email }}</h2>
        <br>
        <h5>team_size{{ $company->team_size }}</h5>
        <br>
        <p>description:{{ $company->description }}</p>
        <a href="{{ route('companies.services.index', ['company' => $company]) }}" class="btn btn-primary">Back</a>

    </div>


    <h1>show from old comapnies</h1>
@endsection
