

<?php $__env->startSection('content'); ?>
            <div class="main-panel">

                    
                <div class="tab-content tab-content-basic">
                    <div class="card-body pb-0">
                    
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="status-summary-ight-white mb-1">ALAMAT</p>
                                 <p class="status-summary-ight-white mb-1"><?php echo e($shop->address); ?></p>

                            </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Lokasi</p>
                                        <h2 class="text-info"><?php echo e($shop->lokasi); ?></h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Dana</p>
                                       Rp <h2 class="text-info"><?php echo e($shop->modal); ?> Juta</h2>

                                      

                                    </div>

                        <div class="col-sm-3" style="text-align: right;">
                        <p class="status-summary-ight-white mb-1">OWNER</p>
                            <h2 class="text-info"><?php echo e($shop->name); ?></h2>
                           
                            <p class="status-summary-ight-white mb-1"><?php echo e($shop->email); ?></p>
                            <p class="status-summary-ight-white mb-1"><?php echo e($shop->phone); ?></p>
                        </div>
                        <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Tegangan Listrik</p>
                                        <h2 class="text-info"><?php echo e($shop->listrik); ?> Kwh</h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Kapasitas Karyawan</p>
                                        <h2 class="text-info"><?php echo e($shop->staff); ?></h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="status-summary-ight-white mb-1">Karyawan Terdaftar</p>
                                        <h2 class="text-info"><?php echo e($employee_count); ?></h2>
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
                        </div>
                    </div>
                    <div class="tab-content tab-content-basic tab">
                        <table id="table-absen" data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <h4 class="card-title">Karyawan</h4>
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Kontak</th>
                                    <th>Alamat</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key->name); ?></td>
                                    <td><?php echo e($key->phone); ?></td>
                                    <td><?php echo e($key->address); ?></td>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    <div class="tab-content tab-content-basic tab">
                        <h5>Permintaan Stok Barang</h5>
                        <table id="table-absen" data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Status</th>
                                    <th>Tanggal Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $__currentLoopData = $restock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <tr>
                                        <td>
                                        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key2->req_id == $key1->req_id): ?>
                                        <?php $__currentLoopData = $item_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key3->item_id == $key2->item_id): ?>
                                        <?php echo e($key3->item_name); ?>

                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <br>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td><?php echo e($key1->created_at); ?></td>
                                        <?php if($key1->approved == 1): ?>
                                        <td>Terverifikasi</td>
                                        <td><?php echo e($key1->updated_at); ?></td>
                                        <?php else: ?>
                                        <td>Menunggu verifikasi</td>
                                        <td>Menunggu verifikasi</td>
                                        <?php endif; ?>
                                        
                                    </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                </button>
                    
                            </tbody>

                        </table>
                  
                    
                    
                    
                    </div>




                </div>

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">

                    </div>
                </footer>
                <!-- partial -->
            </div>
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard-admin/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-admin/shop_detail.blade.php ENDPATH**/ ?>