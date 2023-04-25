@extends('template.layouts.layout')
@section('content')
    <div class="container">

        <div class="row ">
            <div id="btn-create">
                <a href="{{ route('companies.services.create', ['company' => $company->id]) }}"
                    class="btn btn-secondary btn-lg  float-right ">Create New
                    Service</a>

                <a href="{{ route('companies.index', ['company' => $company->id]) }}" class="btn btn-secondary ">Back</a>

            </div>
        </div>


        @foreach ($services as $service)
            <div class="row service">
                <div class="col-md-6 image float-left">
                    <img src="{{ '/' . $service->image }}" class="" alt="..." style="">
                </div>
                <div class="col-md-6 float-right">
                    <div class="card-body">
                        <h2>Name : {{ $service->category->name }}</h2>
                        <h5>Service Name :{{ $service->company->name }}</h5>
                        <p class="card-text">Description : {{ $service->description }}</p>
                        <h3 class="card-title">the budget :{{ $service->min_budget }}DH</h3>
                        <h6>City:{{ $service->company->city->name }}</h6>
                        <div class="btns">
                            <a href="{{ route('companies.show', ['company' => $service->company]) }}" class="btn ">Show
                                Company</a>

                            <a href="{{ route('services.edit', $service->id) }}" class="btn ">Edit</a>

                            <form action="{{ route('services.destroy', [$service->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn " style="color:rgb(196, 16, 16)">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
