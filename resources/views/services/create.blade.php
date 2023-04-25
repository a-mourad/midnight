@extends('layout')
@section('content')


    <h1>Company's Services</h1>
    <h2>old create</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container_servieces">

        <form action="{{ route('companies.services.store', ['company' => $company->id]) }}" method="POST"
            enctype="multipart/form-data">

            @csrf

            <h2> from here</h2>
            <div class="mb-6">
                <label for="service" class="inline-block text-lg mb-2">Your Company Services</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" id="service"
                    placeholder="servieces" value="{{ old('your_company_service') }}" />
            </div>

            <div class="mb-6">
                <select name="category_id" id="category">
                    <option disabled selected>choose category</option>
                    @php
                        $categories = App\Models\Category::all();
                    @endphp
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    description
                </label>
                <textarea name="description" id="" cols="30" rows="10" placeholder="enter description"></textarea>
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">
                    uplod image
                </label>
                <input type="file" name="image">
            </div>

            <div class="mb-6">
                <label for="min_budget" class="inline-block text-lg mb-2">
                    min budget
                </label>
                <input type="number" name="min_budget" placeholder="Min Budget">
            </div>
    </div>
    <div class="btns">
        <button type="submit">Save</button>

    </div>
    </form>


    </div>

@endsection
