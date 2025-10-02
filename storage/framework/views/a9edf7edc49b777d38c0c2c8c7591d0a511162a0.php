
            <!-- partial -->
            <?php $__env->startSection('content'); ?>
           <div class="main-panel">
                
                       
                              
                                <div class="tab-content tab-content-basic">
                                <table  data-toggle="table"
                                    data-search="true"
                                    data-show-columns="true"
                                    data-pagination="true"
                                    class="table"
                                   >
                            <thead>
                                <tr>
                                    <th>Nama Owner</th>
                                    <th>Nomor Telepon</th>
                                    <th>E-Mail</th>
                                    <th>Alamat</th>
                                    <th>Atur Toko</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $shop_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><a style="text-decoration: none;" href="shop-detail/<?php echo e($shop->shop_id); ?>"><?php echo e($shop->name); ?></a></td>
                                    <td><?php echo e($shop->phone); ?></td>
                                    <td><?php echo e($shop->email); ?></td>
                                    <td><?php echo e($shop->address); ?></td>
                                    <td style="text-align: center;">
                                        <a class=" btn btn-primary btn-sm mdi  mdi-table-edit" href="edit-shop/<?php echo e($shop->shop_id); ?>">

                                      </a>
                                        <a value="delete" href="shop-delete/<?php echo e($shop->shop_id); ?>" class="btn btn-danger btn-sm mdi mdi-delete"></a>

                                   </td>
                                </tr>
                     
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard-admin/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-admin/shoptable.blade.php ENDPATH**/ ?>