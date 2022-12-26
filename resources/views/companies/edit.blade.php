
@extends('layout')
@section('content')


    <h2 class="title">Company's contact informations</h2>

      <!--'/companies/'.$company->id-->
    <form action="{{route('companies.update',['company'=>$company->id])}}" method="POST" enctype="multipart/form-data">
      
      @method('PUT')
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Your Company Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" placeholder="your company Name"
              value="{{ $company->your_company_name }}" />
          </div>

          <div class="mb-6">
            <label for="phone" class="">Your Company Number</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phone" placeholder="Your Company Number"
              value="{{ $company->Your_company_number }}" />
          </div>
          
          <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">
               Email
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" placeholder="Email" value="{{$company->email}}" />
          </div>

          <div class="mb-6">
            <label for="team_size" class="inline-block text-lg mb-2">
              Team Size
            </label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="team_size" value="{{$company->team_size}}" />
          </div>

          <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
               Description
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
              placeholder="Include tasks, nwa3 lkhdma, , etc"></textarea>
    
    
          <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
              Company Logo
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
    
            <img class="w-48 mr-6 mb-6"
              src="{{$company->logo ? asset('storage/' . $company->logo) : asset('/images/no-image.png')}}" alt="" />
          </div>

          <div class="mb-6">
            <label for="creation_date" class="inline-block text-lg mb-2">
              Creation Date
            </label>
            <input type="date" class="border border-gray-200 rounded p-2 w-full" name="creation_date" value="{{$company->creation_date}}" />
          </div>

          <div class="mb-6">
            <label for="country" class="inline-block text-lg mb-2">
                Select your Country
            </label>
            
            <select required name="country_id" id="country">
                @foreach (\App\Models\Country::all() as $Country)
                <option value="{{ $Country->id }}">{{ $Country->name }}</option>
               @endforeach
            </select>
          </div>

          <div class="mb-6">
            <label for="city" class="inline-block text-lg mb-2">
                Select your City
            </label>
            <select required name="city_id" id="city">
                @foreach (\App\Models\city::all() as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
               @endforeach
            </select>
          </div>

          <div class="mb-6">
            <label for="image_backdrop" class="inline-block text-lg mb-2">
              Company Logo
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name= "image_backdrop" />
    
            <img class="w-48 mr-6 mb-6"
              src="{{$company->image_backdrop ? asset('storage/' . $company->image_backdrop) : asset('/images/no-image.png')}}" alt="" />
  
          </div>
 

        <button type="submit">Save</button>

    </form>
</div>


@endsection