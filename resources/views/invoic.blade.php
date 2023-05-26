@extends('layouts.app')

@section('title','invoic')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body mx-4">
          <div class="container">
            <p class="my-5 mx-5" style="font-size: 30px;"> شكرا للشرائك من المتجر </p>
            <div class="row">
              <ul class="list-unstyled">
                <li class="text-black">{{$row['FullName']}}</li>
                <li class="text-muted mt-1"><span class="text-black">Invoice</span> #{{$Books->id}}</li>
                <li class="text-black mt-1">{{$Books->created_at}}</li>
              </ul>
              <hr>
              <div class="col-xl-10">
                <p>اسم الكتاب</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">{{$row['BookName']}}
                </p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>السعر</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">{{$row['Total']}}
                </p>
              </div>
              <hr>
            </div>
            <div class="row text-black">
      
              <div class="col-xl-12">
                <p class="float-end fw-bold">المجموع: {{$row['Total']}}
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
      
          </div>
        </div>
      </div>
</div>

@endsection