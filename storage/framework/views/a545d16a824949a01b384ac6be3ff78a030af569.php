

<?php $__env->startSection('content'); ?>
           <div class="main-panel">
                <div class="content-wrapper">
                           <div class="card-body pb-0">
                    
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">SHOP ID</p>
                                <h2 class="text-info"><?php echo e($shop->shop_id); ?></h2>
                                 
                               

                            </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Alamat</p>
                                       <h5 class="text-info"><?php echo e($shop->address); ?></h5>

                                      

                                    </div>
                                    <div class="col-sm-3">
                                        <?php if($status == 'BRONZE'): ?>
                                        <p class="status-summary-ight-white mb-1">Tier</p>
                                        <h2 class="text-info"><?php echo e($status); ?></h2>
                                        <?php endif; ?>
                                        <?php if($status == 'SILVER'): ?>
                                        <p class="status-summary-ight-white mb-1">Tier</p>
                                        <h2 class="text-secondary"><?php echo e($status); ?></h2>
                                        <?php endif; ?>
                                        <?php if($status == 'GOLD'): ?>
                                        <p class="status-summary-ight-white mb-1">Tier</p>
                                        <h2 class="text-warning"><?php echo e($status); ?></h2>
                                        <?php endif; ?>
                                      

                                    </div>

                        <div class="col-sm-3" style="text-align: right;">
                        <p class="status-summary-ight-white mb-1">Data Pemilik</p>
                            <h2 class="text-info"><?php echo e($shop->name); ?></h2>
                           
                            <p class="status-summary-ight-white mb-1"><?php echo e($shop->email); ?></p>
                            <p class="status-summary-ight-white mb-1"><?php echo e($shop->phone); ?></p>
                        </div>
                        </div>
                    </div>
                   
                    <div class="tab-content tab-content-basic tab">
                        <h2>Absensi</h2>
                        <h5><?php echo date('d - m - Y') ?></h5>
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
                        
                                    <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <tr>
                                        <td><?php echo e($key1->name); ?></td>
                                        <td><?php echo e($key1->phone); ?></td>
                                        <td><?php echo e($key1->name); ?></td>
                                        <?php if($attendance_count > 0): ?>
                                        <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key2->employee_id === $key1->id): ?>
                                        <td> Hadir </td>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?> 
                                        <td> Tidak Hadir </td>
                                        <?php endif; ?>    
                                    </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('dashboard-user/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-user/user-home.blade.php ENDPATH**/ ?>