<x-form-section wire:ignore submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="w-full">
                <!-- Profile Photo File Input -->
                <x-label for="photo" value="{{ __('Photo') }}" />
                <input type="file" class="hidden" id="select-profile-pic-user" wire:model="photo" />



                <!-- New Profile Photo -->
                <div id="addedNew" class="mt-2">
                    <img id="preview-profile-pic-user" alt="{{ $this->user->name }}" class="w-40 h-40 rounded-circle me-2">
                </div>

                @if ($this->user->profile_photo_path)
                    <!-- Current Profile Photo -->
                    <div id="currentOldPic" class="mt-2">
                        <img src="{{ asset('public/storage/'.$this->user->profile_photo_path) }}" alt="{{ $this->user->name }}" class="w-40 h-40 rounded-circle me-2">
                    </div>
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="w-full">
            <x-label for="fname" value="{{ __('First Name') }}" />
            <x-input id="fname" type="text" class="mt-1 block w-full" wire:model.defer="state.fname" autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <div class="w-full">
            <x-label for="lname" value="{{ __('Last Name') }}" />
            <x-input id="lname" type="text" class="mt-1 block w-full" wire:model.defer="state.lname" autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="w-full">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" autocomplete="username" />
            <x-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
            {{ __('Save Changes') }}
        </button>
    </x-slot>
</x-form-section>
