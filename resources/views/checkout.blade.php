@extends('layouts.app')

@section('title','checkout')

@section('content')
<body class="bg-light">
    <div class="container">

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{$id->Name}}</h6>
          </div>
          <span class="text-muted"> {{$id->Price}} </span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0"> الضريبة </h6>
          </div>
          <span class="text-success">{{$id->Tax}}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span> المجموع </span>
          <strong> {{$id->Total}} </strong>
        </li>
      </ul>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3"> عنوان الفاتورة </h4>
      <form action="/invoic" method="get">
        <input type="hidden" id="BookName" name="BookName" value="{{$id->Name}}"> 
        <input type="hidden" id="Total" name="Total" value="{{$id->Total}}"> 
        <div class="row">
          <div class="col mb-3">
            <label for="FullName"> الاسم الثلاثي </label>
            <input type="text" class="form-control " id="FullName" name="FullName" placeholder=" فلان بن فلان "  required>
          </div>
        </div>

        <div class="mb-3">
          <label for="Email">  الإميل</label>
          <input type="email" class="form-control" id="Email" name="Email" placeholder="you@example.com">
        </div>

        <div class="row">
            <div class="col-md-5 mb-3">
              <label for="City"> المدينة </label>
              <select class="custom-select d-block w-100" id="City" name="City" required>
                <option > اختر  </option>
                <option> الرياض </option>
                <option> جدة  </option>
                <option> مكة </option>
                <option> المدينة المنورة </option>
              </select>
            </div>
          </div>

        <div class="mb-3">
          <label for="Address"> العنوان </label>
          <input type="text" class="form-control" id="Address" name="Address" placeholder="1234 شارع السلام" required>
        </div>

        <hr class="mb-4">

        <button class="btn btn-primary btn-lg btn-block" type="submit"> اتمام عملية الشراء </button>
      </form>
    </div>
  </div>
</div>
@endsection
