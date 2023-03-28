@extends('layout')
@section('content')




    <h2 class="title">Company's contact informations</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="/companies" method="POST" enctype="multipart/form-data">
        @csrf


        
          <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Your Company Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" id="company"
              value="{{old('your_company_name')}}" />
          </div>

          <div class="mb-6">
            <label for="phone" class="inline-block text-lg mb-2">Your Company Number</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phone" placeholder="Your Company Number"
              value="{{old('your_company_number')}}" />
          </div>
          
          <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">
              Email
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
    
          </div>

          <div class="mb-6">
            <label for="team_size" class="inline-block text-lg mb-2">
              Team Size
            </label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="team_size" value="{{old('team_size')}}" />
    
          </div>

          <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
               Description
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
              placeholder="Include tasks, nwa3 lkhdma, , etc">{{old('description')}}</textarea>
    
          </div>
    
          <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
              Company Logo
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

          </div>

          <div class="mb-6">
            <label for="creation_date" class="inline-block text-lg mb-2">
              Creation Date
            </label>
            <input type="date" class="border border-gray-200 rounded p-2 w-full" name="creation_date" value="{{old('creation_date')}}" />
    
          </div>

          <div class="mb-6">
            <label for="test"  class="inline-block text-lg mb-2">
                Select your Country
            </label>
    @php
        $cites = \App\Models\City::all();
    @endphp
            <select required name="country_id" id="test">
                @foreach ($countries as $Country)
                <option value="{{ $Country->id }}">{{ $Country->name }}</option>
               @endforeach
            </select>
    
          </div>

          <div class="mb-6">
            <label for="city" class="inline-block text-lg mb-2"></label>
            <select required name="city_id" id="city">
                @foreach ($cites as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
               @endforeach
            </select>
          </div>

          <div class="mb-6">
            <label for="image_backdrop" class="inline-block text-lg mb-2">
              image_backdrop
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image_backdrop" />
          </div>
 

        <button type="submit">Save</button>

    </form>
</div>


@endsection