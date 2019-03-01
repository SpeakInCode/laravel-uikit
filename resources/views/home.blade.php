@extends('layouts.app')

@section('content')

  <div class="uk-container">
    <h1 class="uk-text-center">Home</h1>

    <div class="uk-child-width-expand uk-grid-small" uk-grid uk-sortable>
      <div>
        <div class="uk-card uk-card-default uk-card-body">Item 1</div>
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">Item 2</div>
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">Item 3</div>
      </div>
    </div>

  </div>

@endsection
