@extends('layout')
@section('content')


<a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">

    <h3 class="text-2xl mb-2">
        {{$x->your_company_service}}
      </h3>
<br>
      <img class="w-48 mr-6 mb-6"
        src="{{ ('/'. $x->image)  }}" alt="" />

     
      <div class="text-xl font-bold mb-4">{{$x->company}}</div>

      <x-listing-tags :tagsCsv="$listing->tags" />

      <div class="text-lg my-4">
        <i class="fa-solid fa-location-dot"></i> {{$x->location}}
      </div>
      
      <div class="border border-gray-200 w-full mb-6"></div>
      <div>
        <h3 class="text-3xl font-bold mb-4">Job Description</h3>
        <div class="text-lg space-y-6">
          {{$listing->description}}

          <a href="mailto:{{$listing->email}}"
            class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
              class="fa-solid fa-envelope"></i>
            Contact Employer</a>

          <a href="{{$listing->website}}" target="_blank"
            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>
            Visit Website</a>
        </div>
      

@endsection