@extends('layouts.vertical', ['title' => 'Profile'])

@section('content')

<!-- Start Content-->
<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Timeline</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                <li class="breadcrumb-item active">Timeline</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-body">
                    <div class="timeline-page position-relative">

                        <div class="timeline-section mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">                                            
                                    <div class="duration label-left fs-15 fw-medium position-relative py-1 px-4 fst-italic rounded-2 bg-primary-subtle text-primary">17 May 1939</div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card description-right border overflow-hidden float-start">
                                        <div class="card-body">
                                            <h6 class="title mb-1 text-capitalize">The Birth of Silicon Valley</h6>
                                            <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                                William Hewlett and David Packard found Hewlett-Packard (HP) 
                                                in a Palo Alto garage.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-section mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card description-left border overflow-hidden float-start">
                                        <div class="card-body">
                                            <h6 class="title mb-1 text-capitalize">The Advent of Personal Computing</h6>
                                            <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                                Bill Gates and Paul Allen establish Microsoft, heralding the dawn of the personal.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">                                            
                                    <div class="duration label-right fs-15 fw-medium position-relative py-1 px-4 fst-italic rounded-2 bg-primary-subtle text-primary">1 January 1975</div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-section mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">                                            
                                    <div class="duration label-left fs-15 fw-medium position-relative py-1 px-4 fst-italic rounded-2 bg-primary-subtle text-primary">22 September 1994</div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card description-right border overflow-hidden float-start">
                                        <div class="card-body">
                                            <h6 class="title mb-1 text-capitalize">Internet Age Dawns</h6>
                                            <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                                Amazon.com is founded by Jeff Bezos, pioneering online retail 
                                                and forever altering.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-section mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card description-left border overflow-hidden float-start">
                                        <div class="card-body">
                                            <h6 class="title mb-1 text-capitalize">Social Media Revolution</h6>
                                            <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                                Mark Zuckerberg founds Facebook in his Harvard University dorm room.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">                                            
                                    <div class="duration label-right fs-15 fw-medium position-relative py-1 px-4 fst-italic rounded-2 bg-primary-subtle text-primary">28 December 2004</div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-section mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">                                            
                                    <div class="duration label-left fs-15 fw-medium position-relative py-1 px-4 fst-italic rounded-2 bg-primary-subtle text-primary">14 February 2006</div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card description-right border overflow-hidden float-start">
                                        <div class="card-body">
                                            <h6 class="title mb-1 text-capitalize">Cloud Computing Emerges</h6>
                                            <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                                Amazon Web Services (AWS) launches, pioneering cloud computing 
                                                services.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-section mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card description-left border overflow-hidden float-start">
                                        <div class="card-body">
                                            <h6 class="title mb-1 text-capitalize">Artificial Intelligence Renaissance</h6>
                                            <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                                Elon Musk, Peter Thiel, and others establish OpenAI, a 
                                                research organization.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">                                            
                                    <div class="duration label-right fs-15 fw-medium position-relative py-1 px-4 fst-italic rounded-2 bg-primary-subtle text-primary">15 Jule 2010</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-6">
            <div class="card">
                <div class="card-body p-4">
                    <ul class="simple-timeline mb-0">
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-dot timeline-dot-primary"></span>
                            <div class="timeline-time">
                                <div class="timeline-header-section mb-2">
                                    <h5 class="mb-0">12 Invoices have been paid</h5>
                                    <small class="text-muted">19 min ago</small>
                                </div>
                                <p class="mb-2">
                                    Invoices have been paid to the company
                                </p>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="badge bg-light rounded d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"><path fill="#909090" d="m24.1 2.072l5.564 5.8v22.056H8.879V30h20.856V7.945z"/><path fill="#f4f4f4" d="M24.031 2H8.808v27.928h20.856V7.873z"/><path fill="#7a7b7c" d="M8.655 3.5h-6.39v6.827h20.1V3.5z"/><path fill="#dd2025" d="M22.472 10.211H2.395V3.379h20.077z"/><path fill="#464648" d="M9.052 4.534H7.745v4.8h1.028V7.715L9 7.728a2 2 0 0 0 .647-.117a1.4 1.4 0 0 0 .493-.291a1.2 1.2 0 0 0 .335-.454a2.1 2.1 0 0 0 .105-.908a2.2 2.2 0 0 0-.114-.644a1.17 1.17 0 0 0-.687-.65a2 2 0 0 0-.409-.104a2 2 0 0 0-.319-.026m-.189 2.294h-.089v-1.48h.193a.57.57 0 0 1 .459.181a.92.92 0 0 1 .183.558c0 .246 0 .469-.222.626a.94.94 0 0 1-.524.114m3.671-2.306c-.111 0-.219.008-.295.011L12 4.538h-.78v4.8h.918a2.7 2.7 0 0 0 1.028-.175a1.7 1.7 0 0 0 .68-.491a1.9 1.9 0 0 0 .373-.749a3.7 3.7 0 0 0 .114-.949a4.4 4.4 0 0 0-.087-1.127a1.8 1.8 0 0 0-.4-.733a1.6 1.6 0 0 0-.535-.4a2.4 2.4 0 0 0-.549-.178a1.3 1.3 0 0 0-.228-.017m-.182 3.937h-.1V5.392h.013a1.06 1.06 0 0 1 .6.107a1.2 1.2 0 0 1 .324.4a1.3 1.3 0 0 1 .142.526c.009.22 0 .4 0 .549a3 3 0 0 1-.033.513a1.8 1.8 0 0 1-.169.5a1.1 1.1 0 0 1-.363.36a.67.67 0 0 1-.416.106m5.08-3.915H15v4.8h1.028V7.434h1.3v-.892h-1.3V5.43h1.4v-.892"/><path fill="#dd2025" d="M21.781 20.255s3.188-.578 3.188.511s-1.975.646-3.188-.511m-2.357.083a7.5 7.5 0 0 0-1.473.489l.4-.9c.4-.9.815-2.127.815-2.127a14 14 0 0 0 1.658 2.252a13 13 0 0 0-1.4.288Zm-1.262-6.5c0-.949.307-1.208.546-1.208s.508.115.517.939a10.8 10.8 0 0 1-.517 2.434a4.4 4.4 0 0 1-.547-2.162Zm-4.649 10.516c-.978-.585 2.051-2.386 2.6-2.444c-.003.001-1.576 3.056-2.6 2.444M25.9 20.895c-.01-.1-.1-1.207-2.07-1.16a14 14 0 0 0-2.453.173a12.5 12.5 0 0 1-2.012-2.655a11.8 11.8 0 0 0 .623-3.1c-.029-1.2-.316-1.888-1.236-1.878s-1.054.815-.933 2.013a9.3 9.3 0 0 0 .665 2.338s-.425 1.323-.987 2.639s-.946 2.006-.946 2.006a9.6 9.6 0 0 0-2.725 1.4c-.824.767-1.159 1.356-.725 1.945c.374.508 1.683.623 2.853-.91a23 23 0 0 0 1.7-2.492s1.784-.489 2.339-.623s1.226-.24 1.226-.24s1.629 1.639 3.2 1.581s1.495-.939 1.485-1.035"/><path fill="#909090" d="M23.954 2.077V7.95h5.633z"/><path fill="#f4f4f4" d="M24.031 2v5.873h5.633z"/><path fill="#fff" d="M8.975 4.457H7.668v4.8H8.7V7.639l.228.013a2 2 0 0 0 .647-.117a1.4 1.4 0 0 0 .493-.291a1.2 1.2 0 0 0 .332-.454a2.1 2.1 0 0 0 .105-.908a2.2 2.2 0 0 0-.114-.644a1.17 1.17 0 0 0-.687-.65a2 2 0 0 0-.411-.105a2 2 0 0 0-.319-.026m-.189 2.294h-.089v-1.48h.194a.57.57 0 0 1 .459.181a.92.92 0 0 1 .183.558c0 .246 0 .469-.222.626a.94.94 0 0 1-.524.114m3.67-2.306c-.111 0-.219.008-.295.011l-.235.006h-.78v4.8h.918a2.7 2.7 0 0 0 1.028-.175a1.7 1.7 0 0 0 .68-.491a1.9 1.9 0 0 0 .373-.749a3.7 3.7 0 0 0 .114-.949a4.4 4.4 0 0 0-.087-1.127a1.8 1.8 0 0 0-.4-.733a1.6 1.6 0 0 0-.535-.4a2.4 2.4 0 0 0-.549-.178a1.3 1.3 0 0 0-.228-.017m-.182 3.937h-.1V5.315h.013a1.06 1.06 0 0 1 .6.107a1.2 1.2 0 0 1 .324.4a1.3 1.3 0 0 1 .142.526c.009.22 0 .4 0 .549a3 3 0 0 1-.033.513a1.8 1.8 0 0 1-.169.5a1.1 1.1 0 0 1-.363.36a.67.67 0 0 1-.416.106m5.077-3.915h-2.43v4.8h1.028V7.357h1.3v-.892h-1.3V5.353h1.4v-.892"/></svg>
                                        <span class="mb-0 text-dark fw-normal fs-13 ms-1">invoices.pdf</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-dot timeline-dot-info"></span>
                            <div class="timeline-time mt-3">
                                <div class="timeline-header-section mb-2">
                                    <h5 class="mb-0">Client Meeting</h5>
                                    <small class="text-muted">48 min ago</small>
                                </div>
                                <p class="mb-2">
                                    Project meeting with john @9:15am
                                </p>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="avatar avatar-sm me-2">
                                        <img src="/images/users/user-14.jpg" class="img-thumbnail img-fluid" alt="Thumbnails">
                                    </div>
                                    <div>
                                        <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                                        <small>CEO of Pixinvent</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-dot timeline-dot-purple"></span>
                            <div class="timeline-time mt-3">
                                <div class="timeline-header-section mb-2">
                                    <h5 class="mb-0">Create a new project for client</h5>
                                    <small class="text-muted">25 min ago</small>
                                </div>
                                <p class="mb-2">
                                    6 team members in a project
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 me-2">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar-sm pull-up" aria-label="Vinnie Mostowy" data-bs-original-title="Vinnie Mostowy">
                                            <img class="rounded-circle img-fluid" src="/images/users/user-5.jpg" alt="avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar-sm pull-up" aria-label="Allen Rieske" data-bs-original-title="Allen Rieske">
                                            <img class="rounded-circle img-fluid" src="/images/users/user-9.jpg" alt="avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar-sm pull-up" aria-label="Julee Rossignol" data-bs-original-title="Julee Rossignol">
                                            <img class="rounded-circle img-fluid" src="/images/users/user-8.jpg" alt="avatar">
                                        </li>
                                        <li class="avatar-sm position-relative" style="height: 2.25rem; width: 2.25rem;">
                                            <span class="avatar-initial rounded-circle bg-light text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="7 more">+7</span>
                                        </li>
                                        </ul>
                                    </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-dot timeline-dot-info"></span>
                            <div class="timeline-time mt-3">
                                <div class="timeline-header-section mb-2">
                                    <h5 class="mb-0">Client Meeting</h5>
                                    <small class="text-muted">17 min ago</small>
                                </div>
                                <p class="mb-2">
                                    Project meeting with john @9:15am
                                </p>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="avatar avatar-sm me-2">
                                        <img src="/images/users/user-14.jpg" class="img-thumbnail img-fluid" alt="Thumbnails">
                                    </div>
                                    <div>
                                        <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                                        <small>CEO of Pixinvent</small>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container-fluid -->

@endsection