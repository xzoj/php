@extends('master')
@section('page-title')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr class="row">

            <th class="col-md-1">bookId</th>
            <th class="col-md-2">authorid</th>
            <th class="col-md-2">title</th>
            <th class="col-md-2">ISBN</th>
            <th class="col-md-1">pub_year</th>
            <th class="col-md-3">available</th>
        </tr>
        </thead>
        <tbody>
        @foreach($book as $item)
            <tr class="row" >
                <td class="col-md-1">{{$item->bookid}}</td>
                <td class="col-md-2">{{$item->authorid}}</td>
                <td class="col-md-2">{{$item->title}}</td>
                <td class="col-md-2">{{$item->ISBN}}</td>
                <td class="col-md-1">{{$item->pub_year}}</td>
                <td class="col-md-3">{{$item->available}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection