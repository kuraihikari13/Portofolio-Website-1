@extends('dashboard-admin/dashboard')

@section('content')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="tab-content tab-content-basic tab">
                        <h5>PERMINTAAN JADI MITRA</h5>
                        <table  data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Telepon</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>APPROVE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($temp_shops as $temp)
                                <tr>
                           
                                    <td>{{ $temp->name }}</td>
                                    <td>{{ $temp->phone }}</td>
                                    <td>{{ $temp->email }}</td>
                                    <td>{{ $temp->address }}</td>
                                    <td style="text-align: center;">
                                        <a class=" btn btn-primary btn-sm mdi  mdi-check" href="approveShop/{{ $temp->shop_id }}">
                                        </a> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    
                    
                    
                    
                    </div>
                    <div class="tab-content tab-content-basic tab">
                        <h5>PERMINTAAN TAMBAH STOK</h5>
                        <table data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                    <th>Owner</th>
                                    <th>Nomor Kontak</th>
                                    <th>Alamat</th>
                                    <th>Item</th>
                                    <th>Tanggal Permintaan</th>
                                    <th>Approve</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($restock as $key1)
                                <tr>
                                    @foreach($shops as $key2)
                                    @if($key2->shop_id == $key1->shop_id)
                                    <td>{{ $key2->name }}</td>
                                    <td>{{ $key2->phone }}</td>
                                    <td>{{ $key2->address }}</td>
                                    @endif
                                    @endforeach
                                    <td>
                                    @foreach($restock_detail as $key2)
                                    @if($key2->req_id == $key1->req_id)
                                    @foreach($item_lists as $key3)
                                    @if($key3->item_id == $key2->item_id)
                                    {{ $key3->item_name }} <br>
                                    @endif
                                    @endforeach
                                    @endif
                                    @endforeach
                                    </td>
                                    <td>{{ $key1->created_at }}</td>

                                    <td style="text-align: center;">
                                        <a class=" btn btn-primary btn-sm mdi  mdi-check" href="approve-restock/{{ $key1->req_id }}">
                    
                                        </a>
                                        <a value="delete" href="temp-delete/{{ $shop->shop_id }}" class="btn btn-danger btn-sm mdi mdi-delete"></a>
                                       
                
                                    </td>
                                </tr>
                                @endforeach
                    
                    
                            </tbody>
                        </table>
                    
                    
                    
                    
                    </div>
                <!-- c             </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
           
                </footer>
                <!-- partial -->
            </div>
            @endsection