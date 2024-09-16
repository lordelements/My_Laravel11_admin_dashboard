<div class="col-lg-6">
        <div class="block">
            <div class="title">
                <strong class="d-block">{{ __('Profile Information') }}</strong>
                <span class="d-block"> {{ __("Update your account's profile information and email address.") }}</span>
            </div>
            <div class="block-body">

                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <form method="post" action="{{ route('admin.profile.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <label for="name" class="form-control-label">Name</label>
                        <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-control-label">Email</label>
                        <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-gray mt-2">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                            <p class="text-gray mt-2">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                            @endif
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <div>
                            
                            <button class="btn btn-danger" type="submit">{{ __('Save') }}</button>

                            @if (session('status') === 'profile-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="btn btn-sucess">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>