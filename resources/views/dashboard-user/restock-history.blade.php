@extends('dashboard-user/dashboard')

@section('content')
           <div class="main-panel">
                <div class="content-wrapper">
                           
                   
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

            
                <!-- c             </div>
            ontent-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
           
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</div>
</div>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
   <script>
        $(function () {
            $('#table').bootstrapTable()
        })
    </script>
            @endsection