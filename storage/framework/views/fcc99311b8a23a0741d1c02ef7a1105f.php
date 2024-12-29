        <section class="mb-4">
            <header class="mb-4">
                <h2 class="text-center text-danger">
                    <?php echo e(__('Delete Account')); ?>

                </h2>
                <p class="text-center text-muted">
                    <?php echo e(__('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.')); ?>

                </p>
            </header>

            <div class="d-flex justify-content-center">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
                    <?php echo e(__('Delete Account')); ?>

                </button>
            </div>
        </section>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="confirmUserDeletionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?php echo e(route('profile.destroy')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>

                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="confirmUserDeletionModalLabel">
                            <?php echo e(__('Are you sure you want to delete your account?')); ?>

                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>
                            <?php echo e(__('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.')); ?>

                        </p>
                        <div class="mb-3">
                            <label for="password" class="form-label"><?php echo e(__('Password')); ?></label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="<?php echo e(__('Password')); ?>" required>
                            <?php if($errors->userDeletion->get('password')): ?>
                                <div class="text-danger mt-1">
                                    <?php echo e($errors->userDeletion->first('password')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                        <button type="submit" class="btn btn-danger"><?php echo e(__('Delete Account')); ?></button>
                    </div>
                </form>
            </div>
        </div>
<?php /**PATH C:\xampp\htdocs\final-project-01-main\resources\views/profile/partials/delete-user-form.blade.php ENDPATH**/ ?>