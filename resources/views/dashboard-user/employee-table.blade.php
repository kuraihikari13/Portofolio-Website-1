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
        
                    <div class="tab-content tab-content-basic tab">
                        @if ($employee_total > $employee_count)
                        <a class=" btn btn-primary " href="employee-add" style="float: right;">TAMBAH KARYAWAN</a>
                        @endif
                        <table id="table-absen" data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Kontak</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employee as $key)
                                <tr>
                                    <td>{{ $key->name }}</td>
                                    <td>{{ $key->phone }}</td>
                                    <td>{{ $key->address }}</td>
                                    <td>
                                        <a class=" btn btn-primary btn-sm mdi mdi-table-edit" href="employee-edit/{{ $key->id }}">
                                                Edit
                                    </a>
                                    <a value="delete" href="employee-delete/{{ $key->id }}" class="btn btn-danger btn-sm mdi  mdi-delete"> Delete </a>

                                    </td>
                                </tr>
                                @endforeach
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