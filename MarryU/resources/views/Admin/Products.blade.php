@extends('Masteradmin')
@section('products')
active
@endsection
@section('konten')

        <!-- konten -->
        <div class="content">
            <div class="row">
                <div class="col">
                    <h3 class="description">Products
                        <a href="/admin/products/create" class="btn btn-dark">Tambah Products
                        </a></h3>
                                        
                        <!-- card -->
                        <div class="card-deck">
                            <div class="card" style="width: 20rem; height:auto;">
                            <img src="{{asset('Template/images/p1.png')}}" style="width:15rem;height:auto; display:block; margin:auto;" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Men's Shirt</h5>
                                <p class="card-text">$75</p>
                                <a href="/admin/products/update" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                        </div>

                        <div class="card" style="width: 20rem; height:auto;">
                        <img src="{{asset('Template/images/p1.png')}}" style="width:15rem;height:auto; display:block; margin:auto;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Men's Shirt</h5>
                            <p class="card-text">$75</p>
                            <a href="/admin/products/update" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                        </div>

                        <div class="card" style="width: 20rem; height:auto;">
                        <img src="{{asset('Template/images/p1.png')}}" style="width:15rem;height:auto; display:block; margin:auto;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Men's Shirt</h5>
                            <p class="card-text">$75</p>
                            <a href="/admin/products/update" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                        </div>

                        <div class="card" style="width: 20rem; height:auto;">
                        <img src="{{asset('Template/images/p1.png')}}" style="width:15rem;height:auto; display:block; margin:auto;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Men's Shirt</h5>
                            <p class="card-text">$75</p>
                            <a href="/admin/products/update" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        



@endsection
