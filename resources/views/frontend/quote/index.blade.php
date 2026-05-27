@extends('layouts.frontend.main')

@section('title', 'Request a Quote | Diamond Landscapes')

@section('content')
<style>
    .rts__breadcrumb__content {
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .rts__breadcrumb__content::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        /* black overlay */
        z-index: -1;
        border-radius: inherit;
    }

    .rts__breadcrumb__content .list,
    .rts__breadcrumb__content .title {
        position: relative;
        z-index: 2;
    }
</style>
<!-- rts breadcrumb area start -->
<section class="rts__breadcrumb__area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content" data-bg-src="{{ asset('services_page_bg.jpeg') }}">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Request a Quote</li>
                    </ul>
                    <h2 class="title rts-text-anime">Request a Free Quote</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

<!-- quote form area start -->
<div class="rts-contact-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-center">
                    <span class="subtitle" style="color: #34A853;">Get an Estimate</span>
                    <h2 class="title">Tell Us About Your Project</h2>
                    <p class="desc mt--20" style="color: rgba(255,255,255,0.7); max-width: 700px; margin-left: auto; margin-right: auto;">Fill out the form below for a quick estimate. We offer free consultations for both residential and commercial projects, including maintenance contracts.</p>
                </div>
            </div>
        </div>
        <div class="row mt--50">
            <div class="col-lg-12">
                <div class="contact-form-inner" style="background: #001514; padding: 50px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.1);">
                    <form id="quoteForm" action="{{ route('quote.store') }}" method="POST">
                        @csrf
                        <div class="row g-5">
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="name" style="color: white; margin-bottom: 10px; display: block;">Full Name*</label>
                                    <input type="text" name="name" id="name" placeholder="John Doe" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="email" style="color: white; margin-bottom: 10px; display: block;">Email Address*</label>
                                    <input type="email" name="email" id="email" placeholder="example@mail.com" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="phone" style="color: white; margin-bottom: 10px; display: block;">Phone Number*</label>
                                    <input type="tel" name="phone" id="phone" placeholder="+1 (234) 567-890" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="service_id" style="color: white; margin-bottom: 10px; display: block;">Interested Service*</label>
                                    <select name="service_id" id="service_id" style="background: #001a19; border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px; appearance: auto;" required>
                                        <option value="">Select a Service</option>
                                        @foreach($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                        <option value="commercial_maintenance">Commercial Maintenance Contract</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-input">
                                    <label for="property_type" style="color: white; margin-bottom: 10px; display: block;">Property Type*</label>
                                    <div class="d-flex gap-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="property_type" id="residential" value="residential" checked>
                                            <label class="form-check-label" for="residential" style="color: white;">Residential</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="property_type" id="commercial" value="commercial">
                                            <label class="form-check-label" for="commercial" style="color: white;">Commercial</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-input">
                                    <label for="message" style="color: white; margin-bottom: 10px; display: block;">Project Details*</label>
                                    <textarea name="message" id="message" rows="5" placeholder="Please describe your project or requirements..." required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center mt--30">
                                <button type="submit" class="rts-btn btn-primary" id="submitBtn" style="width: 100%; max-width: 300px;">Submit Request <i class="fa-solid fa-paper-plane ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- quote form area end -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#quoteForm').on('submit', function(e) {
            e.preventDefault();

            let form = $(this);
            let submitBtn = $('#submitBtn');
            let formData = form.serialize();

            submitBtn.prop('disabled', true).html('Sending... <i class="fa-solid fa-spinner fa-spin ms-2"></i>');

            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                        confirmButtonColor: '#34A853'
                    });
                    form[0].reset();
                    submitBtn.prop('disabled', false).html('Submit Request <i class="fa-solid fa-paper-plane ms-2"></i>');
                },
                error: function(xhr) {
                    let errorMessage = 'Something went wrong. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: errorMessage,
                        confirmButtonColor: '#d33'
                    });
                    submitBtn.prop('disabled', false).html('Submit Request <i class="fa-solid fa-paper-plane ms-2"></i>');
                }
            });
        });
    });
</script>
@endsection