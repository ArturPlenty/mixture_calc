@extends('main')

@section('title', 'Calculator')
    
@section('content')
    
    <form method="POST" action="/calculator">

        {{-- csrf = Cross Site Request Forgery--}}
        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <label for="liter">Liter</label>
        <input type="text" id="liter" name="liter">

        <input type="submit" value="Add">

    </form>

    <p>{{session('msg')}}</p>

    {{-- @foreach ($data as $item)
        <h1>{{$item->liquid}}</h1>
    @endforeach --}}

@endsection