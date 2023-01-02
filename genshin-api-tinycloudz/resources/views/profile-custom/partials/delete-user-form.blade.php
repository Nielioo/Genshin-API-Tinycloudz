<section>
    <header>
        <h4>
            {{ __('Delete Account') }}
        </h4>

        <p>
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <div class="mb-3">
        <button class="btn btn-danger shadow d-block" type="button" data-bs-toggle="modal"
            data-bs-target="#confirm-user-deletion">Delete Account</button>
    </div>

    <div class="modal fade" id="confirm-user-deletion" tabindex="-1" aria-labelledby="confirm-user-deletion-label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="confirm-user-deletion-label">
                        Delete your account?
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')
                    <div class="modal-body">

                        <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        {{-- Password --}}
                        <div class="mt-3">
                            <input class="form-control" type="password" name="password"
                                placeholder="Password">
                            @foreach ($errors->userDeletion->get('password') as $error)
                                <li class="mt-2">{{ $error }}</li>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger ml-3">Delete Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@if ($errors->userDeletion->isNotEmpty())
    <script>
        const myModal = new bootstrap.Modal('#confirm-user-deletion', {
            show: true
        })
        myModal.show()
    </script>
@endif
