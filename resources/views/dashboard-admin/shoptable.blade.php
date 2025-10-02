@extends('dashboard-admin/dashboard')
            <!-- partial -->
            @section('content')
           <div class="main-panel">
                
                       
                              
                                <div class="tab-content tab-content-basic">
                                <table  data-toggle="table"
                                    data-search="true"
                                    data-show-columns="true"
                                    data-pagination="true"
                                    class="table"
                                   >
                            <thead>
                                <tr>
                                    <th>Nama Owner</th>
                                    <th>Nomor Telepon</th>
                                    <th>E-Mail</th>
                                    <th>Alamat</th>
                                    <th>Atur Toko</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shop_lists as $shop)
                                <tr>
                                    <td><a style="text-decoration: none;" href="shop-detail/{{ $shop->shop_id }}">{{ $shop->name }}</a></td>
                                    <td>{{ $shop->phone }}</td>
                                    <td>{{ $shop->email }}</td>
                                    <td>{{ $shop->address }}</td>
                                    <td style="text-align: center;">
                                        <a class=" btn btn-primary btn-sm mdi  mdi-table-edit" href="edit-shop/{{ $shop->shop_id }}">

                                      </a>
                                        <a value="delete" href="shop-delete/{{ $shop->shop_id }}" class="btn btn-danger btn-sm mdi mdi-delete"></a>

                                   </td>
                                </tr>
                     
                               @endforeach
                            </tbody>
                            </table>
                              
                          
                
                   
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