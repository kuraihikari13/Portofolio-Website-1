

<?php $__env->startSection('content'); ?>
           <div class="main-panel">
                <div class="content-wrapper">
                           <div class="card-body pb-0">
                    
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Kontrak</p>
                                <h2 class="text-info"><?php echo e($month); ?> <?php echo e($year); ?></h2>
                            </div>
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Kapasitas Karyawan</p>
                                <h2 class="text-info"><?php echo e($employee_total); ?></h2>
                            </div>
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Karyawan Terdaftar</p>
                                <h2 class="text-info"><?php echo e($employee_count); ?></h2>
                            </div>
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Gaji Harian</p>
                                <h2 class="text-info">Rp <?php echo e($pay); ?></h2>
                            </div>
        
                    <div class="tab-content tab-content-basic tab">
                        
                        
                        
                        <table id="table-absen" data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Kontak</th>
                                    <th>Alamat</th>
                                    <th>Total Kehadiran</th>
                                    <th>Total Upah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $a = 0;
                                ?>
                                <?php if($check == 1): ?>
                                    
                                    <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gaji): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        if($gaji['employee_id'] == $key->id)
                                        { $a++; }
                                    ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                <tr>
                                    <td><?php echo e($key->name); ?></td>
                                    <td><?php echo e($key->phone); ?></td>
                                    <td><?php echo e($key->address); ?></td>
                                    
                                    <td><?php echo e($a); ?> Hari</td>
                                    <td>Rp <?php echo e($a * $pay); ?></td>
                                    
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard-user/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-user\employee-paycheck.blade.php ENDPATH**/ ?>