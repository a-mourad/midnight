@extends('layout')
@section('content')
    <h2>change view</h2>

    <div class="card" style="width: 18rem;">
        <a href="{{ route('companies.create') }}" class="btn btn-primary">Create New Company</a>
        @foreach ($companies as $company)
            <div class="row">
                <img src="{{ '/' . $company->logo }}" class="card-img-top" alt="...">
                <img src="{{ '/' . $company->image_backdrop }}" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">{{ $company->name }}</h5>
                    <h5 class="card-title">{{ $company->phone }}</h5>
                    <h5 class="card-title">{{ $company->email }}</h5>
                    <h5 class="card-title">{{ $company->team_size }}</h5>
                    <p class="card-text">{{ $company->description }}</p>
                    <h5 class="card-title">{{ $company->creation_date }}</h5>
                    <h5 class="card-title">{{ $company->country->name }}</h5>
                    <h5 class="card-title">{{ $company->city->name }}</h5>
                    <h5 class="card-title">{{ $company->creation_date }}</h5>

                    <a href="{{ route('companies.services.index', ['company' => $company]) }}" class="btn btn-primary">Show
                        Services</a>
                    <a href="{{ route('companies.edit', [$company->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('companies.destroy', [$company->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Delete</a>
                    </form>

                </div>
            </div>
        @endforeach
    </div>
@endsection
