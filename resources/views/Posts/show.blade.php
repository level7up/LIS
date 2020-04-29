@extends('layouts.app')

@section('content')
<section class="main-page container">
    <div class="main-container col1-layout">
        <div class="main">
            <div class="col-main">
                <div class="product-view">
                    <div class="product-essential ">
                        <div class="row">
                            <!-- view product -->
                            <div class="col-sm-5 col-md-4 col-lg-4">
                                <div class="product-img-box resbaner">
                                    <!-- big images -->
                                    <p  class="product-view-img colorbox">
                                        <img style="margin:5px" id="zoom_image" data-zoom-image="{{asset('assets/images/items/'. $item->image.'')}}" src="{{asset('assets/images/items/'. $item->image.'')}}" alt="view image">
                                        <a href="{{asset('assets/images/items/'. $item->image.'')}}" class="fa fa-search-plus zoom-icon" title=""></a>
                                    </p>
                                    <!-- / big images -->
                                   
                                </div>
                            </div>
                            <!-- / view product -->
                            <!-- product content -->
                            <div class="col-sm-7 col-md-8 col-lg-8">
                                <div class="product-shop">
                                    <div class="products-name">
                                        <li class="nav-link "> <h1>{{$item->item}}</h1></li>
                                    </div>
                                    <div class="ratting-box">
                                       
                                        <div class="product-review">
                                            <ul>
                                                <li>Founded At: {{$item->date}} </li>
                                                <li>Location: {{$item->location}} </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <span class="old-price">Founder: {{$item->name}} </span>
                                        <span class="new-price"></span>

                                    </div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label> Contact Number:  </label>
                                            <span class="editable">{{ $item->contact_number}}</span>
                                        </li>
                                        <li>
                                            <label>availability:</label>
                                           @if ($status == 1)
                                           <span class="editable instock">Item still Not Founded</span>
                                           @else
                                           <span class="editable instock">Item returned</span>
                                           @endif
                                        </li>
                                    </ul>
                                    <!-- button -->
                                    {{-- <div class="product-button padding-30">
                                        <a class="btn btn-button  border" href="#"><i class="fa fa-heart"></i></a>
                                        <a class="btn btn-button  border" href="#"><i class="fa fa-exchange"></i></a>
                                    </div> --}}
                                    <!-- / button -->
                                    <div class="product-discription">
                                        <div class="product-discription-title">Short Description:</div>
                                        <p>{{$item->description}}</p>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                            <!-- / product content -->
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
