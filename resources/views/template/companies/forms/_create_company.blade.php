<div class="" id="form">

    <div class="create-form">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="create-form" id="form">


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form>
                @csrf

                <div class="form-group row">
                    <label for="inputName" class="col-4 col-form-label">Name</label>
                    <div class="col-8">
                        <input type="text" name="name" class="form-control" id="inputName"
                            placeholder="Enter Your Company Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPhone" class="col-4 col-form-label">Phone</label>
                    <div class="col-8">
                        <input type="phone" name="phone" class="form-control" id="inputPhone"
                            placeholder="Enter Your Company Phone Number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <input type="email" name="email" class="form-control" id="inputEmail"
                            placeholder="Enter Your Company Email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDescription" class="col-4 col-form-label">Description</label>
                    <div class="col-8">
                        <textarea rows="4" name="description" class="form-control" id="inputDescription"
                            placeholder="Describe your company"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputCreation" class="col-4 col-form-label">Creation Date</label>
                    <div class="col-8">
                        <input type="date" name="creation_date" class="form-control" id="inputCreation">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputTeam" class="col-4 col-form-label">Team Size</label>
                    <div class="col-8">
                        <input type="number" name="team_size" class="form-control" id="inputTeam"
                            placeholder="Enter Your Team Size">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="countries" class="col-4 col-form-label">Country</label>
                    <div class="col-8">
                        <select class="custom-select custom-select-lg mb-3" name="country_id" id="countries">
                            <option disabled selected value="">Select your Company's Country</option>
                            @foreach ($countries as $Country)
                                <option value="{{ $Country->id }}">{{ $Country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cities" class="col-4 col-form-label">City</label>
                    <div class="col-8">
                        <select class="custom-select custom-select-lg mb-3" name="city_id" id="cities">
                            <option disabled selected value="">Select your Company's City</option>

                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLogo" class="col-4 col-form-label">Company Logo</label>
                    <div class="col-8">
                        <input type="file" name="logo" class="form-control" id="inputLogo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputBackdrop" class="col-4 col-form-label">Company Backdrop</label>
                    <div class="col-8">
                        <input type="file" name="image_backdrop" class="form-control" id="inputBackdrop">
                    </div>
                </div>

                <div class="form-group row modal-footer  ">
                    <div class="col-8 float-right  ">
                        <button type="submit" class="btn btn-primary float-right  ">Create</button>
                        <button type="button" class="btn btn-secondary float-right "
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>


@push('js')
    <script>
        /* nktab code hna*/



        $('form').on('submit', function(event) {
            event.preventDefault();

            // Get form
            var form = $('form')[0];

            // FormData object 
            var data = new FormData(form);

            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "{{ route('companies.store') }}",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 800000,
                success: function(data) {
                    console.log("SUCCESS : ", data);
                },
                error: function(e) {
                    console.log("ERROR : ", e);
                }
            });
        });
    </script>
@endpush
