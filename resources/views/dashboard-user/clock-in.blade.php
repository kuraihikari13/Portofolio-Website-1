@extends('dashboard-user/dashboard')

@section('content')
           <div class="main-panel">
                <div class="content-wrapper">
                           <div class="card-body pb-0">
                    
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Kapasitas Karyawan</p>
                                <h2 class="text-info">{{ $employee_total }}</h2>
                            </div>
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Karyawan Terdaftar</p>
                                <h2 class="text-info">{{ $employee_count }}</h2>
                            </div>
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Karyawan Hadir</p>
                                <h2 class="text-info">{{ $attendance_count }}</h2>
                            </div>
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Karyawan Absen</p>
                                <h2 class="text-alert">{{ $employee_count - $attendance_count }}</h2>
                            </div>
                    </div>
                   
                    <div class="tab-content tab-content-basic tab">
                        <h5>Absensi</h5>
                        <form method="POST" action="attendance">
                                    @csrf
                        <table id="table-absen" data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Kontak</th>
                                    <th>Alamat</th>
                                    <th>Keterangan</th>
                                    <th>Verifikasi Absen</th>
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
                                        <td><input id="row-selector" name="false[]" type="checkbox" value="{{ $key1->id }}"/>Tidak Hadir</td>
                                        @endif
                                        @endforeach
                                        @else 
                                        <td> Tidak Hadir </td>
                                        <td><input id="row-selector" name="true[]" type="checkbox" value="{{ $key1->id }}"/>Hadir</td>
                                        @endif    
                                    </tr>
                                
                                @endforeach
                                
                                </button>
                    
                            </tbody>

                        </table>
                        <button id="btn-absen" type="submit" class="btn btn-primary me-2">Submit
                            </form>
                  
                    
                    
                    
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