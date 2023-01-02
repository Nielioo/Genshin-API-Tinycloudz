<section>
    <header>
        <h4>
            {{ __('Update Password') }}
        </h4>

        <p>
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        {{-- Current Password --}}
        <div class="mb-3">
            <label for="input-current-password">Current Password</label>
            <input id="input-current-password" class="form-control" type="password" name="current_password"
                placeholder="Current Password" autocomplete="current-password">
            @foreach ($errors->updatePassword->get('current_password') as $error)
                <li class="mt-2">{{ $error }}</li>
            @endforeach
        </div>

        {{-- New Password --}}
        <div class="mb-3">
            <label for="input-new-password">New Password</label>
            <input id="input-new-password" class="form-control" type="password" name="password"
                placeholder="New Password" autocomplete="new-password">
            @foreach ($errors->updatePassword->get('password') as $error)
                <li class="mt-2">{{ $error }}</li>
            @endforeach
        </div>

        {{-- Confirm Password --}}
        <div class="mb-3">
            <label for="input-confirm-password">Confirm Password</label>
            <input id="input-confirm-password" class="form-control" type="password" name="password_confirmation"
                placeholder="Confirm Password">
            @foreach ($errors->updatePassword->get('password_confirmation') as $error)
                <li class="mt-2">{{ $error }}</li>
            @endforeach
        </div>

        <div class="mb-3">
            <button class="btn btn-primary shadow d-block" type="submit">Save</button>

            @if (session('status') === 'password-updated')
                <p class="mt-2">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
