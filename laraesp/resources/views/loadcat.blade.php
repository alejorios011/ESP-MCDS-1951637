@if (isset($cat))
<h3 class="h3"> <i class="fa fa-list"></i> {{ $cat->name }} </h3>
<hr>
<div class="row">
  @foreach ($artsbycats as $abc)
    <div class="col-xl-3 mb-4">
      <div class="card" style="height: 26rem">
          <img src="{{ asset($abc->image) }}" class="card-img-top">
          <div class="card-body">
            <span class="badge badge-dark"> {{ $abc->category->name }} </span>
            <h5 class="card-title">{{ $abc->name }}</h5>
            <p class="card-text">{{ $abc->content }}</p>
            <a href="#" class="btn btn-danger">
              Ver <i class="fa fa-plus"></i>
            </a>
          </div>
        </div>
      </div>
  @endforeach
</div>
@else    
  @foreach ($cats as $cat)
    <h3 class="h3"> <i class="fa fa-list"></i> {{ $cat->name }}</h3>
    <hr>
    <div class="row">
      @foreach ($artsbycats as $abc)
        @if ($abc->category_id == $cat->id)
          <div class="col-xl-3 mb-4">
            <div class="card" style="height: 26rem">
              <img src="{{ asset($abc->image) }}" class="card-img-top">
              <div class="card-body">
                <span class="badge badge-dark"> {{ $abc->category->name }} </span>
                <h5 class="card-title">{{ $abc->name }}</h5>
                <p class="card-text">{{ $abc->content }}</p>
                <a href="#" class="btn btn-danger"> Ver <i class="fa fa-plus"></i></a>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  @endforeach
@endif