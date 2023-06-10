<div wire:poll class="mx-4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="row align-items-center p-4">
        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
            <h1 class="h2 mb-0 ls-tight font-extrabold">Add New Subscription</h1>
        </div>
    </div>
    <div class="modal-content px-4">
        <form id="create-business-entity" wire:submit.prevent='store' class="needs-validation" validate enctype="multipart/form-data">
            @csrf
            <div id="step1">
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="form-validation">
                            <div class="px-3 text-purple-300">
                                <h2 class="text-sm font-extrabold">Subscription Information</h2>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-xxl-6 col-lg-6 p-6">
                                    <div class="row">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Subscription Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control input-default" wire:model.defer="name"  placeholder="Ex. Premium" required>
                                        <div class="invalid-feedback">
                                            Please enter the Subscription Name.
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-xl-6 p-6">                                             
                                    <div class="row">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Estimated Costs (ZMW)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control input-default" wire:model.defer="price"  placeholder="0.00" required>
                                        <div class="invalid-feedback">
                                            {{-- Please enter the business/company name. --}}
                                        </div>
                                    </div>
                                    <input type="hidden" wire:model="user_id" value="{{ auth()->user()->id }}" />
                                </div>
                                <div class="col-xl-12 col-xxl-12 col-lg-12">
                                    <div class="row px-3">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Description
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea cols="50" rows="5" class="form-control" wire:model.defer="desc"  placeholder="Description" required></textarea>
                                        <div class="invalid-feedback">
                                            About the subscription
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-xxl-12 col-lg-12">
                                    <div class="py-4">
                                        <div class="">
                                            <h2 class="text-sm font-extrabold text-gray-100">Add Feature (Subscription Packages)</h2>
                                        </div>
                                        <div class="w-full">
                                            @foreach($feat as $key => $value)
                                                <div class="flex items-center justify-center d-flex py-3 space-x-2 gap-2">
                                                    <input type="text" class="form-control w-3/4" wire:model.defer="feat.{{ $key }}" placeholder="Feature Description" />
                                                    <input type="text" class="form-control w-1/4" wire:model.defer="feat_price.{{ $key }}" placeholder="0.00" />
                                                    <button type="button" class="btn btn-xs btn-danger rounded-full" wire:click="removeInput({{ $key }})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                          </svg>
                                                    </button>
                                                </div>
                                            @endforeach
                                            <button wire:loading.remove type="button" class="btn btn-xs btn-success" wire:click="addInput" >
                                                Feature
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    @include('livewire.__partials.sweet-alerts')
                    <button type="submit" class="btn btn-primary light" >
                        Save
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                    </button>
                </div>
            </div>  
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="{{ asset('public/js/business.js') }}"></script>
    <script type="text/javascript">
    
        // Counter to track the number of input fields
        let counter = 1;
    
        // Function to add a new input field
        function addInputField() {
            const inputField = `
            <div class="flex flex-col d-flex w-full py-3">
                <div class="w-3/4">
                    <input type="text" class="form-control input-default" wire:model="feat.${counter}" />
                    <small>feat.${counter}</small>
                </div>
                <div class="w-1/4 px-2">
                    <a wire:click="removeInput(${counter})" type="button" class="btn btn-xs btn-danger removeInput">X</a>
                </div>
            </div>
            `;
            
            $('#inputContainer').append(inputField);
            counter++;
        }
    
        // Function to remove an input field
        function removeInputField() {
            $(this).parent().remove();
        }
    
        // Event handler for the "Add Input Field" button
        $('#addInput').on('click', addInputField);
    
        // Event handler for dynamically added "Remove" buttons
        $('#inputContainer').on('click', '.removeInput', removeInputField);
    </script>
</div>

