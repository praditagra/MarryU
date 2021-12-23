@extends('Master');

@section('page')
Home
@endsection

@section('webpage')

<!-- product section -->
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>

<!-- produk 1 -->
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">
                <div class="option_container">
                    <!-- pilihan hover -->
                    <div class="options">
                        <a href="" class="option1">
                            Add to Cart
                        </a>
                        <a href="" class="option2">
                            Rent Now
                        </a>
                    </div>
                </div>
                <div class="img-box">
                    <img src="{{asset('Template/images/p1.png')}}" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Men's Shirt
                    </h5>
                    <h6>
                        $75
                    </h6>
                </div>
            </div>
            </div>

            <!-- pagination -->
            <div class="pagination p1 text-center">
                <ul>
                    <a href="#">
                        <li></li>
                    </a>
                    <a class="is-active" href="#">
                        <li>1</li>
                    </a>
                    <a href="#">
                        <li>2</li>
                    </a>
                    <a href="#">
                        <li>3</li>
                    </a>
                    <a href="#">
                        <li>4</li>
                    </a>
                    <a href="#">
                        <li>5</li>
                    </a>
                    <a href="#">
                        <li>6</li>
                    </a>
                    <a href="#">
                        <li>></li>
                    </a>
                </ul>
            </div>
        </div>


@endsection