

<?php $__env->startSection('content'); ?>
           <div class="main-panel">
                <div class="content-wrapper">
                           <div class="card-body pb-0">
                    
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">SHOP ID</p>
                                <h2 class="text-info">SHP01</h2>
                                 
                               

                            </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Alamat</p>
                                       <h5 class="text-info">JALAN</h5>

                                      

                                    </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Rank</p>
                                        <h2 class=" text-warning">GOLD</h2>

                                      

                                    </div>

                        <div class="col-sm-3" style="text-align: right;">
                        <p class="status-summary-ight-white mb-1">OWNER</p>
                            <h2 class="text-info">TES</h2>
                           
                            <p class="status-summary-ight-white mb-1">shop01@mail.com</p>
                            <p class="status-summary-ight-white mb-1">08888181881</p>
                        </div>
                        </div>
                    </div>
                   
                    <div class="tab-content tab-content-basic tab">
                        <h5>Absensi</h5>
                        <table id="table-absen" data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                
                                          <th >ID</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Keterangan</th>
                              
                                </tr>
                            </thead>
                            <tbody>
                        
                        
                           <td hidden class="row-value">ID</td>
                                    <td >TES</td>
                                    <td >0882828288</td>
                                    <td >tes@gmail.com</td>
                                  
                                    <td >
                                        Hadir
                                    </td>
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
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard-user/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-user\user-home.blade.php ENDPATH**/ ?>