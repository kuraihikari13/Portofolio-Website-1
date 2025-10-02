

<?php $__env->startSection('content'); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="tab-content tab-content-basic tab">
                        <h5>PERMINTAAN JADI MITRA</h5>
                        <table  data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Telepon</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>APPROVE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $temp_shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                           
                                    <td><?php echo e($temp->name); ?></td>
                                    <td><?php echo e($temp->phone); ?></td>
                                    <td><?php echo e($temp->email); ?></td>
                                    <td><?php echo e($temp->address); ?></td>
                                    <td style="text-align: center;">
                                        <a class=" btn btn-primary btn-sm mdi  mdi-check" href="approveShop/<?php echo e($temp->shop_id); ?>">
                                        </a> 
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    
                    
                    
                    
                    </div>
                    <div class="tab-content tab-content-basic tab">
                        <h5>PERMINTAAN TAMBAH STOK</h5>
                        <table data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                    <th>Owner</th>
                                    <th>Nomor Kontak</th>
                                    <th>Alamat</th>
                                    <th>Item</th>
                                    <th>Tanggal Permintaan</th>
                                    <th>Approve</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $restock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <?php $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($key2->shop_id == $key1->shop_id): ?>
                                    <td><?php echo e($key2->name); ?></td>
                                    <td><?php echo e($key2->phone); ?></td>
                                    <td><?php echo e($key2->address); ?></td>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                    <?php $__currentLoopData = $restock_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($key2->req_id == $key1->req_id): ?>
                                    <?php $__currentLoopData = $item_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($key3->item_id == $key2->item_id): ?>
                                    <?php echo e($key3->item_name); ?> <br>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td><?php echo e($key1->created_at); ?></td>

                                    <td style="text-align: center;">
                                        <a class=" btn btn-primary btn-sm mdi  mdi-check" href="approve-restock/<?php echo e($key1->req_id); ?>">
                    
                                        </a>
                                       
                
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                            </tbody>
                        </table>
                    
                    
                    
                    
                    </div>
                <!-- c             </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
           
                </footer>
                <!-- partial -->
            </div>
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard-admin/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-admin/admin-home.blade.php ENDPATH**/ ?>