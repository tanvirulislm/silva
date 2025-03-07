@extends('layouts.vertical', ['title' => 'Profile'])

@section('content')

<!-- Start Content-->
<div class="container-fluid">

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">FAQ</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                <li class="breadcrumb-item active">FAQ</li>
            </ol>
        </div>
    </div>

    <div clsas="row">
        <div class="col-xxl-12">
            <div class="profile-container p-5">
                <div class="justify-content-center align-content-center text-center">
                    <p class="fs-14 mb-0 text-white fw-medium">FAQs</p>
                    <h3 class="mb-0 fs-26 text-white">Frequently Asked Questions</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-body">                                     

                    <div class="row mt-4">
                        <div class="col-xl-6">
                            <div class="p-2">
                                <div class="mb-3">
                                    <div class="faq-icon-box bg-primary-subtle">
                                        <i data-feather="smile" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h4 class="f-question">Is there a free trail available?</h4>
                                    <p class="f-answer mb-4">The admin panel SaaS is a platform that provides administrators with a centralized interface to manage various aspects of their software.</p>
                                </div>

                                <div class="mb-3">
                                    <div class="faq-icon-box bg-primary-subtle">
                                        <i data-feather="copy" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h4 class="f-question">What features does the admin panel SaaS offer?</h4>
                                    <p class="f-answer mb-4">The features may vary depending on the specific platform, but commonly included features are user authentication and authorization.</p>
                                </div>

                                <div class="mb-3">
                                    <div class="faq-icon-box bg-primary-subtle">
                                        <i data-feather="disc" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h4 class="f-question">How can I sign up for the admin panel SaaS?</h4>
                                    <p class="f-answer mb-4">To sign up, visit our website and follow the registration process. You'll need to provide some basic information and choose a subscription plan.</p>
                                </div>

                                <div class="">
                                    <div class="faq-icon-box bg-primary-subtle">
                                        <i data-feather="user" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h4 class="f-question">What is the Installation?</h4>
                                    <p class="f-answer mb-0">The Installation SaaS is a platform designed to streamline the installation process for various software applications or systems.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-6">
                            <div class="p-2">
                                <div class="mb-3">
                                    <div class="faq-icon-box bg-primary-subtle">
                                        <i data-feather="hard-drive" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h4 class="f-question">Is the admin panel customizable?</h4>
                                    <p class="f-answer mb-4">Yes, the admin panel SaaS often offers customization options to tailor the interface to your specific requirements. This may include branding customization.</p>
                                </div>

                                <div class="mb-3">
                                    <div class="faq-icon-box bg-primary-subtle">
                                        <i data-feather="loader" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h4 class="f-question">Is there a mobile app for the admin panel?</h4>
                                    <p class="f-answer mb-4">Some admin panel SaaS platforms offer mobile apps or have responsive web designs, allowing you to access the admin panel from mobile devices.</p>
                                </div>

                                <div class="mb-3">
                                    <div class="faq-icon-box bg-primary-subtle">
                                        <i data-feather="message-square" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h4 class="f-question">Can I integrate the admin panel SaaS with other tools or services?</h4>
                                    <p class="f-answer mb-4">Yes, the admin panel SaaS often supports integrations with various third-party tools and services through APIs or pre-built connectors.</p>
                                </div>

                                <div class="">
                                    <div class="faq-icon-box bg-primary-subtle">
                                        <i data-feather="zap" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h4 class="f-question">How does it work?</h4>
                                    <p class="f-answer mb-0">The Buying Product SaaS is a platform that facilitates the purchase process for both buyers and sellers. It provides a centralized marketplace.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container-fluid -->

@endsection