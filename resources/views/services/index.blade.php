
@extends('layout')
@section('content')




<div class="card" style="width: 18rem;">
  <a href="{{route('companies.services.create',['company'=>$company->id])}}" class="btn btn-primary">Create New Service</a>
          @foreach($services as $service)
      <div class="row">
          <img src="{{'/'.$service->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$service->min_budget}}</h5>
            <p class="card-text">{{$service->description}}</p>
            <h5>{{$service->category->name}}</h5>
            <h5>{{$service->company->city->name}}</h5>
            <h5>{{$service->company->name}}</h5>

            <a href="{{route('companies.show',['company' => $service->company])}}" class="btn btn-primary">Show Company</a>
            <a href="{{route('services.edit',$service->id)}}" class="btn btn-primary">Edit</a>
            <form action="{{route('services.destroy',[$service->id])}}" method="POST">
              @csrf
                 @method('DELETE')
                <button type="submit" class="btn btn-primary">Delete</a>
              </form>
          </div>
              
              
      </div>
        @endforeach

</div>

@endsection

