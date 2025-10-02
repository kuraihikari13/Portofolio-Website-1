

<?php $__env->startSection('content'); ?>
           <div class="main-panel">
                <div class="content-wrapper">
                           <div class="card-body pb-0">
                    
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Kapasitas Karyawan</p>
                                <h2 class="text-info"><?php echo e($employee_total); ?></h2>
                            </div>
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Karyawan Terdaftar</p>
                                <h2 class="text-info"><?php echo e($employee_count); ?></h2>
                            </div>
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Karyawan Hadir</p>
                                <h2 class="text-info"><?php echo e($attendance_count); ?></h2>
                            </div>
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">Karyawan Absen</p>
                                <h2 class="text-alert"><?php echo e($employee_count - $attendance_count); ?></h2>
                            </div>
                    </div>
                   
                    <div class="tab-content tab-content-basic tab">
                        <h5>Absensi</h5>
                        <form method="POST" action="attendance">
                                    <?php echo csrf_field(); ?>
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
                                
                                <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <tr>
                                        <td><?php echo e($key1->name); ?></td>
                                        <td><?php echo e($key1->phone); ?></td>
                                        <td><?php echo e($key1->name); ?></td>
                                        <?php if($attendance_count > 0): ?>
                                        <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key2->employee_id === $key1->id): ?>
                                        <td> Hadir </td>
                                        <td><input id="row-selector" name="false[]" type="checkbox" value="<?php echo e($key1->id); ?>"/>Tidak Hadir</td>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?> 
                                        <td> Tidak Hadir </td>
                                        <td><input id="row-selector" name="true[]" type="checkbox" value="<?php echo e($key1->id); ?>"/>Hadir</td>
                                        <?php endif; ?>    
                                    </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
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
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard-user/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-user\clock-in.blade.php ENDPATH**/ ?>