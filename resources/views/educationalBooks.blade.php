@extends('layouts.app')

@section('title','book')

@section('content')
<div class="container">
    <div class="row">  
        @foreach ($Books as $item)
            <div class="col-sm-6">
                <div class="card" style="margin-top: 10px; height:400px">
                    <div class="card-header">
                        <h1 class="text-center"> {{$item->Name}} </h1>
                    </div> 
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="text-center" style="font-size: 25px; color:rgb(212, 6, 6) "> السعر : {{$item->Price}}  </p>
                                <div class="d-grid gap-2 col-6 mx-auto"> 
                                    <a class="btn btn-secondary border "  href="checkout/{{$item->id}}" style="margin-top: 40px; background:#FFD814;"> للشراء </a>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <p class="text-center " style="font-size: 25px"> الكاتب : {{$item->Author}}  </p>
                                <p class="text-center" style="font-size: 25px"> {{$item->Description}}  </p>
                            </div>
                            <div class="col-sm-3">
                                <img src="{{$item->Img}}" style="height:200px">
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
</div>
@endsection