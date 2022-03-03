@extends('layouts.front')

@section('content')


<!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel" style="
    z-index:0;
    position: relative;
    color: #666;">
<!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example2" data-slide-to="1"></li>
    <li data-target="#video-carousel-example2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
      
    <!-- First slide -->
    <div class="carousel-item active ">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <video class="video-fluid embed-responsive embed-responsive-4by1" style="height:50%; width:100%" autoplay loop muted>
          <source src="assets/img/videos/Capture.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-indigo-light"></div>
      </div>
    </div>
    <!-- Second slide -->
    <div class="carousel-item ">
      <!--Mask color-->
      <div class="view  ">
        <!--Video source-->
        <video class="video-fluid embed-responsive embed-responsive-4by1" style="height:50%; width:100%" autoplay loop muted>
          <source src="assets/img/videos/Capture3.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-purple-slight"></div>
      </div>
    </div>
    <!-- Third slide -->
    <div class="carousel-item ">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <video class="video-fluid embed-responsive embed-responsive-4by1" style="height:50%; width:100%" autoplay loop muted>
          <source src="assets/img/videos/Capture2.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
    <!-- /.Third slide -->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <div class="categories-search-wrapper" style="    width: 33%;
    position: absolute;
    right: 0;
    z-index:1;
    top: 11%;
    height: 46px;">
      <div class="categories-wrapper" style="width:100% ;">
          <form action="{{route('products.search')}}" method="GET">
              <input name="query" placeholder="Enter Your key word" type="text" style="width:65%">
              <button type="submit" > Search </button>
          </form>
      </div>
  </div>

  <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<div class="electro-product-wrapper wrapper-padding pt-95 pb-45">

    <div class="container-fluid">

        <div class="section-title-4 text-center mb-40">
            <h2>Top Products</h2>
        </div>

        <div class="top-product-style">

            <div>

                <div id="electro1">
                    <div class="custom-row-2">
                    <div class="categories-menu">

                        <div class="category-heading">
                            <h3> All Departments <i class="pe-7s-angle-down"></i></h3>
                        </div>

                        @include('_category-list')

                        </div>
                        @foreach($allProducts as $product)
                            @include('product._single_product')
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection
