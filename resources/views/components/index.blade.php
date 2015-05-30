@extends('layouts.default')

@section('content')

    <h1>Components</h1>
    <a href="{{route('components.create')}}" class="btn btn-primary pull-right">New</a>
    <div class="table-index">
    <table class="table table-bordered table-hover table-striped">
    <tr>
        <th>Component Name</th>
        <th>Component Description</th>
        <th>Created</th>
    </tr>
    @foreach($components as $component)
        <tr>
            <td><a href="{{route('components.show', [$component->id])}}">{{$component->name}}</a></td>
            <td>{{$component->description}}</td>
            <td>{{$component->creation_date}}</td>
        </tr>
    @endforeach
    </table>
    </div>
@stop