@extends('dashboard-user/dashboard')

@section('content')
           <div class="main-panel">
                <div class="content-wrapper">
                           <div class="card-body pb-0">
                    
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">SHOP ID</p>
                                <h2 class="text-info">{{ $shop->shop_id }}</h2>
                                 
                               

                            </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Alamat</p>
                                       <h5 class="text-info">{{ $shop->address }}</h5>

                                      

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

                        <div class="col-sm-3" style="text-align: right;">
                        <p class="status-summary-ight-white mb-1">Data Pemilik</p>
                            <h2 class="text-info">{{ $shop->name }}</h2>
                           
                            <p class="status-summary-ight-white mb-1">{{ $shop->email }}</p>
                            <p class="status-summary-ight-white mb-1">{{ $shop->phone }}</p>
                        </div>
                        </div>
                    </div>
                   
                    <div class="tab-content tab-content-basic tab">
                        <h2>Absensi</h2>
                        <h5>@php echo date('d - m - Y') @endphp</h5>
                        <table id="table-absen" data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Kontak</th>
                                    <th>Alamat</th>
                                    <th>Keterangan</th>
                              
                                </tr>
                            </thead>
                            <tbody>
                        
                                    @foreach($employee as $key1)
                                
                                    <tr>
                                        <td>{{ $key1->name }}</td>
                                        <td>{{ $key1->phone }}</td>
                                        <td>{{ $key1->name }}</td>
                                        @if($attendance_count > 0)
                                        @foreach($attendance as $key2)
                                        @if ($key2->employee_id === $key1->id)
                                        <td> Hadir </td>
                                        @endif
                                        @endforeach
                                        @else 
                                        <td> Tidak Hadir </td>
                                        @endif    
                                    </tr>
                                
                                @endforeach
                                </tr>
                    
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
    <script>
        $('#btn-absen').click(function (event) {
    var values = [];
    
    $('#table-absen #row-selector:checked').each(function () {
        var rowValue = $(this).closest('tr').find('td.row-value').text();
        values.push(rowValue)
    });
    
    var json = JSON.stringify(values);
    
    alert(json);
});
    </script>
            @endsection