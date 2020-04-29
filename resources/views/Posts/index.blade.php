@extends('layouts.app')

@section('content')
<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>All Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                            {{-- @foreach($items as $item)
                                Member ID: {{ $item['location'] }} <br>

                            @endforeach --}}

                            @foreach ($items as $item)
                            <li class="nav-item"><a href="{{ url('posts/'. $item->id .'') }}" class="nav-link active">{{$item->item}}</a></li>
                            @endforeach
                           
                        </ul>
                        <!--/ End Tab Nav -->
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">

                                    @foreach ($items as $item)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{url('posts/'. $item['id'] .'')}}">
                                                        <img class="default-img" src="{{asset('assets/images/items/'. $item->image.'')}}" alt="#">
                                                        <img class="hover-img" src="{{asset('assets/images/items/'. $item->image.'')}}" alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            {{-- <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> --}}
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">{{ $item['item'] }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{url('posts/'. $item['id'] .'')}}">{{ $item['item'] }}</a></h3>
                                                    <div class="product-price">
                                                        <span>{{ $item['description'] }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                 
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
