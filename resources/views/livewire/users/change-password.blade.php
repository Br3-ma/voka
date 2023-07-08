<div>
    @include('layouts.__partials.user-navbar')

    <div class="xl:px-16 lg:px-16 xl:mx-28 lg:mx-28  mt-5">
        <h1 class="text-lg ">Change Password</h1>
        <small>Do not show these details to anyone.</small>
    </div>

    <form wire:submit.prevent='update' class="xl:p-16 lg:p-16 xl:mx-28 lg:mx-28 container">
        <div class="w-full">
            <!-- Example Blade view -->
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
        <div class="w-full justify-content-center justify-center items-center">
            <div class="mb-3 w-3/4">
                <label for="name" class="form-label">Current Password</label>
                <input
                    type="password" 
                    class="form-control w-full" 
                    wire:model.defer="old_pass" />
                @if ($errors->has('old_pass'))
                    <span class="text-danger  text-left">{{ $errors->first('old_pass') }}</span>
                @endif
            </div>
            <div class="mb-3 w-3/4">
                <label for="address" class="form-label">New Password</label>
                <input 
                    type="password" 
                    class="form-control" 
                    wire:model.defer="new_pass" />
    
                @if ($errors->has('new_pass'))
                    <span class="text-danger text-left">{{ $errors->first('new_pass') }}</span>
                @endif
            </div>
            <div class="mb-3 w-3/4">
                <label for="address" class="form-label">Confirm Password</label>
                <input 
                    type="password" 
                    class="form-control" 
                    wire:model.defer="confirm_pass" />
    
                @if ($errors->has('confirm_pass'))
                    <span class="text-danger text-left">{{ $errors->first('confirm_pass') }}</span>
                @endif
            </div>
        </div>
    
        <!-- BEGIN: Modal Footer -->
        <div class="modal-footer"> 
            <button type="submit" class="btn btn-primary bg-[#a609c5] w-30">
                
                Save Changes</button> 
        </div> <!-- END: Modal Footer -->
    </form>
</div>
