@extends('form')
@section('content')
  @if(empty($data))
    <p> No results found </p>
  @else
    <div class="container">
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-10">

              <div>            
              <img src="{{ $data['logo'] }}" class="companylogo" style="float:left;margin-right:20px;">            
                <h2> Total Review Count </h2>
                {!! $data['review_count'] !!}
              </div>           

          </div>

          <div class="col-md-2"></div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-10">
              <div style="margin-top:50px">
                  <h3> Reviews </h3>              
                  @foreach($data['reviews_list'] as $review)
                    {!! $review !!}
                  @endforeach
                </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>



  @endif
@endsection