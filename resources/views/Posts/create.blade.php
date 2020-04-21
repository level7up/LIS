@extends('layouts.app')



@section('content')
<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="contact-head">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="form-main">
                        <div class="title">
                            <h4>Get in touch</h4>
                            <h3>Write us a message</h3>
                        </div>
                        <form class="form" method="post" action="{{route('item-store')}}">
                            @csrf <!-- {{ csrf_field() }} -->

                            <div class="row">
                                {{-- Name --}}
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Your Name<span>*</span></label>
                                        <input name="name" type="text" placeholder="">
                                    </div>
                                </div>
                                {{-- Phone --}}
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Your Phone<span>*</span></label>
                                        <input name="contact_number" type="text" placeholder="">
                                    </div>	
                                </div>

                                
                                {{-- Location --}}
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Location<span>*</span></label>
                                        <input name="location" type="text" placeholder="">
                                    </div>	
                                </div>
                                {{-- <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-1 js-datepicker" type="text" placeholder="date" name="date">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div> --}}

                                {{-- Item --}}
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Item<span>*</span></label>
                                        <input name="item" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label>Category<span>*</span></label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="category_id">
                                                <option value="" disabled="disabled" selected="selected">Category</option>
                                                @foreach ($cats as $cat)
                                                <option value="{{$cat->id}}"> {{$cat->name}} </option>                                                    
                                                @endforeach
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="col-12">
                                    <div class="form-group message">
                                        <label>Description<span>*</span></label>
                                        <textarea name="description" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Image<span>*</span></label>
                                        <input name="image" type="file" >
                                    </div>	
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="btn ">Publish</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="single-head">
                        <div class="single-info">
                            <i class="fa fa-phone"></i>
                            <h4 class="title">Call us Now:</h4>
                            <ul>
                                <li>+123 456-789-1120</li>
                                <li>+522 672-452-1120</li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-envelope-open"></i>
                            <h4 class="title">Email:</h4>
                            <ul>
                                <li><a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a></li>
                                <li><a href="mailto:info@yourwebsite.com">support@yourwebsite.com</a></li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-location-arrow"></i>
                            <h4 class="title">Our Address:</h4>
                            <ul>
                                <li>KA-62/1, Travel Agency, 45 Grand Central Terminal, New York.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->

@endsection
