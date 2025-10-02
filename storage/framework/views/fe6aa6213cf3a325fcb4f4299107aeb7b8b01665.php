

<?php $__env->startSection('content'); ?>


           <div class="main-panel">
            <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="content-wrapper">
                        <div class="card-body pb-0">
                    
                        
                    </div>
                   
                    <div class="tab-content tab-content-basic tab">
                        <div class="row">
                            <div class="col-sm-2">
                            <h2>Absensi</h2>
                                <h3 class="text-alert"><?php echo e($key1->date_clock_in); ?></h3>
                        </div>
                            <div class="col-sm-2">
                                <p class="status-summary-ight-white mb-1">Kapasitas Karyawan</p>
                                <h2 class="text-info"><?php echo e($employee_total); ?></h2>
                            </div>
                            <div class="col-sm-2">
                                <p class="status-summary-ight-white mb-1">Karyawan Terdaftar</p>
                                <h2 class="text-info"><?php echo e($employee_count); ?></h2>
                            </div>
                            <div class="col-sm-2">
                                <p class="status-summary-ight-white mb-1">Karyawan Hadir</p>
                                <?php
                                    $a = 0;
                                ?>
                                <?php $__currentLoopData = $attendance_count; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($key2->attendance_id === $key1->id): ?>
                                <?php
                                    $a++;
                                ?>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <h2 class="text-info"><?php echo e($a); ?></h2>

                            </div>
                            <div class="col-sm-2">
                                <p class="status-summary-ight-white mb-1">Karyawan Absen</p>
                                <h2 class="text-alert"><?php echo e($employee_count - $a); ?></h2>
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
                                
                                <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <tr>
                                        <td><?php echo e($key2->name); ?></td>
                                        <td><?php echo e($key2->phone); ?></td>
                                        <td><?php echo e($key2->name); ?></td>
                                        <?php if($a > 0): ?>
                                        <?php $__currentLoopData = $attendance_count; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key3->employee_id === $key2->id): ?>
                                        <td> Hadir </td>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?> 
                                        <td> Tidak Hadir </td>
                                        <?php endif; ?>    
                                    </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('dashboard-user/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-user\employee-attendance-history.blade.php ENDPATH**/ ?>