<div class="d-flex align-items-center justify-content-center">

    <div class="col-8  create-form">
        <div>
            <h2 class="title">Enter your service's infos</h2>
            <p>By creating a Servive , you will be able to list your services</p>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('companies.services.store', ['company' => $company->id]) }}" method="POST"
            enctype="multipart/form-data">

            @csrf
            <div class="form-group row">
                <label for="title" class="col-4 col-form-label">Title</label>
                <div class="col-8">
                    <input type="text" name="title" class="form-control" id="title"
                        placeholder="Enter Service Title">
                </div>
            </div>

            <div class="form-group row">
                <label for="countries" class="col-4 col-form-label">Category</label>
                <div class="col-8">
                    <select class="custom-select custom-select-lg mb-3" required name="category_id" id="category">
                        <option disabled selected value="">Select your Category</option>
                        @php
                            $categories = App\Models\Category::all();
                        @endphp
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDescription" class="col-4 col-form-label">Description</label>
                <div class="col-8">
                    <textarea rows="2" name="description" class="form-control" id="inputDescription"
                        placeholder="Describe your company"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputImage" class="col-4 col-form-label">Service Image</label>
                <div class="col-8">
                    <input type="file" name="image" class="form-control" id="inputLogo">
                </div>
            </div>

            <div class="form-group row">
                <label for="min_budget" class="col-4 col-form-label">Min Budget</label>
                <div class="col-8">
                    <input type="number" name="min_budget" class="form-control" id="min_budget"
                        placeholder="Enter Your Min Budget">
                </div>
            </div>
            <div class="btns">
                <button type="submit">Save</button>

            </div>

        </form>
    </div>
</div>
