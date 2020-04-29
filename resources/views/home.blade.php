@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('assets/css/main-2.css') }}">
@section('content')
<section id="banner">
    <div class="inner">
        <header>
            <h1>This is Losing</h1>
            <p>Aliquam libero augue varius non odio nec faucibus congue<br />felis quisque a diam rutrum tempus massa accumsan faucibus purus.</p>
        </header>
        <a href="#main" class="button big scrolly">Learn More</a>
    </div>
</section>
<section class="wrapper style1">
    <div class="inner">
        <header class="align-center">
            <h2>Aliquam ipsum purus dolor</h2><br>
            <p>Cras sagittis turpis sit amet est tempus, sit amet consectetur purus tincidunt.</p>
        </header>
        <div class="flex flex-3">
            <div class="col align-center">
                <div class="image round fit">
                    <img src="{{asset('assets/images/temps/pic03.jpg')}}" alt="" />
                </div>
                <p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
                <a href="#" class="button">Learn More</a>
            </div>
            <div class="col align-center">
                <div class="image round fit">
                    <img src="{{asset('assets/images/temps/pic05.jpg')}}" alt="" />
                </div>
                <p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
                <a href="#" class="button">Learn More</a>
            </div>
            <div class="col align-center">
                <div class="image round fit">
                    <img src="{{asset('assets/images/temps/pic04.jpg')}}" alt="" />
                </div>
                <p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
                <a href="#" class="button">Learn More</a>
            </div>
        </div>
    </div>
</section>

@endsection 
