@extends('layouts.front')


@section('content')


<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210"
    style="background-image: url(/assets/img/shop/shop.png)">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2> shop grid</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li>shop grid</li>
            </ul>
        </div>
    </div>
</div>


<div class="shop-page-wrapper shop-page-padding ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-sidebar mr-50">
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Search Products</h3>
                        <div class="sidebar-search">
                            <form action="#">
                                <input placeholder="Search Products..." type="text">
                                <button><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">Filter by Price</h3>
                        <div class="price_filter">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="label-input">
                                    <label>price : </label>
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-categories">
                            @include('_category-list')
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-product-wrapper res-xl res-xl-btn">
                    <div class="shop-bar-area">
                        <div class="shop-bar pb-60">
                            <div class="shop-found-selector">
                                <div class="shop-found">
                                    <p><span>{{$products->total()}}</span> Products Found </p>
                                </div>

                            </div>

                        </div>
                        <div class="shop-product-content tab-content">
                            <div id="grid-sidebar1" class="tab-pane fade active show">
                                <div class="row">
                                    @foreach($products as $product)
                                            @include('product._single_product')
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                    {{$products->appends(['query'=>request('query')])->render()}}
            </div>
        </div>
    </div>
</div>

@endsection
