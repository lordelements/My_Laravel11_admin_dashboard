

<!--  -->
<div class="col-lg-6">
    <div class="block">
        <div class="title">
            <strong class="d-block">{{ __('Update Password') }}</strong>
            <span class="d-block">{{ __('Ensure your account is using a long, random password to stay secure.') }}</span>
        </div>
        <div class="block-body">

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="update_password_current_password" class="form-control-label">Current Password</label>
                    <x-text-input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>

                <div class="form-group">
                    <label for="update_password_password" class="form-control-label">New Password</label>
                    <x-text-input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>

                <div class="form-group">
                    <labell for="update_password_password_confirmation" class="form-control-label">Confirm Password</label>
                    <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center gap-4">
                <button class="btn btn-danger" type="submit">{{ __('Save') }}</button>

                    @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="btn btn-danger">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>