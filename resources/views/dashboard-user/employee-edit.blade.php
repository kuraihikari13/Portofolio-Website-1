 @extends('dashboard-user/dashboard')

            <!-- partial -->
            @section('content')

 <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">MOMO CHEESE TEA</h4>

                                <form method="post" action="../employee-update/{{ $employee->id }}" class="forms-sample">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Nama Karyawan</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputName1"
                                            value="{{ old('name', $employee->name) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Nomor Kontak</label>
                                        <input type="number" name="phone" class="form-control" id="exampleInputEmail3"
                                            value="{{ old('phone', $employee->phone) }}">
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputCity1">Alamat</label>
                                        <input type="text" name="address" class="form-control" id="exampleInputPhone1"
                                            value="{{ old('address', $employee->address) }}">
                                    </div>
                             
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <a href="../employee" class="btn btn-light">Cancel</a>
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