<div wire:ignore class="" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="row align-items-center p-4">
        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
            <h1 class="h2 mb-0 ls-tight font-extrabold">Add New Category</h1>
        </div>
    </div>
    <div class="modal-content">
        <form id="create-business-entity" wire:submit.prevent='store' class="needs-validation" validate enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="form-validation">
                        <div class="row">
                            <input type="hidden" wire:model.defer='user_id'>
                            <div class="col-xl-6 col-xxl-6 col-lg-6 p-6">
                                <div class="row">
                                    <label class="col-lg-6 col-form-label" for="validationCustom01">Category Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control input-default" wire:model.defer="name"  placeholder="Category Name" required>
                                    <div class="invalid-feedback">
                                        Please enter the business/company name.
                                    </div>
                                </div>  
                            </div>
                            <div class="col-xl-12 col-xxl-12 col-lg-12 p-6">
                                <div class="row">
                                    <label class="col-lg-6 col-form-label" for="validationCustom01">Description
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea cols="50" rows="10" class="form-control" wire:model.defer="desc"  placeholder="About the Category" required></textarea>
                                    <div class="invalid-feedback">
                                        About the Category
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary light" >Save changes</button>
            </div>  
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="{{ asset('public/js/business.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $('#room_type_image_create').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#preview-image-room_type').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script>

