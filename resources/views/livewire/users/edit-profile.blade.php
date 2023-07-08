<div>
    @include('layouts.__partials.user-navbar')
    <div class="xl:px-16 lg:px-16 xl:mx-28 lg:mx-28  mt-5">
        <h1 class="text-lg ">Edit Personal Profile</h1>
        <small>Change your address, name and other details.</small>
    </div>

    <form wire:submit.prevent='update'  class="xl:p-16 lg:p-16 xl:mx-28 lg:mx-28 container">
    <div>
        @if(session('success'))
            <div class="flex space-x-2 alert alert-success w-3/4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mt-1 bi bi-check2-square" viewBox="0 0 16 16">
                    <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                    <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                </svg>
                &nbsp;
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="flex space-x-2 alert alert-danger w-3/4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mt-1 bi bi-bug-fill" viewBox="0 0 16 16">
                    <path d="M4.978.855a.5.5 0 1 0-.956.29l.41 1.352A4.985 4.985 0 0 0 3 6h10a4.985 4.985 0 0 0-1.432-3.503l.41-1.352a.5.5 0 1 0-.956-.29l-.291.956A4.978 4.978 0 0 0 8 1a4.979 4.979 0 0 0-2.731.811l-.29-.956z"/>
                    <path d="M13 6v1H8.5v8.975A5 5 0 0 0 13 11h.5a.5.5 0 0 1 .5.5v.5a.5.5 0 1 0 1 0v-.5a1.5 1.5 0 0 0-1.5-1.5H13V9h1.5a.5.5 0 0 0 0-1H13V7h.5A1.5 1.5 0 0 0 15 5.5V5a.5.5 0 0 0-1 0v.5a.5.5 0 0 1-.5.5H13zm-5.5 9.975V7H3V6h-.5a.5.5 0 0 1-.5-.5V5a.5.5 0 0 0-1 0v.5A1.5 1.5 0 0 0 2.5 7H3v1H1.5a.5.5 0 0 0 0 1H3v1h-.5A1.5 1.5 0 0 0 1 11.5v.5a.5.5 0 1 0 1 0v-.5a.5.5 0 0 1 .5-.5H3a5 5 0 0 0 4.5 4.975z"/>
                </svg>
                &nbsp;
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div class="flex w-full">

        <div class="w-1/2">
            <div class="mb-3 w-3/4">
                <label for="name" class="form-label">First Name</label>
                <input
                    type="text" 
                    class="form-control w-full" 
                    wire:model.defer="fname">
                @if ($errors->has('fname'))
                    <span class="text-danger  text-left">{{ $errors->first('fname') }}</span>
                @endif
            </div>
            <div class="mb-3 w-3/4">
                <label for="address" class="form-label">Address</label>
                <input 
                    type="text" 
                    class="form-control" 
                    wire:model.defer="address" >
    
                @if ($errors->has('address'))
                    <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                @endif
            </div>
            <div class="w-3/4">
                <label for="patient_limit" class="form-label">Gender</label>
                <select wire:model.defer="gender" id="update-profile-form-2" data-search="true" class="tom-select form-control w-full multiple">
                    <option value="">-- select --</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                @if ($errors->has('gender'))
                    <span class="text-danger text-left">{{ $errors->first('gender') }}</span>
                @endif
            </div> 
        </div>
    
        <div class="w-1/2">                 
    
            <div class="mb-3 w-3/4">
                <label for="name" class="form-label">Last Name</label>
                <input value="{{ auth()->user()->lname ?? 'Last Name' }}" 
                    type="text" 
                    class="form-control" 
                    wire:model.defer="lname">
                @if ($errors->has('name'))
                    <span class="text-danger text-left">{{ $errors->first('lname') }}</span>
                @endif
            </div>
            <div class="mb-3 w-3/4">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email" 
                    class="form-control" 
                    wire:model.defer="email" 
                    placeholder="Email address">
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class=" w-3/4">
                <label for="date_of_birth" class="form-label">Date of Birth</label>
                <input
                    type="text" 
                    class="form-control datepicker" 
                    data-single-mode="true"
                    wire:model.defer="dob" 
                    placeholder="Date of Birth">
                @if ($errors->has('date_of_birth'))
                    <span class="text-danger text-left">{{ $errors->first('date_of_birth') }}</span>
                @endif
            </div>
        </div>

    </div>
    <div class="w-3/4 mt-2">

        <div class="mb-3 w-1/2">
            <label for="ilove" class="form-label">What I Love</label>
            <textarea
                type="text" 
                class="form-control" 
                data-single-mode="true"
                wire:model.defer="ilove" 
                placeholder="About me">
                {{ auth()->user()->ilove ?? '' }}>
                {{ auth()->user()->ilove ?? 'About yourself' }}
            </textarea>
            @if ($errors->has('ilove'))
                <span class="text-danger text-left">{{ $errors->first('ilove') }}</span>
            @endif
        </div>

        <div class="mb-3 w-1/2">
            <label for="date_of_birth" class="form-label">About me</label>
            <textarea
                type="text" 
                class="form-control" 
                data-single-mode="true"
                wire:model.defer="about" 
                placeholder="About me">
                {{ auth()->user()->about ?? 'About yourself' }}
            </textarea>
            @if ($errors->has('about'))
                <span class="text-danger text-left">{{ $errors->first('about') }}</span>
            @endif
        </div>

        <div class="mb-3 w-1/2">
            <label for="date_of_birth" class="form-label">Nickname</label>
            <input
                type="text" 
                class="form-control" 
                data-single-mode="true"
                wire:model.defer="nickname" 
                placeholder="">
            @if ($errors->has('nickname'))
                <span class="text-danger text-left">{{ $errors->first('nickname') }}</span>
            @endif
        </div>
    </div>

    
    <!-- BEGIN: Modal Footer -->
    <div class="modal-footer"> 
        <button type="submit" class="btn bg-[#a609c5] btn-primary w-30">Save Changes</button> 
    </div> <!-- END: Modal Footer -->
    </form>
</div>
