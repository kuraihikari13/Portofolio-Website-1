@extends('dashboard-user/dashboard')

@section('content')


           <div class="main-panel">
            @foreach($attendance as $key1)
                <div class="content-wrapper">
                        <div class="card-body pb-0">
                    
                        
                    </div>
                   
                    <div class="tab-content tab-content-basic tab">
                        <div class="row">
                            <div class="col-sm-2">
                            <h2>Absensi</h2>
                                <h3 class="text-alert">{{ $key1->date_clock_in  }}</h3>
                        </div>
                            <div class="col-sm-2">
                                <p class="status-summary-ight-white mb-1">Kapasitas Karyawan</p>
                                <h2 class="text-info">{{ $employee_total }}</h2>
                            </div>
                            <div class="col-sm-2">
                                <p class="status-summary-ight-white mb-1">Karyawan Terdaftar</p>
                                <h2 class="text-info">{{ $employee_count }}</h2>
                            </div>
                            <div class="col-sm-2">
                                <p class="status-summary-ight-white mb-1">Karyawan Hadir</p>
                                @php
                                    $a = 0;
                                @endphp
                                @foreach($attendance_count  as $key2)
                                @if($key2->attendance_id === $key1->id)
                                @php
                                    $a++;
                                @endphp
                                @endif
                                @endforeach
                                <h2 class="text-info">{{ $a }}</h2>

                            </div>
                            <div class="col-sm-2">
                                <p class="status-summary-ight-white mb-1">Karyawan Absen</p>
                                <h2 class="text-alert">{{ $employee_count - $a }}</h2>
                            </div>
                        
                        
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
                                
                                @foreach($employee as $key2)
                                
                                    <tr>
                                        <td>{{ $key2->name }}</td>
                                        <td>{{ $key2->phone }}</td>
                                        <td>{{ $key2->name }}</td>
                                        @if($a > 0)
                                        @foreach($attendance_count as $key3)
                                        @if ($key3->employee_id === $key2->id)
                                        <td> Hadir </td>
                                        @endif
                                        @endforeach
                                        @else 
                                        <td> Tidak Hadir </td>
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
            @endforeach
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