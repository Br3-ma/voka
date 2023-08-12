<style>
    .ml4 {
        position: relative;
        font-weight: 900;
        font-size: 4.5em;
    }
    .ml4 .letters {
        position: absolute;
        margin: auto;
        left: 0;
        top: 0.3em;
        right: 0;
        opacity: 0; 
    }
</style>
<div wire:ignore class="" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="row align-items-center p-4">
        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
            <h1 class="h2 mb-0 ls-tight font-extrabold">Add New Business</h1>
        </div>
    </div>
    <div class="modal-content">
        <form id="create-business-entity" action="{{ route('businesses.store') }}" class="needs-validation" validate enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="form-validation">
                        <div class="row">
                            <div class="col-xl-8 col-xxl-8 col-lg-8">
                                <div class="rounded-md p-0 col-xl-12">
                                    <div class="mx-auto cursor-pointer relative mt-0">
                                        <input type="file" id="room_type_image_create" name="image_path" class=" top-0 left-0"> 
                                    </div>
                                    <div class="h-20 relative image-fit cursor-pointer zoom-in mx-auto">
                                        <img style="width: 30%; border-radius:10px" id="preview-image-room_type" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAMFBMVEXx8/XCy9K/yND09vfw8vTP1tzp7O/i5ure4+fO1dvJ0dfT2d/EzNPt7/Lb4OXo6+4FeM7UAAAFL0lEQVR4nO2c24KrIAxFLdha7///t0dxOlWDSiAKztnrbR4G6SoJBKHZA6zJYncgQeCEAicUOKHACQVOKHBCgRMKnFDghAInFDihwAkFTihwQoETCpxQ4IQCJxQ4ocAJBU4ocEKBEwqcUOCEAicUOKHACQVOKHBCgRMKnFDghAInFDihwAkFTihwQoETCpxQ4IQCJxQ4ocAJBU4ot3Oi1KMq64FnWTVq+EueWzlRquqKVn/J+/ezEfdyHydKPYtc62yF1m1Xymq5ixPVdDnx8eslf1eCVu7hRFXFppAfLW39kNJyByeqOTJirGTvRsbKDZyozsHIpKUQsZK8E1Vu55GTrKTuRL0ZRoyVLviZaTtRVctUMuaVOnCoJO1E1WwjxsorbGZO2Qk7br5WuhApKTvpfZWMy5WAoZKuk6b1NhI4VJJ10uRBSsas0ng+OlUnVaARw9NvqCTqRERJpt9eUtJ0IqPEN36SdNIIKRnIPeafFJ0Ep9c5mr+qTdFJ2CRMpLAn5fScqJeokrFWZkoRdaImwtpw2T9iSnnxuiDoRFXda6hK28JzWTA14ryBxKFlTT9iTlT1W57o3Lta96yED8krRieknCw/DDuEP1TnKBlgzMlCTtZDXr+8pIjOwitK5x7JOKFD3mukiE85ix45S5FxYll46prdiv8ekpsU19wv4kS9LV1ouQPlrPzKliIzTuw9YDYiVfgFSxFx8rR+wcyMomSX9HYpTjlFwonqrB3gBc/JyYQjRcRJYe8Ay4l9rMlLcVi8iTjp7Y/nOBHcMjngWEoi4+TUlcmKw9rnxHzCWMqeU/ltkB9JEZl3SusnYmwQn1fm2GgPeiOzZrM9WZfu/3/BNDznYATLOLENffep+JppeMZBMSZUF9N6ljFM7KF3qpTduBZyQj4W53XTiRsEm1L2dr2k9k9W9Rtjq2BrJj9Zyk7pI7bP9lw8kfH+4KIFLGF77Sa3R90Un0POvHNCcYzsLVMk9+2buni1bd9xjMSJHMPmjCz7zov/fidW5GQ7OS/2e8BoRrLtrBfXScTIMVLsk09cJxEjZ8I6+cR1EmG1tsRaDsZ0EjlyDL0leuxOpulD4JTALtfXORRbnqVO1LDOePdtpoclWPsqulL+wt0P0SNnxFKrrp2opmuXl+5OuHA3PSmByDGQ9ezSydYdM+ELd4YUIsdANnoWTva2RSUv3JlnJRE5I2RbY+6kee1+dTrrhC7cPTZeMUdivZnydaIc3tdqqWuI6USOYZlSfp0oxzVlJxNByUSOYZlSPk6cDzqEXy17JDTn/LBMKRlTSRZ4X2giep2zZnEwZHLiGjifFt6BTtKKHMMspUxO2BkvDzoDm1jkGGa7bsaJx0t9XfgrOfuMlhezwsc48RrKufvhyiXXHatg8T2Zkm0eHzluxO8W4pXHKljkXycBt3h9blFdeqyCx2fPOguLbn6qTWsBu+Czxs/CopsdP4kmkx+mcZ8FRrfuWUqSTSYT005keDucW4iXnzRhMg17iYacC6A0VyZzzIQs0pBrUrn22JoXY4Us0pDjaZMzb+dIMX6/Qi0dHSU0XHySz48heqSaOs60vsvlq2mtpzj9OCh/Trgjew7afgLar63d6ec2SmTZm37+UyV7048K+Gmkm7O10A/8aaSbY7sEr8rYvYoNnX4Sr3EuYJVpVc35Ccu/innZbryMJ1n4v9f4N9FZ39XPZ931GYzMGH9VPHYfAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADp8Q9+nG9anuOrfAAAAABJRU5ErkJggg==">
                                    </div>
                                </div>
                            </div>  
                            <br/>
                            <div class="col-xl-6 col-xxl-6 col-lg-6 p-6">
                                <div class="row">
                                    <label class="col-lg-6 col-form-label" for="validationCustom01">Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control input-default" name="name"  placeholder="Business Name" required>
                                    <div class="invalid-feedback">
                                        Please enter the business/company name.
                                    </div>
                                </div>  
                            </div>
                            <div class="col-xl-6 p-6">                                             
                                <div class="row">
                                    <label class="col-lg-6 col-form-label" for="validationCustom01">Business Category
                                        <span class="text-danger">*</span>
                                    </label>
                                    @forelse ($categories as $cat)
                                        <label class="PillList-item">
                                            <input type="checkbox" id="cate{{$cat->id}}" name="categories[]" value="{{ $cat->id }}">
                                            <span class="PillList-label">{{ $cat->name }}
                                            <span class="Icon Icon--checkLight Icon--smallest"><i class="fa fa-check"></i></span>
                                        
                                            </span>
                                        </label>
                                    @empty
                                        <small>No categories found</small>
                                    @endforelse
                                </div>
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />
                            </div>
                            <div class="col-xl-12 col-xxl-12 col-lg-12">
                                <div class="row">
                                    <label class="col-lg-6 col-form-label" for="validationCustom01">Description
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea cols="50" rows="10" class="form-control" name="description"  placeholder="About the business" required></textarea>
                                    <div class="invalid-feedback">
                                        About the business
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
        <div class="isLoading">
            <h1 class="ml4">
                <span class="letters letters-1">Setting Up</span>
                <span class="letters letters-2">Almost Done..</span>
                <span class="letters letters-3">Getting Ready</span>
            </h1>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

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


        var ml4 = {};
        ml4.opacityIn = [0,1];
        ml4.scaleIn = [0.2, 1];
        ml4.scaleOut = 3;
        ml4.durationIn = 800;
        ml4.durationOut = 600;
        ml4.delay = 500;

        anime.timeline({loop: true})
        .add({
            targets: '.ml4 .letters-1',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-1',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4 .letters-2',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-2',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4 .letters-3',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-3',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4',
            opacity: 0,
            duration: 500,
            delay: 500
        });
    });

</script>
