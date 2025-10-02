@extends('dashboard-admin/dashboard')

@section('content')
            <div class="main-panel">

                    
                <div class="tab-content tab-content-basic">
                    <div class="card-body pb-0">
                    
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">ALAMAT</p>
                                 <p class="status-summary-ight-white mb-1">{{ $shop->address }}</p>

                            </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Lokasi</p>
                                        <h2 class="text-info">{{ $shop->lokasi }}</h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Dana</p>
                                       Rp <h2 class="text-info">{{ $shop->modal }} Juta</h2>

                                      

                                    </div>

                        <div class="col-sm-3" style="text-align: right;">
                        <p class="status-summary-ight-white mb-1">OWNER</p>
                            <h2 class="text-info">{{ $shop->name }}</h2>
                           
                            <p class="status-summary-ight-white mb-1">{{ $shop->email }}</p>
                            <p class="status-summary-ight-white mb-1">{{ $shop->phone }}</p>
                        </div>
                        <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Tegangan Listrik</p>
                                        <h2 class="text-info">{{ $shop->listrik }} Kwh</h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Kapasitas Karyawan</p>
                                        <h2 class="text-info">{{ $shop->staff }}</h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Karyawan Terdaftar</p>
                                        <h2 class="text-info">{{ $employee_count }}</h2>
                                    </div>
                                    <div class="col-sm-3">
                                        @if($status == 'BRONZE')
                                        <p class="status-summary-ight-white mb-1">Tier</p>
                                        <h2 class="text-info">{{ 
                                        $status }}</h2>
                                        @endif
                                        @if ($status == 'SILVER')
                                        <p class="status-summary-ight-white mb-1">Tier</p>
                                        <h2 class="text-secondary">{{ 
                                        $status }}</h2>
                                        @endif
                                        @if ($status == 'GOLD')
                                        <p class="status-summary-ight-white mb-1">Tier</p>
                                        <h2 class="text-warning">{{ 
                                        $status }}</h2>
                                        @endif
                                    </div>
                        </div>
                    </div>
                    <div class="tab-content tab-content-basic tab">
                        <table id="table-absen" data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <h4 class="card-title">Karyawan</h4>
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Kontak</th>
                                    <th>Alamat</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employee as $key)
                                <tr>
                                    <td>{{ $key->name }}</td>
                                    <td>{{ $key->phone }}</td>
                                    <td>{{ $key->address }}</td>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    <div class="tab-content tab-content-basic tab">
                        <h5>Permintaan Stok Barang</h5>
                        <table id="table-absen" data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Status</th>
                                    <th>Tanggal Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($restock as $key1)
                                
                                    <tr>
                                        <td>
                                        @foreach($lists as $key2)
                                        @if($key2->req_id == $key1->req_id)
                                        @foreach($item_lists as $key3)
                                        @if($key3->item_id == $key2->item_id)
                                        {{ $key3->item_name }}
                                        @endif
                                        @endforeach
                                        <br>
                                        @endif
                                        @endforeach
                                        </td>
                                        <td>{{ $key1->created_at }}</td>
                                        @if($key1->approved == 1)
                                        <td>Terverifikasi</td>
                                        <td>{{ $key1->updated_at }}</td>
                                        @else
                                        <td>Menunggu verifikasi</td>
                                        <td>Menunggu verifikasi</td>
                                        @endif
                                        
                                    </tr>
                                
                                @endforeach
                                
                                </button>
                    
                            </tbody>

                        </table>
                  
                    
                    
                    
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