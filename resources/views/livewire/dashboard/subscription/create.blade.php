<div wire:ignore class="" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <textarea cols="50" rows="10" class="form-control" wire:model.defer="desc"  placeholder="Description" required></textarea>
                                        <div class="invalid-feedback">
                                            About the business
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-xxl-12 col-lg-12">
                                    <div class="py-4">
                                        <div class="">
                                            <h2 class="text-sm font-extrabold text-gray-100">Add Feature (Subscription Packages)</h2>
                                        </div>
                                        <div class="w-full">
                                            <div id="inputContainer" class="w-full py-2">
                                                <!-- Dynamic input fields will be added here -->
                                            </div>
                                            <a class="btn btn-xs btn-primary" id="addInput">Add a Feature</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary light" >Submit</button>
                </div>
            </div>  
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="{{ asset('public/js/business.js') }}"></script>
    <script type="text/javascript">
    
        // Counter to track the number of input fields
        let counter = 0;
    
        // Function to add a new input field
        function addInputField() {
            const inputField = `
            <div class="flex flex-col d-flex w-full py-3">
                <div class="w-3/4">
                    <input type="text" class="form-control input-default" wire:model.defer="feat.${counter}" />
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

