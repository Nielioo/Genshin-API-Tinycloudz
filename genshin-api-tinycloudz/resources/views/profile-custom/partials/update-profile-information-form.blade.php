<section>
    <header>
        <h4>
            {{ __('Profile Information') }}
        </h4>

        <p>
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        {{-- Name --}}
        <div class="mb-3">
            <label for="input-name">Name</label>
            <input id="input-name" class="form-control" type="text" name="name" placeholder="Name"
                value="{{ old('name', $user->name) }}" required autofocus>
            @foreach ($errors->get('name') as $error)
                <p class="mt-2">{{ $error }}</p>
            @endforeach
        </div>

        {{-- Email Address --}}
        <div class="mb-3">
            <label for="input-email">Email</label>
            <input id="input-email" class="form-control" type="email" name="email" placeholder="Email"
                value="{{ old('email', $user->email) }}" required>
            @foreach ($errors->get('email') as $error)
                <p class="mt-2">{{ $error }}</p>
            @endforeach

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="mb-3">
            <button class="btn btn-primary shadow d-block" type="submit">Save</button>
            @if (session('status') === 'profile-updated')
                <p class="mt-2">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
