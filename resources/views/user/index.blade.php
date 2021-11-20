
 @extends('layouts.user')

@section('content')

        <!-- Start Hero -->
        <section class="bg-dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                        <div class="card border-0 p-4 rounded shadow overflow-hidden sticky-bar">
                            <div class="d-md-flex text-center text-md-start align-items-center">
                              
                            <img src="{{asset('assets/images/client/09.jpg')}}" class="avatar avatar-md-md rounded-circle border shadow" alt="">


                                <div class="ms-md-3 mt-3 mt-sm-0">
                                    <h5 class="d-block mb-1 mb-sm-0">Christopher Burrell</h5>
                                    <small class="text-muted">25 Years old</small>
                                </div>
                            </div>

                            <span class="bg-soft-success p-2 rounded-pill text-center h6 mb-0 mt-4">
                                Healthy
                            </span>

                            <div class="row">
                                <div class="col-4 mt-4">
                                    <div class="text-center">
                                        <span class="h6 text-muted">Blood</span>
                                        <h6 class="mb-0 fw-normal">B +</h6>
                                    </div>
                                </div><!--end col-->

                                <div class="col-4 mt-4">
                                    <div class="text-center">
                                        <span class="h6 text-muted">Height</span>
                                        <h6 class="mb-0 fw-normal">175cm</h6>
                                    </div>
                                </div><!--end col-->

                                <div class="col-4 mt-4">
                                    <div class="text-center">
                                        <span class="h6 text-muted">Weight</span>
                                        <h6 class="mb-0 fw-normal">64k.g</h6>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                           <span class="bg-soft-success p-2 rounded-pill text-center h6 mb-0 mt-4">
                               <a href="{{route('complete-profile')}}"> Complete Profile </a>
                                </span>

                            <span class="bg-soft-success p-2 rounded-pill text-center h6 mb-0 mt-4">
                                Update Profile 
                            </span>
                           

                            <h6 class="mt-4 mb-0">Payments:</h6>
                            <ul class="list-unstyled mb-0 mt-4">
                                <li class="d-flex align-items-center">
                                    <img src="{{asset('assets/images/payment/mastercard.png')}}" class="avatar avatar-md-sm" alt="">
                                    <div class="flex-1 ms-3">
                                        <p class="mb-0">Mastercard <span class="ms-2">•••• 4584</span></p>
                                        <p class="text-muted mb-0">Expires 12/22</p>
                                    </div>
                                </li>

                                <li class="d-flex align-items-center mt-3">
                                    <img src="{{asset('assets/images/payment/discover.png')}}" class="avatar avatar-md-sm" alt="">
                                    <div class="flex-1 ms-3">
                                        <p class="mb-0">Discover <span class="ms-2">•••• 5796</span></p>
                                        <p class="text-muted mb-0">Expires 12/22</p>
                                    </div>
                                </li>

                                <li class="d-flex align-items-center mt-3">
                                    <img src="{{asset('assets/images/payment/rupay.png')}}" class="avatar avatar-md-sm" alt="">
                                    <div class="flex-1 ms-3">
                                        <p class="mb-0">Rupay <span class="ms-2">•••• 4645</span></p>
                                        <p class="text-muted mb-0">Expires 12/22</p>
                                    </div>
                                </li>

                                <li class="d-flex align-items-center mt-3">
                                    <img src="{{asset('assets/images/payment/american.png')}}" class="avatar avatar-md-sm" alt="">
                                    <div class="flex-1 ms-3">
                                        <p class="mb-0">American <span class="ms-2">•••• 4875</span></p>
                                        <p class="text-muted mb-0">Expires 12/22</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="mt-4">
                                <div class="d-grid">
                                    <a href="#" class="btn btn-soft-primary">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <h5 class="mb-0">Dashboard</h5>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12">
                                <div class="row">
                                    <div class="col-12 mt-4 pt-2">
                                        <div class="card border-0 rounded shadow">
                                            <div class="d-flex justify-content-between px-4 pt-4">
                                                <h6 class="align-items-center mb-0">Water <span class="badge badge-pill badge-soft-primary ms-1">93%</span></h6>
                                                <i class="ri-contrast-drop-line text-primary h5"></i>
                                            </div>
                                            <div id="rchart-1"></div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12 mt-4 pt-2">
                                        <div class="card border-0 rounded shadow p-4">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h6 class="align-items-center mb-0">Hemoglobin <span class="badge badge-pill badge-soft-success ms-1">19.5 g/dL</span></h6>
                                                <i class="ri-test-tube-line text-success h5"></i>
                                            </div>
                                            <div id="rchart-2"></div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->

                            <div class="col-xl-5 col-lg-6 col-12">
                                <div class="row">
                                    <div class="col-12 mt-4 pt-2">
                                        <div class="card border-0 rounded shadow p-4">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h6 class="align-items-center mb-0">Heartbeat <span class="badge badge-pill badge-soft-danger ms-1">80 bpm</span></h6>
                                                <i class="ri-heart-3-fill text-danger h5"></i>
                                            </div>
                                            <div id="rchart-3"></div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12 mt-4 pt-2">
                                        <div class="card border-0 rounded shadow">
                                            <div class="d-flex justify-content-between px-4 pt-4">
                                                <h6 class="align-items-center mb-0">Sugar levels <span class="badge badge-pill badge-soft-warning ms-1">90 mg/dL</span></h6>
                                                <i class="ri-dashboard-3-line text-warning h5"></i>
                                            </div>
                                            <div id="rchart-4"></div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->

                            <div class="col-xl-4 col-lg-6 col-12 mt-4 pt-2">
                                <div class="card border-0 rounded shadow">
                                    <div class="d-flex justify-content-between align-items-center px-4 pt-4">
                                        <h6 class="mb-0">Doctor's Appointment</h6>
                                        
                                        <div class="dropdown dropdown-primary">
                                            <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-ellipsis-h icons"></i></button>
                                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3">
                                                <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-book-medical align-middle h6"></i></span> Add New</a>
                                                <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-trash align-middle h6"></i></span> Delete</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 px-4">
                                        <form>
                                            <div class="mb-0">
                                                <input name="date" type="text" class="flatpickr flatpickr-input form-control" id="checkin-date">
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="p-4" data-simplebar style="max-height: 355px;">
                                      

                                        <div class="d-flex justify-content-between align-items-center rounded py-1 px-3 shadow mt-3">
                                            <i class="ri-virus-line h3 fw-normal text-warning mb-0"></i>
                                            <div class="flex-1 overflow-hidden ms-2">
                                                <h6 class="mb-0">Covid Test</h6>
                                                <p class="text-muted mb-0 text-truncate small">Dr. Alia Reddy</p>
                                            </div>
                                            <span class="mb-0">13 Dec</span>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center rounded py-1 px-3 shadow mt-3">
                                            <i class="ri-dossier-line h3 fw-normal text-secondary mb-0"></i>
                                            <div class="flex-1 overflow-hidden ms-2">
                                                <h6 class="mb-0">Dentist</h6>
                                                <p class="text-muted mb-0 text-truncate small">Dr. Toni Kovar</p>
                                            </div>
                                            <span class="mb-0">15 Dec</span>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center rounded py-1 px-3 shadow mt-3">
                                            <i class="ri-eye-2-line h3 fw-normal text-info mb-0"></i>
                                            <div class="flex-1 overflow-hidden ms-2">
                                                <h6 class="mb-0">Eye Test</h6>
                                                <p class="text-muted mb-0 text-truncate small">Dr. Jessica McFarlane</p>
                                            </div>
                                            <span class="mb-0">17 Dec</span>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center rounded py-1 px-3 shadow mt-3">
                                            <i class="ri-microscope-line h3 fw-normal text-danger mb-0"></i>
                                            <div class="flex-1 overflow-hidden ms-2">
                                                <h6 class="mb-0">Orthopedic</h6>
                                                <p class="text-muted mb-0 text-truncate small">Dr. Elsie Sherman</p>
                                            </div>
                                            <span class="mb-0">18 Dec</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                    

                            <div class="col-xl-4 col-lg-6 mt-4 pt-2">
                                <div class="card chat chat-person border-0 shadow rounded">
                                    <div class="d-flex justify-content-between border-bottom p-4">
                                        <div class="d-flex">
                                            <img src="{{asset('assets/images/doctors/02.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="flex-1 overflow-hidden ms-3">
                                                <a href="#" class="text-dark mb-0 h6 d-block text-truncate">Cristino Murphy</a>
                                                <small class="text-muted"><i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i> Online</small>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled mb-0">
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-ellipsis-h icons"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3">
                                                    <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-user align-middle h6"></i></span> Profile</a>
                                                    <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                                    <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-trash align-middle h6"></i></span> Delete</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="p-4 list-unstyled mb-0 chat" data-simplebar style="background: url('../assets/images/bg/bg-chat.png') center center; max-height: 300px;">
                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="{{asset('assets/images/doctors/02.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Hey Christopher</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>59 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="{{asset('assets/images/client/09.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Hello Cristino</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>45 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="{{asset('assets/images/client/09.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">How can i help you?</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>44 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="{{asset('assets/images/doctors/02.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Nice to meet you</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>42 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="{{asset('assets/images/doctors/02.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Hope you are doing fine?</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>40 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="{{asset('assets/images/client/09.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">I'm good thanks for asking</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>45 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="{{asset('assets/images/doctors/02.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">I am intrested to know more about your prices and services you offer</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>35 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="{{asset('assets/images/client/09.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Sure please check below link to find more useful information <a href="https://1.envato.market/4n73n" target="_blank" class="text-primary">https://shreethemes.in/landrick/</a></p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>25 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="{{asset('assets/images/doctors/02.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Thank you 😊</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>20 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="{{asset('assets/images/client/09.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Welcome</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>18 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="p-2 rounded-bottom shadow">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control border" placeholder="Enter Message...">
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-message icons"></i></a>
                                                <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-smile icons"></i></a>
                                                <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-paperclip icons"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-4 col-lg-6 mt-4 pt-2">
                                <div class="card border-0 shadow rounded p-4">
                                    <h6 class="mb-0">Monthly Reports</h6>

                                    <div class="mt-4 pt-2">
                                        <div class="progress-box">
                                            <h6 class="title text-muted fw-normal">Treatment report</h6>
                                            <div class="progress">
                                                <div class="progress-bar position-relative bg-primary" style="width:84%;">
                                                    <div class="progress-value d-block text-muted">84%</div>
                                                </div>
                                            </div>
                                        </div><!--end process box-->

                                        <div class="progress-box mt-4">
                                            <h6 class="title text-muted fw-normal">State of being report</h6>
                                            <div class="progress">
                                                <div class="progress-bar position-relative bg-primary" style="width:79%;">
                                                    <div class="progress-value d-block text-muted">79%</div>
                                                </div>
                                            </div>
                                        </div><!--end process box-->

                                        <div class="progress-box mt-4">
                                            <h6 class="title text-muted fw-normal">Health department report</h6>
                                            <div class="progress">
                                                <div class="progress-bar position-relative bg-primary" style="width:95%;">
                                                    <div class="progress-value d-block text-muted">95%</div>
                                                </div>
                                            </div>
                                        </div><!--end process box-->
                                        
                                        <div class="progress-box mt-4">
                                            <h6 class="title text-muted fw-normal">Questionnaire</h6>
                                            <div class="progress">
                                                <div class="progress-bar position-relative bg-primary" style="width:90%;">
                                                    <div class="progress-value d-block text-muted">90%</div>
                                                </div>
                                            </div>
                                        </div><!--end process box-->
                                        
                                        <div class="progress-box mt-4">
                                            <h6 class="title text-muted fw-normal">Covid-19 report</h6>
                                            <div class="progress">
                                                <div class="progress-bar position-relative bg-primary" style="width:75%;">
                                                    <div class="progress-value d-block text-muted">75%</div>
                                                </div>
                                            </div>
                                        </div><!--end process box-->
                                        
                                        <div class="progress-box mt-4">
                                            <h6 class="title text-muted fw-normal">Blood pressure report</h6>
                                            <div class="progress">
                                                <div class="progress-bar position-relative bg-primary" style="width:97%;">
                                                    <div class="progress-value d-block text-muted">97%</div>
                                                </div>
                                            </div>
                                        </div><!--end process box-->
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-4 mt-4 pt-2">
                                <h6 class="mb-0">Contact us</h6>
                                <div class="row">
                                    <div class="col-xl-12 col-md-6 mt-4">
                                        <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                            <div class="icon text-center rounded-lg mx-auto">
                                                <i class="uil uil-message align-middle h3 mb-0"></i>
                                            </div>
                                            <div class="card-body p-0 mt-3">
                                                <a href="#" class="title text-dark h5 d-block">New Messages</a>
                                                <a href="#" class="link">Read more <i class="ri-arrow-right-line align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    
                                    <div class="col-xl-12 col-md-6 mt-4">
                                        <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                            <div class="icon text-center rounded-lg mx-auto">
                                                <i class="uil uil-envelope-star align-middle h3 mb-0"></i>
                                            </div>
                                            <div class="card-body p-0 mt-3">
                                                <a href="#" class="title text-dark h5 d-block">Latest Proposals</a>
                                                <a href="#" class="link">View more <i class="ri-arrow-right-line align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->


        @endsection