@extends('admin/layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissable" style="margin: 15px;">
                        <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                            aria-label="close">&times;</a>
                        <strong> {{ session('success') }} </strong>
                    </div>
                    @endif
                    <div class="card-body">
                        <form id="settingSubmit" method="post" action="{{ route('setting_update') }}"
                            enctype="multipart/form-data">
                            @csrf()
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Website Settings</h4>
                                    <hr style="border-color: #a1a0a0">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Home Title</label>
                                                <input type="text" name="home_title" class="form-control"
                                                    placeholder="Home Title"
                                                    value="{{ $setting['home_title']->value ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Home Description</label>
                                                <textarea rows="1" type="text" name="home_description"
                                                    class="form-control"
                                                    placeholder="Home Description">{{ $setting['home_description']->value ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Home Image</label>
                                                <input type="file" name="home_image" class="form-control"
                                                    placeholder="Home Image"
                                                    value="{{ $setting['home_image']->value ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="name">Preview Image</label><br>
                                            @if(isset($setting['home_image']))
                                            <img src="{{ asset($setting['home_image']->value) }}" alt="Image"
                                                width="100">
                                            @endif
                                        </div>
                                    </div>
                                    <hr style="border-color: #a1a0a0">
                                    <h4>About Us Settings</h4>
                                    <hr style="border-color: #a1a0a0">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">About US Description</label>
                                                <textarea rows="1" type="text" name="about_us_description"
                                                    class="form-control"
                                                    placeholder="About US Description">{{ $setting['about_us_description']->value ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">About US Image</label>
                                                <input type="file" name="about_us_image" class="form-control"
                                                    placeholder="About US Image"
                                                    value="{{ $setting['about_us_image']->value ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="name">Preview Image</label><br>
                                            @if(isset($setting['about_us_image']))
                                            <img src="{{ asset($setting['about_us_image']->value) }}" alt="Image"
                                                width="100">
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">About US Vision</label>
                                                <textarea rows="1" type="text" name="about_us_vision"
                                                    class="form-control"
                                                    placeholder="About US Vision">{{ $setting['about_us_vision']->value ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">About US Mission</label>
                                                <textarea rows="1" type="text" name="about_us_mission"
                                                    class="form-control"
                                                    placeholder="About US Mission">{{ $setting['about_us_mission']->value ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>Sliders</h4>
                                    <hr style="border-color: #a1a0a0">

                                    <!-- Slider 1 Title -->
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <h6><b>Slider 1</b></h6>
                                        </div>
                                    </div>

                                    <!-- Slider 1 Fields -->
                                    <div class="row mb-4">

                                        <!-- Heading -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" name="slider1_heading" class="form-control"
                                                    value="{{ $setting['slider1_heading']->value ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Image -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Slider1 Image</label>
                                                <input type="file" name="slider1_image" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Preview -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Preview</label><br>
                                                @if(isset($setting['slider1_image']))
                                                <img src="{{ asset($setting['slider1_image']->value) }}" width="100">
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Description -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="slider1_description" class="form-control" rows="2">
                                                 {{ $setting['slider1_description']->value ?? '' }}
                                                </textarea>
                                            </div>
                                        </div>

                                    </div>

                                   

                                    <!-- Slider 1 Title -->
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <h6><b>Slider 2</b></h6>
                                        </div>
                                    </div>

                                    <!-- Slider 1 Fields -->
                                    <div class="row mb-4">

                                        <!-- Heading -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" name="slider2_heading" class="form-control"
                                                    value="{{ $setting['slider2_heading']->value ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Image -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Slider2 Image</label>
                                                <input type="file" name="slider2_image" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Preview -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Preview</label><br>
                                                @if(isset($setting['slider2_image']))
                                                <img src="{{ asset($setting['slider2_image']->value) }}" width="100">
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Description -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="slider2_description" class="form-control" rows="2">
                                                 {{ $setting['slider2_description']->value ?? '' }}
                                                </textarea>
                                            </div>
                                        </div>

                                    </div>

                                  
                                    <!-- Slider 1 Title -->
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <h6><b>Slider 3</b></h6>
                                        </div>
                                    </div>

                                    <!-- Slider 1 Fields -->
                                    <div class="row mb-4">

                                        <!-- Heading -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" name="slider3_heading" class="form-control"
                                                    value="{{ $setting['slider3_heading']->value ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Image -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Slider3 Image</label>
                                                <input type="file" name="slider3_image" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Preview -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Preview</label><br>
                                                @if(isset($setting['slider3_image']))
                                                <img src="{{ asset($setting['slider3_image']->value) }}" width="100">
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Description -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="slider3_description" class="form-control" rows="2">
                                                 {{ $setting['slider3_description']->value ?? '' }}
                                                </textarea>
                                            </div>
                                        </div>

                                    </div>







                                    <!-- Service Modal Moved -->
                                </div>
                            </div>
                            <hr style="border-color: #a1a0a0">
                            <div style="float:right">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="serviceModalLabel">Add Service</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul id="save_msgList"></ul>
                            <form id="serviceForm">
                                <input type="hidden" id="service_id">
                                <div class="form-group">
                                    <label for="service_title">Service Title</label>
                                    <input type="text" class="form-control" name="title" id="service_title" required>
                                </div>
                                <div class="form-group">
                                    <label for="service_description">Service Description</label>
                                    <textarea class="form-control" name="description" id="service_description" rows="3"
                                        required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="service_image">Service Image</label>
                                    <input type="file" class="form-control" id="service_image" accept="image/*">
                                    <input type="hidden" name="image" id="service_image_blob">
                                </div>
                                <div class="form-group text-center">
                                    <div id="serviceCropArea" style="display: none;">
                                        <div>
                                            <img id="serviceImagePreview" src=""
                                                style="max-width:100%; border:1px solid #ccc;">
                                        </div>
                                        <div style="margin-top:10px;">
                                            <button class="btn btn-success" id="serviceCropButton" type="button">Crop &
                                                Use
                                                Image</button>
                                            <button class="btn btn-danger" id="serviceCancelCrop"
                                                type="button">Cancel</button>
                                        </div>
                                    </div>
                                    <img id="serviceCroppedResult" src=""
                                        style="margin-top:10px; max-width:100%; display: none;" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="saveServiceBtn">Save Service</button>
                            <button type="button" class="btn btn-primary" id="updateServiceBtn"
                                style="display:none;">Update Service</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        let serviceCropper;
        let serviceCroppedBlob;

        $(document).ready(function() {
            $('#interest_type').on('change', function() {
                var selectedValue = $(this).val();
                var $monthContainer = $('#interest_month_container');

                if (selectedValue === '2') {
                    $monthContainer.slideDown(300);
                } else {
                    $monthContainer.slideUp(300);
                }
            });

            // Trigger on page load to set initial state
            $('#interest_type').trigger('change');

            $('#loan_interest_type').on('change', function() {
                var selectedValue = $(this).val();
                var $monthContainer = $('#loan_interest_month_container');

                if (selectedValue === '2') {
                    $monthContainer.slideDown(300);
                } else {
                    $monthContainer.slideUp(300);
                }
            });

            // Trigger on page load to set initial state
            $('#loan_interest_type').trigger('change');
        });
        </script>

        <script>
        let cropper;
        let croppedBlob;
        let cropper1;
        let croppedBlob1;

        $('#inputImage').on('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;

            const url = URL.createObjectURL(file);
            $('#imagePreview').attr('src', url);

            $('#cropArea').show();

            if (cropper) cropper.destroy();

            cropper = new Cropper(document.getElementById('imagePreview'), {
                aspectRatio: 500 / 100,
                viewMode: 1,
                autoCropArea: 1,
                dragMode: 'none',
                cropBoxMovable: true,
                cropBoxResizable: false,
                ready() {
                    const containerData = cropper.getContainerData();
                    const cropBoxData = {
                        left: (containerData.width - 500) / 2,
                        top: (containerData.height - 100) / 2,
                        width: 500,
                        height: 100,
                    };
                    cropper.setCropBoxData(cropBoxData);
                }
            });
        });

        $('#cancelCrop').on('click', function() {
            $('#cropArea').hide();
            $('#inputImage').val('');
            if (cropper) cropper.destroy();
            $('#imagePreview').attr('src', '');
            $('#croppedResult').hide();
            croppedBlob = null;
        });

        $('#cropButton').on('click', function() {
            cropper.getCroppedCanvas({
                width: 500,
                height: 100
            }).toBlob(function(blob) {
                croppedBlob = blob;

                const url = URL.createObjectURL(blob);
                $('#croppedResult').attr('src', url).show();

                $('#cropArea').hide();
                cropper.destroy();
                cropper = null;
            }, 'image/png');
        });

        $('#settingSubmit').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            if (croppedBlob instanceof Blob) {
                formData.append('cropped_image', croppedBlob, 'signature_cropped.png');
            } else {
                formData.append('keep_existing', 'true');
            }


            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(res) {
                    $('#croppedResult').hide();
                    croppedBlob = null;
                    window.location.reload();
                },
                error: function() {
                    alert('Upload failed');
                }
            });
        });

        $('#shareImage').on('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;

            const url = URL.createObjectURL(file);
            $('#imagePreview1').attr('src', url);

            $('#cropArea1').show();

            if (cropper1) cropper1.destroy();

            cropper1 = new Cropper(document.getElementById('imagePreview1'), {
                aspectRatio: 500 / 500,
                viewMode: 1,
                autoCropArea: 1,
                dragMode: 'none',
                cropBoxMovable: true,
                cropBoxResizable: false,
                ready() {
                    const containerData = cropper1.getContainerData();
                    const cropBoxData = {
                        left: (containerData.width - 500) / 2,
                        top: (containerData.height - 500) / 2,
                        width: 500,
                        height: 500,
                    };
                    cropper1.setCropBoxData(cropBoxData);
                }
            });
        });

        $('#cancelCrop1').on('click', function() {
            $('#cropArea1').hide();
            $('#shareImage').val('');
            if (cropper1) cropper1.destroy();
            $('#imagePreview1').attr('src', '');
            $('#croppedResult1').hide();
            croppedBlob1 = null;
        });

        $('#cropButton1').on('click', function() {
            cropper1.getCroppedCanvas({
                width: 500,
                height: 500
            }).toBlob(function(blob) {
                croppedBlob1 = blob;

                const url = URL.createObjectURL(blob);
                $('#croppedResult1').attr('src', url).show();
                $('#cropArea1').hide();
                cropper1.destroy();
                cropper1 = null;
            }, 'image/png');

            $('#shareImage').val(croppedBlob1);

        });
        </script>



        @endsection