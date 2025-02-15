<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>
    <x-slot:name>{{ $name }}</x-slot:name>
    <div class="card">
        <div class="card-header border-bottom">
            <!-- Wizard navigation-->
            <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab" role="tablist">
                <!-- Wizard navigation item 1-->
                <a class="nav-item nav-link active" id="wizard1-tab" href="#wizard1" data-bs-toggle="tab" role="tab"
                    aria-controls="wizard1" aria-selected="true">
                    <div class="wizard-step-icon">1</div>
                    <div class="wizard-step-text">
                        <div class="wizard-step-text-name">Account Setup</div>
                        <div class="wizard-step-text-details">Basic details and information</div>
                    </div>
                </a>
                <!-- Wizard navigation item 2-->
                <a class="nav-item nav-link" id="wizard2-tab" href="#wizard2" data-bs-toggle="tab" role="tab"
                    aria-controls="wizard2" aria-selected="true">
                    <div class="wizard-step-icon">2</div>
                    <div class="wizard-step-text">
                        <div class="wizard-step-text-name">Billing Details</div>
                        <div class="wizard-step-text-details">Credit card information</div>
                    </div>
                </a>
                <!-- Wizard navigation item 3-->
                <a class="nav-item nav-link" id="wizard3-tab" href="#wizard3" data-bs-toggle="tab" role="tab"
                    aria-controls="wizard3" aria-selected="true">
                    <div class="wizard-step-icon">3</div>
                    <div class="wizard-step-text">
                        <div class="wizard-step-text-name">Preferences</div>
                        <div class="wizard-step-text-details">Notification and account options</div>
                    </div>
                </a>
                <!-- Wizard navigation item 4-->
                <a class="nav-item nav-link" id="wizard4-tab" href="#wizard4" data-bs-toggle="tab" role="tab"
                    aria-controls="wizard4" aria-selected="true">
                    <div class="wizard-step-icon">4</div>
                    <div class="wizard-step-text">
                        <div class="wizard-step-text-name">Review &amp;Submit</div>
                        <div class="wizard-step-text-details">Review and submit changes</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content" id="cardTabContent">
                <!-- Wizard tab pane item 1-->
                <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel"
                    aria-labelledby="wizard1-tab">
                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-xl-8">
                            <h3 class="text-primary">Step 1</h3>
                            <h5 class="card-title mb-4">Enter your account information</h5>
                            <form>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Username (how your name will appear to
                                        other users on the site)</label>
                                    <input class="form-control" id="inputUsername" type="text"
                                        placeholder="Enter your username" value="username" />
                                </div>
                                <div class="row gx-3">
                                    <div class="mb-3 col-md-6">
                                        <label class="small mb-1" for="inputFirstName">First name</label>
                                        <input class="form-control" id="inputFirstName" type="text"
                                            placeholder="Enter your first name" value="Valerie" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="small mb-1" for="inputLastName">Last name</label>
                                        <input class="form-control" id="inputLastName" type="text"
                                            placeholder="Enter your last name" value="Luna" />
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="mb-3 col-md-6">
                                        <label class="small mb-1" for="inputOrgName">Organization name</label>
                                        <input class="form-control" id="inputOrgName" type="text"
                                            placeholder="Enter your organization name" value="Start Bootstrap" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="small mb-1" for="inputLocation">Location</label>
                                        <input class="form-control" id="inputLocation" type="text"
                                            placeholder="Enter your location" value="San Francisco, CA" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                    <input class="form-control" id="inputEmailAddress" type="email"
                                        placeholder="Enter your email address" value="name@example.com" />
                                </div>
                                <div class="row gx-3">
                                    <div class="col-md-6 mb-md-0">
                                        <label class="small mb-1" for="inputPhone">Phone number</label>
                                        <input class="form-control" id="inputPhone" type="tel"
                                            placeholder="Enter your phone number" value="555-123-4567" />
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <label class="small mb-1" for="inputBirthday">Birthday</label>
                                        <input class="form-control" id="inputBirthday" type="text"
                                            name="birthday" placeholder="Enter your birthday" value="06/10/1988" />
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-light disabled" type="button"
                                        disabled="">Previous</button>
                                    <button class="btn btn-primary" type="button">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Wizard tab pane item 2-->
                <div class="tab-pane py-5 py-xl-10 fade" id="wizard2" role="tabpanel"
                    aria-labelledby="wizard2-tab">
                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-xl-8">
                            <h3 class="text-primary">Step 2</h3>
                            <h5 class="card-title mb-4">Enter your billing details</h5>
                            <form>
                                <div class="row gx-3">
                                    <div class="mb-3 col-md-6">
                                        <label class="small mb-1" for="inputBillingName">Name on card</label>
                                        <input class="form-control" id="inputBillingName" type="text"
                                            placeholder="Enter the name as it appears on your card"
                                            value="Valerie Luna" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="small mb-1" for="inputBillingCCNumber">Card number</label>
                                        <input class="form-control" id="inputBillingCCNumber" type="text"
                                            placeholder="Enter your credit card number" value="4444 3333 2222 1111" />
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-md-4 mb-4 mb-md-0">
                                        <label class="small mb-1" for="inputOrgName">Card expiry month</label>
                                        <input class="form-control" id="inputOrgName" type="text"
                                            placeholder="Enter expiry month" value="06" />
                                    </div>
                                    <div class="col-md-4 mb-4 mb-md-0">
                                        <label class="small mb-1" for="inputLocation">Card expiry year</label>
                                        <input class="form-control" id="inputLocation" type="text"
                                            placeholder="Enter expiry year" value="2024" />
                                    </div>
                                    <div class="col-md-4 mb-0">
                                        <label class="small mb-1" for="inputLocation">CVV Number</label>
                                        <input class="form-control" id="inputLocation" type="password"
                                            placeholder="Enter CVV number" value="111" />
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-light" type="button">Previous</button>
                                    <button class="btn btn-primary" type="button">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Wizard tab pane item 3-->
                <div class="tab-pane py-5 py-xl-10 fade" id="wizard3" role="tabpanel"
                    aria-labelledby="wizard3-tab">
                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-xl-8">
                            <h3 class="text-primary">Step 3</h3>
                            <h5 class="card-title mb-4">Choose when you want to receive email notifications</h5>
                            <form>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" id="checkAccountChanges" type="checkbox"
                                        checked="" />
                                    <label class="form-check-label" for="checkAccountChanges">Changes made to your
                                        account</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" id="checkAccountGroups" type="checkbox"
                                        checked="" />
                                    <label class="form-check-label" for="checkAccountGroups">Changes are made to
                                        groups you're part of</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" id="checkProductUpdates" type="checkbox"
                                        checked="" />
                                    <label class="form-check-label" for="checkProductUpdates">Product updates for
                                        products you've purchased or starred</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" id="checkProductNew" type="checkbox"
                                        checked="" />
                                    <label class="form-check-label" for="checkProductNew">Information on new products
                                        and services</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" id="checkPromotional" type="checkbox" />
                                    <label class="form-check-label" for="checkPromotional">Marketing and promotional
                                        offers</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="checkSecurity" type="checkbox"
                                        checked="" disabled="" />
                                    <label class="form-check-label" for="checkSecurity">Security alerts</label>
                                </div>
                                <hr class="my-4" />
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-light" type="button">Previous</button>
                                    <button class="btn btn-primary" type="button">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Wizard tab pane item 4-->
                <div class="tab-pane py-5 py-xl-10 fade" id="wizard4" role="tabpanel"
                    aria-labelledby="wizard4-tab">
                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-xl-8">
                            <h3 class="text-primary">Step 4</h3>
                            <h5 class="card-title mb-4">Review the following information and submit</h5>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate">
                                    <em>Username:</em>
                                </div>
                                <div class="col">username</div>
                            </div>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate">
                                    <em>Name:</em>
                                </div>
                                <div class="col">Valerie Luna</div>
                            </div>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate">
                                    <em>Organization Name:</em>
                                </div>
                                <div class="col">Start Bootstrap</div>
                            </div>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate">
                                    <em>Location:</em>
                                </div>
                                <div class="col">San Francisco, CA</div>
                            </div>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate">
                                    <em>Email Address:</em>
                                </div>
                                <div class="col">
                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="ee808f838bae8b968f839e828bc08d8183">[email &#160;protected]</a>
                                </div>
                            </div>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate">
                                    <em>Phone Number:</em>
                                </div>
                                <div class="col">555-123-4567</div>
                            </div>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate">
                                    <em>Birthday:</em>
                                </div>
                                <div class="col">06/10/1988</div>
                            </div>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate">
                                    <em>Credit Card Number:</em>
                                </div>
                                <div class="col">**** **** **** 1111</div>
                            </div>
                            <div class="row small text-muted">
                                <div class="col-sm-3 text-truncate">
                                    <em>Credit Card Expiration:</em>
                                </div>
                                <div class="col">06/2024</div>
                            </div>
                            <hr class="my-4" />
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-light" type="button">Previous</button>
                                <button class="btn btn-primary" type="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
