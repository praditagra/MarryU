@extends('masteradmin');
        <!-- konten -->
        <div class="content">
            <div class="row">
                <div class="col">
                    <h3 class="description">Edit
                        </h3>
                        
                        <!-- formmmm -->
                        <form method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                            <input type="hidden" name="" value="">
                            <div class="row">
                                <div class="col">
                            </div>
                        
                        </div>
                        <div class="col">
                            <div class="card">
                            <div class="card-body">
                                <div class="pl-lg-4">
                        
                                <!-- nama produk -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="name">Nama Produk
                                        <span class="small text-danger">*</span></label>
                                        <input type="text" id="" class="form-control" name="" value="" >
                                </div>
                            </div>

                            <!-- category -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="name">Product Category<span class="small text-danger">*</span></label>
                                    <select class="form-control" id="" name="">                                                                             
                                                                                <option value="1">Wanita</option>
                                                                                <option value="2">Pria</option>
                                                                                <option value="3">Aksesoris</option>
                                                                                <option value="4">Dekorasi</option>
                                                                            </select>
                                </div>
                            </div>
                        </div>

                        <!-- harga sewa -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="price">Harga sewa<span class="small text-danger">*</span></label>
                                    <input type="number" id="price" class="form-control" name="price" value="" placeholder="input price...">
                                </div>
                            </div>
                        </div>

                        <!-- deskripsi -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="name">Product Description<span class="small text-danger">*</span></label>
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <label class="form-control-label" for="name">Upload Image<span class="small text-danger">*</span></label>
                        <input type="submit" value="Upload Image" name="">

                    </div>

                    <!-- Button -->
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <a href="" class="btn btn-dark">Back</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</form>

                    

                    

                </div>
            </div>
        </div>
        

        <!-- footer -->
        <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
            <div class="row">
                <div class="credits ml-auto">
                    <span class="copyright"> © 2020, made with <i class="fa fa-heart heart"></i> by Group2</span>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>

