@extends('dashboard-admin/dashboard')

@section('content')
            <div class="main-panel">
                <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">MOMO CHEESE TEA</h4>
                           
                            <form method="POST" action="../update-shop/{{ $shop->shop_id }}" class="forms-sample">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputName1">Nama Pemilik</label>
                                    <input type="text" class="form-control" name="name" id="owner"
                                    value="{{ old('name', $shop->name) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">E-Mail</label>
                                    <input type="email" class="form-control" name="email" id="email"value="{{ old('email', $shop->email) }}">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputCity1">Nomor Telepon</label>
                                    <input type="number" class="form-control" name="phone" id="phone" value="{{ old('phone', $shop->phone) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Alamat</label>
                                   <input type="text" class="form-control" id="phone" name="address" value="{{ old('address', $shop->address) }}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleTextarea1">Luas Bangunan</label>
                                    <input type="number" class="form-control" id="phone" name="luas" value="{{ old('luas', $shop->luas) }}">
                                </div>

                                 <div class="form-group">
                                    <label for="exampleTextarea1">Modal</label>
                                   <input type="number" class="form-control" id="phone" name="modal" value="{{ old('modal', $shop->modal) }}">
                                </div>

                                 <div class="form-group">
                                    <label for="exampleTextarea1">Listrik</label>
                                   <input type="text" class="form-control" id="phone" name="listrik" value="{{ old('listrik', $shop->listrik) }}">
                                </div>

                                 <div class="form-group">
                                    <label for="exampleTextarea1">Lokasi</label>
                                       <select name="lokasi" class="form-control" id="exampleFormControlSelect1">
                                        <option value="{{ old('lokasi', $shop->lokasi) }}" selected>{{ $shop->lokasi }} </option>
                                  <option value="Jalan Lokal">Jalan Lokal </option>
                                  <option value="Jalan Arteri">Jalan Arteri</option>
                                  <option value="Mall atau Swalayan">Mall atau Swalayan</option>
                                
                                </select>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="../shop-table" class="btn btn-light">Cancel</a>
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
