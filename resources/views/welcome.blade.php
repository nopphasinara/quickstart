@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <h1>Listing Types</h1>

      <ul class="list-unstyled">
        @foreach ($listingTypes as $index => $listingType)
          <li><a href="{!! $listingType->slug !!}">{!! $listingType->name !!}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
