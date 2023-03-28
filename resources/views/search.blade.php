
@extends('layout')
@section('content')


<form  class="form-inline md-form mr-auto mb-4" action="{{route('search')}}" method="GET">
    <div class="form-row">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        
        <label for="title" class="inline-block text-lg mb-2">title</label>
            <input type="text" class="form-control mr-sm-2" 
                name="title" id="title"  placeholder="title Service"/> 
        
        <label for="min_budget" class="inline-block text-lg mb-2">min_budget</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" 
                name="min_budget" id="min_budget"  placeholder="min_budget"/> 

                <div class="mb-6">
                    <select name="category_id" id="category">
                        <option disabled selected>choose category</option>
                  @php
                  $categories = App\Models\Category::all();
                  @endphp          
                        @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{$item->name}}</option> 
                        @endforeach
                    </select>
                   </div>  
    
    <div class="btns">
        <button type="submit">Search</button>
    </div>
    </div>
    </div>

    <div class="container">
        @foreach($taz as $service)
        <div class="card" style="width: 18rem;">
            <div class="row">
                <img src="{{'/'.$service->image}}" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">{{$service->min_budget}}</h5>
                  <p class="card-text">{{$service->description}}</p>
                  <h5>{{$service->category->name}}</h5>
                  <h5>{{$service->company->city->name}}</h5>
                  <h5>{{$service->company->name}}</h5>
     
             </div>      
            </div>
         @endforeach
      </div>
    </div>
    
</form>





  @endsection
