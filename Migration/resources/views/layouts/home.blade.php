@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h2>Welcome to the Home Page</h2>

    @php
        $name = 'John Doe';
        $items = ['Apple', 'Banana', 'Orange'];
    @endphp

    <p>Hello, {{ $name }}!</p>

    <h3>Item List:</h3>
    <ul>
        @foreach($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    @if(count($items) > 0)
        <p>There are {{ count($items) }} items available.</p>
    @else
        <p>No items available.</p>
    @endif
@endsection
