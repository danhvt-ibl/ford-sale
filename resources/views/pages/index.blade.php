@extends('layouts.master')
@section('title')
    <title>Bình Thuận Ford - 0902 473 757 - Tiến Bình Thuận Ford Việt Nam</title>
@endsection

@section('main')
    <section class="list-car">
        <div class="container">
            <div class="list_product_focus">
                <div id="owl-demo" class="owl-carousel owl-theme">                    
                    <div class="item"> 
                        <div class="img">
                            <a href="/ford-ecosport.html">
                                <img src='http://fordvietnam.com/vnt_upload/product/Ford_Ecosport/FORD-ECOSPORT-TITANIUM.jpg' alt='Ford Ecosport' />
                            </a>
                        </div>
                        <h3>
                            <a href="/ford-ecosport.html">Ford Ecosport</a>
                        </h3>
                        <div class="price">Call</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.pop-menu')
@endsection

@section('scripts')
       
@endsection