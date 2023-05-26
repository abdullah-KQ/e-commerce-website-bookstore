 
 @extends('layouts.app')

 @section('title','welcome')

 @section('content')
     
   
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
            <h1 class="text-center">  الكتب الدينية  </h1>
        </div> 
        <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <p class="text-center" style="font-size: 25px"> الكتب المتخصصة في الشريعة الاسلامية  </p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <a class="btn btn-secondary"  href="islamicBook" style="margin-top: 40px"> للتصفح </a>
                </div>
              </div>
              <div class="col-sm-6">
                <img src="img/6847400.jpg" style="height:200px">
              </div> 
            </div>
        </div>
      </div>
    </div>    <div class="col">
      <div class="card">
        <div class="card-header">
            <h1 class="text-center">  الروايات   </h1>
        </div> 
        <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <p class="text-center" style="font-size: 25px">  تصفح مجموعة من الروايات المذهلة  </p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <a class="btn btn-secondary"  href="novels" style="margin-top: 40px"> للتصفح </a>
                </div>
              </div>
              <div class="col-sm-6">
                <img src="img/a-book-g641b9fb1b_1920.png" style="height:200px">
              </div> 
            </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-header">
            <h1 class="text-center"> جميع الكتب  </h1>
        </div> 
        <div class="card-body">
            <div class="row">
              <div class="col-sm-5">
                <p class="text-center" style="font-size: 25px">    جميع الكتب المتاحة في الموقع </p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <a class="btn btn-secondary"  href="allBooks" style="margin-top: 40px"> للتصفح </a>
                </div>
              </div>
              <div class="col-sm-7">
                <img src="img/4184.jpg" style="height:200px; ">
              </div> 
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="margin-top:20px">
    <div class="col">
      <div class="card">
        <div class="card-header">
            <h1 class="text-center">   الكتب التعليمية </h1>
        </div> 
        <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <p class="text-center" style="font-size: 25px"> الكتب المتخصصة في المجال العلمي </p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <a class="btn btn-secondary"  href="educationalBooks" style="margin-top: 40px"> للتصفح </a>
                </div>
              </div>
              <div class="col-sm-6">
                <img src="img/book-magnifying-lens_361816-7064.jpg" style="height:200px; width:190px">
              </div> 
            </div>
        </div>
      </div>
    </div>    <div class="col">
      <div class="card">
        <div class="card-header">
            <h1 class="text-center">   كتب الاطفال </h1>
        </div> 
        <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <p class="text-center" style="font-size: 25px"> الكتب المخصصة للاطفال  </p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <a class="btn btn-secondary"  href="childrenBooks" style="margin-top: 40px"> للتصفح </a>
                </div>
              </div>
              <div class="col-sm-6">
                <img src="img/colorful-books-isolated-white_392895-220251.jpg" style="height:200px">
              </div> 
            </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-header">
            <h1 class="text-center">  كتب الأعمال والاقتصاد </h1>
        </div> 
        <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <p class="text-center" style="font-size: 25px"> الكتب المتخصصة في الأعمال والاقتصاد  </p>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <a class="btn btn-secondary"  href="businessEconomicsBooks" style="margin-top: 40px"> للتصفح </a>
                </div>
              </div>
              <div class="col-sm-6">
                <img src="img/education-reading-concept-open-book-with-different-symbol-doodles_380164-60584.jpg" style="height:200px;width:190px">
              </div> 
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

   @endsection