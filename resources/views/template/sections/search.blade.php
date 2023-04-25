<section class="container" id="cont">
    <div class="row text-align-center justify-content-center">
        <div>
            <h1 class="">Meet Your Wedding Vendor Team.</h1>
            <p>find and book the best Wedding Vendors for your special day.</p>
            <form  class="form-inline md-form mr-auto mb-4" action="{{route('search')}}" method="GET">
                <input class="form-control mr-sm-2" id="search1" type="search" placeholder="title Service"
                    aria-label="Search">
                <input class="form-control mr-sm-2" id="search2" type="search" placeholder="min_budget"
                    aria-label="Search">
                    <select name="category_id" id="category">
                        <option disabled selected>choose category</option>
                  @php
                  $categories = App\Models\Category::all();
                  @endphp          
                        @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{$item->name}}</option> 
                        @endforeach
                    </select>
                <button class="btn btn-dangeer" id="dangeer" type="submit">Search</button>
            </form>
        </div>
    </div>
</section>

