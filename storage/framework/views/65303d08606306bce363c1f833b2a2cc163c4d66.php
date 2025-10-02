

<?php $__env->startSection('content'); ?>
           <div class="main-panel">
                <div class="content-wrapper">
                           
                   
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
<?php echo $__env->make('dashboard-user/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-user/restock-history.blade.php ENDPATH**/ ?>