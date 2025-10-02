 @extends('dashboard-admin/dashboard')

            <!-- partial -->
            @section('content')

 <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">MOMO CHEESE TEA</h4>

                                <form method="post" action="insert-item" class="forms-sample">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Item Name</label>
                                        <input type="text" name="item_name" class="form-control" id="exampleInputName1"
                                            placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Item Base Price</label>
                                        <input type="number" name="item_base_price" class="form-control" id="exampleInputEmail3"
                                            placeholder="Item Base Price">
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputCity1">Item Sale Price</label>
                                        <input type="number" name="item_sale_price" class="form-control" id="exampleInputPhone1"
                                            placeholder="Item Sale Price">
                                    </div>
                             
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <a href="item-table" class="btn btn-light">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">

                    </div>
                </footer>
                <!-- partial -->
            </div>
        @endsection