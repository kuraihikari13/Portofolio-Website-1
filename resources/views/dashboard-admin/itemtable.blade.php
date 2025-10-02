@extends('dashboard-admin.dashboard')

            <!-- partial -->
            @section('content')
            <div class="main-panel">



                <div class="tab-content tab-content-basic">
                      <a class=" btn btn-primary " href="input-item" style="float: right;">TAMBAH ITEM</a>
                    <table data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true"
                        class="table">
                        <thead>
                            <tr>
                                <th>Nama Item</th>
                                <th>Harga Pokok</th>
                                <th>Harga Eceran</th>
                                <th>Update Stock Terakhir</th>
                                <th>Atur Item</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($item_lists as $item)
                            <tr>
                                <td>{{ $item->item_name }}</td>
                                <td>Rp {{ $item->item_base_price }}</td>
                                <td>Rp {{ $item->item_sale_price }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td style="text-align: center;">
                                    <a class=" btn btn-primary btn-sm mdi mdi-table-edit" href="edit-item/{{ $item->item_id }}">

                                    </a>
                                    <a value="delete" href="delete-item/{{ $item->item_id }}" class="btn btn-danger btn-sm mdi  mdi-delete"></a>

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
