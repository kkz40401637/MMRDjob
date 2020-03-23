@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <h1>Recent Jobs</h1>
        <table class="table">
            <thead>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>

            </thead>
        <tbody>
           @foreach($jobs as $job)
            <tr>
            <td><img src="{{asset('image/main.jpg')}}" width="80"></td>
            <td><i class="fa fa-map-marker">Position:{{$job->position}}
                <br>
            <i>{{$job->type}}</i>
            </td>
               
               
        <td>Address:{{$job->address}}</td>
        <td>Date:{{$job->created_at->diffForHumans()}}</td>
            <td> 
            <a href="{{route('jobs.show',[$job->id,$job->slug])}}" >
                <button class="btn btn-success btn-sm">Apply</button>
            </a></td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection
