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
<div class="container" style="margin-top:50px; margin-bottom:50px;">
    <div class="row">                        
        <div class="row tm-margin-t-big">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="tm-content-box">
                    <img src="assets/img/blogs/blog1.png" alt="Image" class="tm-margin-b-30 img-fluid">
                    <h4 class="tm-margin-b-20 tm-gold-text">Understanding the basics of photography</h4>
                    <p class="tm-margin-b-20">Photography is an art. But before being creative, 
                        you have to master the tool....
                    </p>
                        <a href="#" class="tm-btn text-uppercase">Read More</a>    
                </div>  
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="tm-content-box">
                    <img src="assets/img/blogs/blog2.png" alt="Image" class="tm-margin-b-30 img-fluid">
                    <h4 class="tm-margin-b-20 tm-gold-text">James Clerk Maxwell</h4>
                    <p class="tm-margin-b-20">Scottish physicist best known for his formulation of electromagnetic theory....
                    </p>
                    <a href="#" class="tm-btn text-uppercase">Read More</a>    
                </div>  
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="tm-content-box">
                    <img src="assets/img/blogs/blog3.png" alt="Image" class="tm-margin-b-30 img-fluid">
                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                    <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                    consequat mauris dapibus id. Donec
                    scelerisque porttitor pharetra</p>
                    <a href="#" class="tm-btn text-uppercase">Detail</a>    
                </div> 
            </div> 
                  
        </div>
                        
    </div>
</div>
@endsection