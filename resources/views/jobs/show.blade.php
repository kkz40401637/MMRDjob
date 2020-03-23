@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
            
		<div class="col-md-6 col-sm-6">
                <div class="card">
			<div class="card-header">{{$job->title}}</div>
			<p>{{$job->description}}</p>
			<p>{{$job->roles}}</p>
        </div>
            </div>
        
		<div class="col-md-6 col-sm-6">
            <div class="card">
            <h3 class="card-header">Shorrt Info</h3>
            <p >Company:<a href="{{route('company.index',[$job->company->id, $job->company->slug])}}">
            {{$job->company->cname}}</a></p>
			<p>Address:{{$job->address}}</p>
            <p>Employment Type:{{$job->type}}</p>
            <p>Position:{{$job->position}}</p>
            <p>Date:{{$job->created_at->diffForHumans()}}</p>
        </div>
        @if(Auth::check()&&Auth::user()->user_type='seeker')
        <button class="btn btn-success" style="width:100%">Apply</button>
        </div>
        @endif
       
    </div>
    <div class="col-md-4">
        
    </div>
</div>	

@endsection
