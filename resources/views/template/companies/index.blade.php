@extends('template.layouts.layout')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div id="btn-create">
                <button type="button" class="btn btn-secondary btn-lg  float-right " data-bs-toggle="modal"
                    data-bs-target="#createCompanyModal">
                    Create New Company
                </button>
            </div>
        </div>
        <div class="modal fade" id="createCompanyModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content form-control-md">
                    <div class="modal-header" id="header-modal">
                        <h5 class="modal-title" id="createCompanyModalLabel">By creating a company , you will be able to
                            list your services</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body ">
                        <!-- Include the create-form.blade.php file here -->
                        @include('template.companies.forms._create_company')

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex align-items-center justify-content-center">
        <div class="create-form">
            <div class="row" id="costume-card">
                @foreach ($companies as $company)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('companies.show', [$company->id]) }}">
                                    <img src="{{ '/' . $company->logo }}" class="card-img-top" alt="...">
                                    <h5 class="card-title">{{ $company->name . '-' . $company->city->name }}</h5>
                                </a>
                            </div>

                            <div class="card-footer small">
                                <a href="{{ route('companies.edit', [$company->id]) }}" class="btn ">Edit</a>
                                <form action="{{ route('companies.destroy', [$company->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn" style="color:white">Delete</button>
                                </form>
                                <a href="{{ route('companies.services.index', ['company' => $company]) }}"
                                    class="btn off">Show
                                    Services</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    </div>
@endsection
