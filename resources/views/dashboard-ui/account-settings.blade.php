@extends('layouts.master')
@section('title')
    Settings
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Settings" pagetitle="Accounts" />

    <form action="#!">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="fs-16">Personal Information</h5>
                <p class="text-muted mb-lg-0">Personal Identifiable Information (PII) is defined as: Any representation of
                    information that permits the identity of an individual to whom the information applies to be reasonably
                    inferred by either direct or indirect means.</p>
            </div>
            <!--end col-->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div>
                                    <label for="firstName" class="form-label">First Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstName"
                                        placeholder="Enter your first name" value="Raquel">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div>
                                    <label for="lastName" class="form-label">Last Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastName"
                                        placeholder="Enter your last name" value="Murillo">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div>
                                    <label for="emailInput" class="form-label">Email Address <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="emailInput" placeholder="name@toner.com"
                                        value="raquel@toner.com">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div>
                                    <label for="phoneInput" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phoneInput"
                                        placeholder="Enter phone number" value="+(235) 01234 5678">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div>
                                    <label for="birdthdatInput" class="form-label">Joining Date</label>
                                    <input type="text" class="form-control" data-provider="flatpickr" id="birdthdatInput"
                                        data-date-format="d M, Y" data-deafult-date="24 Nov, 2021" placeholder="Select date"
                                        readonly>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div>
                                    <label for="designationInput" class="form-label">Designation</label>
                                    <input type="text" class="form-control" id="designationInput"
                                        placeholder="Designation" value="Sales & Marketing Manager">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <label for="websiteInput1" class="form-label">Website</label>
                                    <input type="text" class="form-control" id="websiteInput1"
                                        placeholder="www.example.com" value="www.toner.com">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <label for="cityInput" class="form-label">City</label>
                                    <input type="text" class="form-control" id="cityInput" placeholder="City"
                                        value="Phoenix">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <label for="countryInput" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="countryInput" placeholder="Country"
                                        value="United States">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <label for="zipcodeInput" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" minlength="5" maxlength="6"
                                        id="zipcodeInput" placeholder="Enter zipcode" value="90011">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-secondary">Update Profile</button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--edn row-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-4">
                <h5 class="fs-16">Social Media</h5>
                <p class="text-muted mb-lg-0">Personal Identifiable Information (PII) is defined as: Any representation of
                    information that permits the identity of an individual to whom the information applies to be reasonably
                    inferred by either direct or indirect means.</p>
            </div>
            <!--end col-->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-4">
                                <div>
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" placeholder="Username"
                                        value="Raquel">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div>
                                    <label for="whatsappInput" class="form-label">Whatsapp</label>
                                    <input type="text" class="form-control" id="whatsappInput"
                                        placeholder="+(235) 01234 5678" value="+(253) 98765 4321">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div>
                                    <label for="twitterInput" class="form-label">Twitter <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="twitterInput" placeholder="Username"
                                        value="@raquel_morillo">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div>
                                    <label for="emailInput2" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="emailInput2"
                                        placeholder="example@toner.com" value="raquelmurillo@toner.com">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Change Social Media</button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--edn row-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-4">
                <h5 class="fs-16">Change Password</h5>
                <p class="text-muted mb-lg-0">Personal Identifiable Information (PII) is defined as: Any representation of
                    information that permits the identity of an individual to whom the information applies to be reasonably
                    inferred by either direct or indirect means.</p>
            </div>
            <!--end col-->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-4">
                                <div>
                                    <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                    <input type="password" class="form-control" id="oldpasswordInput"
                                        placeholder="Enter current password">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <label class="form-label" for="password-input">Password</label>
                                <div class="position-relative auth-pass-inputgroup">
                                    <input type="password" class="form-control pe-5 password-input"
                                        onpaste="return false" placeholder="Enter password" id="password-input"
                                        aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        required>
                                    <button
                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                        type="button" id="password-addon"><i
                                            class="ri-eye-fill align-middle"></i></button>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label class="form-label" for="confirm-password-input">Confirm Password</label>
                                <div class="position-relative auth-pass-inputgroup">
                                    <input type="password" class="form-control pe-5 password-input"
                                        onpaste="return false" placeholder="Confirm password"
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="confirm-password-input"
                                        required>
                                    <button
                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                        type="button" id="confirm-password-input"><i
                                            class="ri-eye-fill align-middle"></i></button>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <a href="javascript:void(0);" class="link-primary text-decoration-underline">Forgot
                                        Password ?</a>
                                </div>
                            </div>
                            <!--end col-->
                            <div id="password-contain" class="p-3 badge-soft-danger mb-2 rounded">
                                <h5 class="fs-15 mb-3">Password must contain:</h5>
                                <p id="pass-length" class="invalid fs-13 mb-2">Minimum <b>8 characters</b></p>
                                <p id="pass-lower" class="invalid fs-13 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                <p id="pass-upper" class="invalid fs-13 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                <p id="pass-number" class="invalid fs-13 mb-0">A least <b>number</b> (0-9)</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success">Change Password</button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-4">
                <h5 class="fs-16">Application Notifications:</h5>
                <p class="text-muted mb-lg-0">An app notification is a message or alert sent by an application to the
                    device user. They include push notifications and in-app notifications.</p>
            </div>
            <!--end col-->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">

                        <h6 class="fs-16">By Email</h6>
                        <p class="text-muted">Receive the latest news, update and industry tutorials for us.</p>

                        <div class="row g-3">
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="ExclusiveProduct">
                                    <label class="form-check-label" for="ExclusiveProduct">
                                        Exclusive product offers
                                    </label>
                                    <p class="text-muted">Used or owned by only one person or group, and not shared with
                                        anyone else.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="dailyMessages">
                                    <label class="form-check-label" for="dailyMessages">
                                        Daily Messages
                                    </label>
                                    <p class="text-muted">Today is hard, tomorrow will be worse, but the day after tomorrow
                                        will be sunshine.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="weeklyActivity"
                                        checked>
                                    <label class="form-check-label" for="weeklyActivity">
                                        Weekly activity summary
                                    </label>
                                    <p class="text-muted">Open the activity app on the watch and scroll down to the bottom
                                        and tap on "Weekly Summary"</p>
                                </div>
                            </div>
                        </div>

                        <h6 class="fs-16 mt-4">Notification from Us</h6>
                        <p class="text-muted">Receive the latest news, update and industry tutorials for us.</p>

                        <div class="row g-3">
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="news&Upates"
                                        checked>
                                    <label class="form-check-label" for="news&Upates">
                                        News & Updates
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="bestTrips">
                                    <label class="form-check-label" for="bestTrips">
                                        Best Trips
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="userResearch">
                                    <label class="form-check-label" for="userResearch">
                                        User Research
                                    </label>
                                </div>
                            </div>
                        </div>

                        <h6 class="fs-16 mt-4">Comments</h6>
                        <p class="text-muted">Receive the latest news, update and industry tutorials for us.</p>

                        <div class="row g-3">
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="commentsList"
                                        id="donotNotifyme">
                                    <label class="form-check-label" for="donotNotifyme">
                                        Do not notify me
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="commentsList"
                                        id="mentionsOnly">
                                    <label class="form-check-label" for="mentionsOnly">
                                        Mentions only
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="commentsList" id="allcomment"
                                        checked>
                                    <label class="form-check-label" for="allcomment">
                                        All comments
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-4">
                <h5 class="fs-16">Privacy & Security</h5>
                <p class="text-muted mb-lg-0">Security is about the safeguarding of data, whereas privacy is about the
                    safeguarding of user identity. The specific differences, however, are more complex, and there can
                    certainly be areas of overlap between the two.</p>
            </div>
            <!--end col-->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0">
                            <div class="flex-grow-1">
                                <h6 class="fs-16 mb-1">Two-factor Authentication</h6>
                                <p class="text-muted">Two-factor authentication is an enhanced security meansur. Once
                                    enabled, you'll be required to give two types of identification when you log into Google
                                    Authentication and SMS are Supported.</p>
                            </div>
                            <div class="flex-shrink-0 ms-sm-3">
                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">Enable Two-facor
                                    Authentication</a>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                            <div class="flex-grow-1">
                                <h6 class="fs-16 mb-1">Secondary Verification</h6>
                                <p class="text-muted">The first factor is a password and the second commonly includes a
                                    text with a code sent to your smartphone, or biometrics using your fingerprint, face, or
                                    retina.</p>
                            </div>
                            <div class="flex-shrink-0 ms-sm-3">
                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">Set up secondary method</a>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                            <div class="flex-grow-1">
                                <h6 class="fs-16 mb-1">Backup Codes</h6>
                                <p class="text-muted mb-sm-0">A backup code is automatically generated for you when you
                                    turn on two-factor authentication through your iOS or Android Twitter app. You can also
                                    generate a backup code on twitter.com.</p>
                            </div>
                            <div class="flex-shrink-0 ms-sm-3">
                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">Generate backup codes</a>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5 class="card-title text-decoration-underline mb-3">Delete This Account:</h5>
                            <p class="text-muted">Go to the Data &amp; Privacy section of your profile Account. Scroll to
                                "Your data &amp; privacy options." Delete your Profile Account. Follow the instructions to
                                delete your account :</p>
                            <div>
                                <input type="password" class="form-control" id="passwordInput"
                                    placeholder="Enter your password" value="make@321654987" style="max-width: 265px;">
                            </div>
                            <div class="hstack gap-2 mt-3">
                                <a href="javascript:void(0);" class="btn btn-soft-danger">Close &amp; Delete This
                                    Account</a>
                                <a href="javascript:void(0);" class="btn btn-soft-dark">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </form>
    <!--end form-->

    <!-- deleteRecordModal -->
    <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h4 class="mb-2">Are you sure ?</h4>
                            <p class="text-muted fs-17 mx-4 mb-0">Are you sure you want to remove this record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-notification">Yes, Delete
                            It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
@endsection
