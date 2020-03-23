@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="company-profile">
    <img src="{{asset('https://res.cloudinary.com/mmrdgroup/image/upload/v1584093326/close-up-of-cooking-oils_s8a8v3.jpg')}}" style="width: 100%">
        <div class="company-desc">
            <img src="https://res.cloudinary.com/mmrdgroup/image/upload/v1584351916/2_sdpgyd.png" width="100">
        <p>{{$company->description}}</p>
            <h1>{{$company->cname}}</h1>
            <p>Slogan-{{$company->slogan}}<br>
                Address-{{$company->address}}<br>
                Phone-{{$company->phone}}<br>
                Website-{{$company->website}}
             </p>
    </div>
    </div>
</div>
@endsection
