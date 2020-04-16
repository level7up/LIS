@extends('layouts.app')

@section('content')
@foreach ($posts as $item)
<h6>{{$item->name}}</h6>
    
@endforeach
@endsection
