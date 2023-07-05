
<div wire:ignore class="mx-4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="row align-items-center p-4">
        <div class="col-sm-6 col-12 mb-4 mb-sm-0 d-flex">
            <span style="color:#41004a">
                <a href="{{ route('manage-business') }}" style="color:#41004a; font-weight:bold">
                    <svg style="color:#41004a;" xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-arrow-left font-extrabold" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                </a>
            </span>
            
            <h1 style="color:#41004a" class="h2 mb-0 ls-tight font-extrabold">Update Business Info</h1>
        </div>
    </div>
    <div class="modal-content">
        <form id="create-business-entity" method="post" action="{{ route('biz.update') }}" class="needs-validation" validate enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="form-validation">
                        <div class="row">
                            <div class="col-xl-4 col-xxl-4 col-lg-4">
                                <div class="rounded-md p-0 col-xl-12">
                                    <div class="mx-auto cursor-pointer relative mt-0">
                                        <input type="file" id="room_type_image_create" name="image_path" class=" top-0 left-0"> 
                                    </div>
                                    <div class="h-20 relative image-fit cursor-pointer zoom-in mx-auto">
                                        <img style="width: 50%; border-radius:10%" id="preview-image-room_type" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAMFBMVEXx8/XCy9K/yND09vfw8vTP1tzp7O/i5ure4+fO1dvJ0dfT2d/EzNPt7/Lb4OXo6+4FeM7UAAAFL0lEQVR4nO2c24KrIAxFLdha7///t0dxOlWDSiAKztnrbR4G6SoJBKHZA6zJYncgQeCEAicUOKHACQVOKHBCgRMKnFDghAInFDihwAkFTihwQoETCpxQ4IQCJxQ4ocAJBU4ocEKBEwqcUOCEAicUOKHACQVOKHBCgRMKnFDghAInFDihwAkFTihwQoETCpxQ4IQCJxQ4ocAJBU4ot3Oi1KMq64FnWTVq+EueWzlRquqKVn/J+/ezEfdyHydKPYtc62yF1m1Xymq5ixPVdDnx8eslf1eCVu7hRFXFppAfLW39kNJyByeqOTJirGTvRsbKDZyozsHIpKUQsZK8E1Vu55GTrKTuRL0ZRoyVLviZaTtRVctUMuaVOnCoJO1E1WwjxsorbGZO2Qk7br5WuhApKTvpfZWMy5WAoZKuk6b1NhI4VJJ10uRBSsas0ng+OlUnVaARw9NvqCTqRERJpt9eUtJ0IqPEN36SdNIIKRnIPeafFJ0Ep9c5mr+qTdFJ2CRMpLAn5fScqJeokrFWZkoRdaImwtpw2T9iSnnxuiDoRFXda6hK28JzWTA14ryBxKFlTT9iTlT1W57o3Lta96yED8krRieknCw/DDuEP1TnKBlgzMlCTtZDXr+8pIjOwitK5x7JOKFD3mukiE85ix45S5FxYll46prdiv8ekpsU19wv4kS9LV1ouQPlrPzKliIzTuw9YDYiVfgFSxFx8rR+wcyMomSX9HYpTjlFwonqrB3gBc/JyYQjRcRJYe8Ay4l9rMlLcVi8iTjp7Y/nOBHcMjngWEoi4+TUlcmKw9rnxHzCWMqeU/ltkB9JEZl3SusnYmwQn1fm2GgPeiOzZrM9WZfu/3/BNDznYATLOLENffep+JppeMZBMSZUF9N6ljFM7KF3qpTduBZyQj4W53XTiRsEm1L2dr2k9k9W9Rtjq2BrJj9Zyk7pI7bP9lw8kfH+4KIFLGF77Sa3R90Un0POvHNCcYzsLVMk9+2buni1bd9xjMSJHMPmjCz7zov/fidW5GQ7OS/2e8BoRrLtrBfXScTIMVLsk09cJxEjZ8I6+cR1EmG1tsRaDsZ0EjlyDL0leuxOpulD4JTALtfXORRbnqVO1LDOePdtpoclWPsqulL+wt0P0SNnxFKrrp2opmuXl+5OuHA3PSmByDGQ9ezSydYdM+ELd4YUIsdANnoWTva2RSUv3JlnJRE5I2RbY+6kee1+dTrrhC7cPTZeMUdivZnydaIc3tdqqWuI6USOYZlSfp0oxzVlJxNByUSOYZlSPk6cDzqEXy17JDTn/LBMKRlTSRZ4X2giep2zZnEwZHLiGjifFt6BTtKKHMMspUxO2BkvDzoDm1jkGGa7bsaJx0t9XfgrOfuMlhezwsc48RrKufvhyiXXHatg8T2Zkm0eHzluxO8W4pXHKljkXycBt3h9blFdeqyCx2fPOguLbn6qTWsBu+Czxs/CopsdP4kmkx+mcZ8FRrfuWUqSTSYT005keDucW4iXnzRhMg17iYacC6A0VyZzzIQs0pBrUrn22JoXY4Us0pDjaZMzb+dIMX6/Qi0dHSU0XHySz48heqSaOs60vsvlq2mtpzj9OCh/Trgjew7afgLar63d6ec2SmTZm37+UyV7048K+Gmkm7O10A/8aaSbY7sEr8rYvYoNnX4Sr3EuYJVpVc35Ccu/innZbryMJ1n4v9f4N9FZ39XPZ931GYzMGH9VPHYfAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADp8Q9+nG9anuOrfAAAAABJRU5ErkJggg==">
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-8 col-xxl-8 col-lg-8 p-4 pb-8">
                                <div class="row d-flex">
                                    <label class="col-lg-4 col-xl-4 col-form-label" for="validationCustom01">
                                        Name<span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="col-lg-4 col-xl-4 form-control input-default" name="name" value="{{ $biz->name}}"  placeholder="Business Name" required>
                                    <div class="invalid-feedback">
                                        Please enter the business/company name.
                                    </div>
                                </div>                                               
                                <div class="row">
                                    <label class="col-lg-6 col-form-label" for="validationCustom01">Business Category
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select name="categories" class="form-control default-select">
                                        <option value="{{ $biz->categories}}" data-display="Select"> {{ App\Models\Category::CatName($biz->categories) ?? 'None'}}</option>
                                        @forelse ($categories as $cat)
                                            @if ($biz->categories != $cat->id)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endif
                                        @empty
                                            <option>No Categories Found</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="row d-flex">
                                    <label class="col-lg-6 col-form-label" for="validationCustom01">Business Address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <textarea cols="0" rows="2" value="{{ $biz->address }}" class="col-lg-6 form-control" name="address" required>
                                        {{ $biz->address }}
                                    </textarea>
                                    <div class="invalid-feedback">
                                        Business Address
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />
                                <input type="hidden" name="biz_id" value="{{ $biz->id }}" />
                            </div>  
                            <br>
                            <hr>
                            <div class="col-xl-12 col-xxl-12 col-lg-12">
                                <div class="row gap-12">
                                    <div class="row col-lg-6 col-xl-6">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Business/Company Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control" value="{{ $biz->email }}" name="email" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Business Email
                                        </div>
                                    </div>
                                    <div class="row col-lg-6 col-xl-6">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Business/Company Website
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control" value="{{ $biz->website }}" name="website" placeholder="https://yourbusinessname.com" required>
                                        <div class="invalid-feedback">
                                            Website Link
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-xxl-12 col-lg-12">
                                <div class="row gap-12">
                                    <div class="row col-lg-6 col-xl-6">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Province
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select name="province" class="form-control default-select">
                                            <option value="{{ $biz->province }}" data-display="Select"> {{ $biz->province ?? 'Lusaka'}}</option>
                                            <option value="central">Central</option>
                                            <option value="copperbelt">Copperbelt</option>
                                            <option value="eastern">Eastern</option>
                                            <option value="luapula">Luapula</option>
                                            <option value="lusaka">Lusaka</option>
                                            <option value="muchinga">Muchinga</option>
                                            <option value="northern">Northern</option>
                                            <option value="north-western">North-Western</option>
                                            <option value="southern">Southern</option>
                                            <option value="western">Western</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Province
                                        </div>
                                    </div>
                                    <div class="row col-lg-6 col-xl-6">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">City
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select name="city"  class="form-control default-select">
                                            <option value="{{ $biz->city }}" data-display="Select"> {{ $biz->city ?? 'Lusaka'}}</option>
                                            <option value="lusaka">Lusaka</option>
                                            <option value="ndola">Ndola</option>
                                            <option value="kitwe">Kitwe</option>
                                            <option value="kabwe">Kabwe</option>
                                            <option value="chingola">Chingola</option>
                                            <option value="mufulira">Mufulira</option>
                                            <option value="luanshya">Luanshya</option>
                                            <option value="livingstone">Livingstone</option>
                                            <option value="kasama">Kasama</option>
                                            <option value="chipata">Chipata</option>
                                            <option value="kalulushi">Kalulushi</option>
                                            <option value="mansa">Mansa</option>
                                            <option value="mongu">Mongu</option>
                                            <option value="kafue">Kafue</option>
                                            <option value="choma">Choma</option>
                                            <option value="solwezi">Solwezi</option>
                                            <option value="chililabombwe">Chililabombwe</option>
                                            <option value="kansanshi">Kansanshi</option>
                                            <option value="mpika">Mpika</option>
                                            <option value="chinsali">Chinsali</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            City
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-xxl-12 col-lg-12">
                                <div class="row gap-12">
                                    <div class="row col-lg-6 col-xl-6">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Phone 1
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control" value="{{ $biz->phone1 }}" name="phone1" placeholder="" required>
                                            
                                        <div class="invalid-feedback">
                                            First Phone Number
                                        </div>
                                    </div>
                                    <div class="row col-lg-6 col-xl-6">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Phone 2
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control" value="{{ $biz->phone2 }}" name="phone2" placeholder="" required>
                                            
                                        <div class="invalid-feedback">
                                            Second Phone Number
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="col-xl-12 col-xxl-12 col-lg-12">
                                <div class="row gap-12">
                                    <div class="row col-lg-6 col-xl-6">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Start Time
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select name="start_time" value="{{ $biz->start_time }}"  class="form-control default-select">
                                            <option value="{{ $biz->start_time }}" data-display="Select"> {{ $biz->start_time ?? '08: 00 AM'}}</option>
                                            <option value="09:00 AM">05:00 AM</option>
                                            <option value="09:00 AM">06:00 AM</option>
                                            <option value="09:00 AM">07:00 AM</option>
                                            <option value="09:00 AM">08:00 AM</option>
                                            <option value="09:00 AM">09:00 AM</option>
                                            <option value="09:30 AM">09:30 AM</option>
                                            <option value="10:00 AM">10:00 AM</option>
                                            <option value="10:30 AM">10:30 AM</option>
                                            <option value="11:00 AM">11:00 AM</option>
                                            <option value="11:30 AM">11:30 AM</option>
                                            <option value="12:00 PM">12:00 PM</option>
                                            <option value="12:30 PM">12:30 PM</option>
                                            <option value="01:00 PM">01:00 PM</option>
                                            <option value="01:30 PM">01:30 PM</option>
                                            <option value="02:00 PM">02:00 PM</option>
                                            <option value="02:30 PM">02:30 PM</option>
                                            <option value="03:00 PM">03:00 PM</option>
                                            <option value="03:30 PM">03:30 PM</option>
                                            <option value="04:00 PM">04:00 PM</option>
                                            <option value="04:30 PM">04:30 PM</option>
                                            <option value="05:00 PM">05:00 PM</option>
                                            <option value="05:00 PM">06:00 PM</option>
                                            <option value="05:00 PM">07:00 PM</option>
                                            <option value="05:00 PM">08:00 PM</option>
                                            <option value="05:00 PM">09:00 PM</option>
                                            <option value="05:00 PM">10:00 PM</option>
                                            <option value="05:00 PM">11:00 PM</option>
                                            <option value="05:00 PM">12:00 PM</option>
                                        </select>
                                          
                                        <div class="invalid-feedback">
                                            Working time
                                        </div>
                                    </div>
                                    <div class="row col-lg-6 col-xl-6">
                                        <label class="col-lg-6 col-form-label" for="validationCustom01">Closing Time
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select value="{{ $biz->stop_time }}" name="stop_time" class="form-control default-select">
                                            <option value="{{ $biz->stop_time }}" data-display="Select"> {{ $biz->stop_time ?? '05:00 PM'}}</option>
                                            <option value="09:00 AM">05:00 AM</option>
                                            <option value="09:00 AM">06:00 AM</option>
                                            <option value="09:00 AM">07:00 AM</option>
                                            <option value="09:00 AM">08:00 AM</option>
                                            <option value="09:00 AM">09:00 AM</option>
                                            <option value="09:30 AM">09:30 AM</option>
                                            <option value="10:00 AM">10:00 AM</option>
                                            <option value="10:30 AM">10:30 AM</option>
                                            <option value="11:00 AM">11:00 AM</option>
                                            <option value="11:30 AM">11:30 AM</option>
                                            <option value="12:00 PM">12:00 PM</option>
                                            <option value="12:30 PM">12:30 PM</option>
                                            <option value="01:00 PM">01:00 PM</option>
                                            <option value="01:30 PM">01:30 PM</option>
                                            <option value="02:00 PM">02:00 PM</option>
                                            <option value="02:30 PM">02:30 PM</option>
                                            <option value="03:00 PM">03:00 PM</option>
                                            <option value="03:30 PM">03:30 PM</option>
                                            <option value="04:00 PM">04:00 PM</option>
                                            <option value="04:30 PM">04:30 PM</option>
                                            <option value="05:00 PM">05:00 PM</option>
                                            <option value="05:00 PM">06:00 PM</option>
                                            <option value="05:00 PM">07:00 PM</option>
                                            <option value="05:00 PM">08:00 PM</option>
                                            <option value="05:00 PM">09:00 PM</option>
                                            <option value="05:00 PM">10:00 PM</option>
                                            <option value="05:00 PM">11:00 PM</option>
                                            <option value="05:00 PM">12:00 PM</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Closing time
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-xxl-12 col-lg-12">
                                <div class="row">
                                    <label class="col-lg-6 col-form-label" for="validationCustom01">About the Business/Company
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea cols="1" rows="3" class="form-control" name="description" required>
                                        {{ $biz->description }}
                                    </textarea>
                                    <div class="invalid-feedback">
                                        About the business
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-xxl-12 col-lg-12">
                                <div class="row">
                                    <label class="col-lg-6 col-form-label" for="validationCustom01">Google Map
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea cols="1" rows="3" class="form-control" name="map" required>
                                        {{ $biz->map }}
                                    </textarea>
                                    <div class="invalid-feedback">
                                        Google map iframe code
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
