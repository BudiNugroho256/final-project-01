        <section class="mb-4">
            <header class="mb-4">
                <h2 class="text-center text-danger">
                    {{ __('Delete Account') }}
                </h2>
                <p class="text-center text-muted">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                </p>
            </header>

            <div class="d-flex justify-content-center">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </section>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="confirmUserDeletionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')

                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="confirmUserDeletionModalLabel">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}" required>
                            @if ($errors->userDeletion->get('password'))
                                <div class="text-danger mt-1">
                                    {{ $errors->userDeletion->first('password') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
                    </div>
                </form>
            </div>
        </div>
