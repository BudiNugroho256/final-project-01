        <section>
            <header class="mb-4">
                <h2 class="text-center text-primary">
                    <?php echo e(__('Update Password')); ?>

                </h2>
                <p class="text-center text-muted">
                    <?php echo e(__('Ensure your account is using a long, random password to stay secure.')); ?>

                </p>
            </header>

            <form method="post" action="<?php echo e(route('password.update')); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>

                <div class="mb-3">
                    <label for="current_password" class="form-label"><?php echo e(__('Current Password')); ?></label>
                    <input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" required>
                    <?php if($errors->updatePassword->get('current_password')): ?>
                        <div class="text-danger mt-1">
                            <?php echo e($errors->updatePassword->first('current_password')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"><?php echo e(__('New Password')); ?></label>
                    <input id="password" name="password" type="password" class="form-control" autocomplete="new-password" required>
                    <?php if($errors->updatePassword->get('password')): ?>
                        <div class="text-danger mt-1">
                            <?php echo e($errors->updatePassword->first('password')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label"><?php echo e(__('Confirm Password')); ?></label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" required>
                    <?php if($errors->updatePassword->get('password_confirmation')): ?>
                        <div class="text-danger mt-1">
                            <?php echo e($errors->updatePassword->first('password_confirmation')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
                </div>

                <?php if(session('status') === 'password-updated'): ?>
                    <p class="text-success mt-2">
                        <?php echo e(__('Password updated successfully.')); ?>

                    </p>
                <?php endif; ?>
            </form>
        </section><?php /**PATH C:\xampp\htdocs\final-project-01-main1\resources\views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>