

<?php $__env->startSection('content'); ?>
           <div class="main-panel">
                <div class="content-wrapper">
                           
                   
                    <div class="tab-content tab-content-basic tab">
                        <h5>Permintaan Stok Barang</h5>
                        <form method="POST" action="restock">
                                    <?php echo csrf_field(); ?>
                        <table id="table-absen" data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true" class="table">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $__currentLoopData = $item_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <tr>
                                        <td><?php echo e($key->item_name); ?></td>
                                        <td><input id="row-selector" name="restock[]" type="checkbox" value="<?php echo e($key->item_id); ?>"/>Pesan</td>
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
<?php echo $__env->make('dashboard-user/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-user/restock-request.blade.php ENDPATH**/ ?>