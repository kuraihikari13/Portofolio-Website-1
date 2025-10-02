

            <!-- partial -->
            <?php $__env->startSection('content'); ?>
            <div class="main-panel">



                <div class="tab-content tab-content-basic">
                      <a class=" btn btn-primary " href="input-item" style="float: right;">TAMBAH ITEM</a>
                    <table data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true"
                        class="table">
                        <thead>
                            <tr>
                                <th>Nama Item</th>
                                <th>Harga Pokok</th>
                                <th>Harga Eceran</th>
                                <th>Update Stock Terakhir</th>
                                <th>Atur Item</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $item_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->item_name); ?></td>
                                <td>Rp <?php echo e($item->item_base_price); ?></td>
                                <td>Rp <?php echo e($item->item_sale_price); ?></td>
                                <td><?php echo e($item->updated_at); ?></td>
                                <td style="text-align: center;">
                                    <a class=" btn btn-primary btn-sm mdi mdi-table-edit" href="edit-item/<?php echo e($item->item_id); ?>">

                                    </a>
                                    <a value="delete" href="delete-item/<?php echo e($item->item_id); ?>" class="btn btn-danger btn-sm mdi  mdi-delete"></a>

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

<?php echo $__env->make('dashboard-admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-admin/itemtable.blade.php ENDPATH**/ ?>