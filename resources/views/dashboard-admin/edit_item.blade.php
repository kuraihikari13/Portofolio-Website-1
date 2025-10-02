@extends('dashboard-admin.dashboard')

            <!-- partial -->
            @section('content')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">MOMO CHEESE TEA</h4>

                                <form method="POST" action="../update-item/{{ $item->item_id }}" class="forms-sample">
                                    @csrf

                                    <div class="form-group">
                                        <label for="exampleInputName1">Item Name</label>
                                        <input type="text" name="item_name" class="form-control" id="item_name"
                                            placeholder="" value="{{ old('item_name', $item->item_name) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Harga Pokok</label>
                                        <input type="number" class="form-control" name="item_base_price" id="item_base_price"
                                            placeholder="" value="{{ old('item_base_price', $item->item_base_price) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity1">Harga Eceran</label>
                                        <input type="number" class="form-control" name="item_sale_price" id="item_sale_price"
                                            placeholder="" value="{{ old('item_sale_price', $item->item_sale_price) }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <a href="../item-table" class="btn btn-light">Cancel</a>
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
