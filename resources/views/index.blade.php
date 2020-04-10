<!DOCTYPE html>
<html lang="en">
    @include('layout.head')

    <body class="boxed-layout">
        <div class="container-fluid align-items-center ">
            <div class="main-panel col-lg-8 col-md-12 mt btn-group mx-auto ">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Line chart</h4>
                                    <div id="c3-line-chart"></div>
                                    <a  href="{{route('viewcode', ['name'=>'linechart'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Donut chart</h4>
                                    <div id="c3-donut-chart"></div>
                                    <a  href="{{route('viewcode', ['name'=>'donutchart'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Just Gage</h4>
                                    <div class="mb-4" id="g1"></div>
                                    <a  href="{{route('viewcode', ['name'=>'justgate'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="doughnutChart"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample">
                                        <span class="text-center">Enter values</span>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Pink</label>
                                            <input type="number" min="0" max="100" class="form-control" id="Pink" placeholder="30" value="30">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Blue</label>
                                            <input type="number" min="0" max="100" class="form-control" id="Blue" placeholder="50" value="50">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Yellow</label>
                                            <input type="number" min="0" max="100" class="form-control" id="Yellow" placeholder="30" value="30">
                                        </div>
                                    </form>
                                    <a  href="{{route('viewcode', ['name'=>'doughnutch'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
                                        <div class="card-body">
                                            <div class="wrapper text-center">
                                                <h4 class="card-title">Alerts Popups</h4>
                                                <p class="card-description">A basic message</p>
                                                <button class="btn btn-outline-success" onclick="showSwal('basic')">Click here!</button>
                                            </div>
                                            <a  href="{{route('viewcode', ['name'=>'alerts'])}}" class="bnt-more">code</a>

                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
                                        <div class="card-body">
                                            <div class="wrapper text-center">
                                                <h4 class="card-title">Alerts Popups</h4>
                                                <p class="card-description">A title with a text under</p>
                                                <button class="btn btn-outline-success" onclick="showSwal('title-and-text')">Click here!</button>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                                        <div class="card-body">
                                            <div class="wrapper text-center">
                                                <h4 class="card-title">Alerts Popups</h4>
                                                <p class="card-description">A success message!</p>
                                                <button class="btn btn-outline-success" onclick="showSwal('success-message')">Click here!</button>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Dragula</h4>
                                    <p class="card-description">Drag and drop between Team A and Team B</p>
                                    <div class="row">
                                        <div class="col-md-6 h-100">
                                            <div class="p-4">
                                                <h6 class="card-title">Team A</h6>
                                                <div id="profile-list-left" class="py-2">
                                                    <div class="card rounded mb-2">
                                                        <div class="card-body p-3">
                                                            <div class="media">
                                                                <img src="{{ URL::asset('../resources/images/faces/face1.jpg') }}" alt="image" class="img-sm mr-3 rounded-circle">
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Rebecca young</h6>
                                                                    <p class="mb-0 text-muted">
                                                                        Software engineer                               
                                                                    </p>
                                                                </div>                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card rounded mb-2">
                                                        <div class="card-body p-3">
                                                            <div class="media">
                                                                <img src="{{ URL::asset('../resources/images/faces/face2.jpg') }}" alt="image" class="img-sm mr-3 rounded-circle">
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Jacob march</h6>
                                                                    <p class="mb-0 text-muted">
                                                                        Designer                                
                                                                    </p>
                                                                </div>                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card rounded mb-2">
                                                        <div class="card-body p-3">
                                                            <div class="media">
                                                                <img src="{{ URL::asset('../resources/images/faces/face3.jpg') }}" alt="image" class="img-sm mr-3 rounded-circle">
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Catherine</h6>
                                                                    <p class="mb-0 text-muted">
                                                                        Tester                                
                                                                    </p>
                                                                </div>                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card rounded mb-2">
                                                        <div class="card-body p-3">
                                                            <div class="media">
                                                                <img src="{{ URL::asset('../resources/images/faces/face4.jpg') }}" alt="image" class="img-sm mr-3 rounded-circle">
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Thomas Cook</h6>
                                                                    <p class="mb-0 text-muted">
                                                                        Developer                                
                                                                    </p>
                                                                </div>                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 h-100">
                                            <div class="p-4">
                                                <h6 class="card-title">Team B</h6>
                                                <div id="profile-list-right" class="py-2">
                                                    <div class="card rounded mb-2">
                                                        <div class="card-body p-3">
                                                            <div class="media">
                                                                <img src="{{ URL::asset('../resources/images/faces/face5.jpg') }}" alt="image" class="img-sm mr-3 rounded-circle">
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Keto Philip</h6>
                                                                    <p class="mb-0 text-muted">
                                                                        Business Analyst                               
                                                                    </p>
                                                                </div>                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card rounded mb-2">
                                                        <div class="card-body p-3">
                                                            <div class="media">
                                                                <img src="{{ URL::asset('../resources/images/faces/face6.jpg') }}" alt="image" class="img-sm mr-3 rounded-circle">
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Jacob Stephen</h6>
                                                                    <p class="mb-0 text-muted">
                                                                        Tester                                
                                                                    </p>
                                                                </div>                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card rounded mb-2">
                                                        <div class="card-body p-3">
                                                            <div class="media">
                                                                <img src="{{ URL::asset('../resources/images/faces/face7.jpg') }}" alt="image" class="img-sm mr-3 rounded-circle">
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">March Creg</h6>
                                                                    <p class="mb-0 text-muted">
                                                                        Developer                               
                                                                    </p>
                                                                </div>                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card rounded mb-2">
                                                        <div class="card-body p-3">
                                                            <div class="media">
                                                                <img src="{{ URL::asset('../resources/images/faces/face8.jpg') }}" alt="image" class="img-sm mr-3 rounded-circle">
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Peter Beckham</h6>
                                                                    <p class="mb-0 text-muted">
                                                                        Designer                                
                                                                    </p>
                                                                </div>                              
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a  href="{{route('viewcode', ['name'=>'dragula'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xl-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tab</h4>
                                    <p class="card-description">Horizontal bootstrap tab</p>
                                    <ul class="nav nav-tabs" role="tablist" style="color:black">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact-1" role="tab" aria-controls="contact-1" aria-selected="false">Contact</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="media">
                                                <img class="mr-3 w-25 rounded" src="{{ URL::asset('../resources/images/faces/face12.jpeg') }}" alt="sample image">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Why choose us?</h4>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                                        Why do we use it?
                                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="media">
                                                <img class="mr-3 w-25 rounded" src="{{ URL::asset('../resources/images/samples/300x300/13.jpeg') }}" alt="sample image">
                                                <div class="media-body">
                                                    <h4 class="mt-0">John Doe</h4>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                                        Why do we use it?
                                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact-1" role="tabpanel" aria-labelledby="contact-tab">
                                            <h4>Contact us </h4>
                                            <p>
                                                Feel free to contact us if you have any questions!
                                            </p>
                                            <p>
                                                <i class="ion ion-md-call text-info"></i>
                                                +02044649343
                                            </p>
                                            <p>
                                                <i class="ion ion-md-mail text-success"></i>
                                                contactus@ignition.com
                                            </p>
                                        </div>
                                    </div>
                                    <a  href="{{route('viewcode', ['name'=>'tab'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Notifications</h4>
                                    <div class="template-demo d-flex justify-content-between flex-wrap">
                                        <button type="button" class="btn btn-success btn-fw" onclick="showSuccessToast()">Success</button>
                                        <button type="button" class="btn btn-info btn-fw" onclick="showInfoToast()">Info</button>
                                        <button type="button" class="btn btn-warning btn-fw" onclick="showWarningToast()">Warning</button>
                                        <button type="button" class="btn btn-danger btn-fw" onclick="showDangerToast()">Danger</button>
                                    </div>
                                    <a  href="{{route('viewcode', ['name'=>'notification'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <!--x-editable starts-->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">X-editable Editor</h4>
                                    <p class="card-description">Edit forms inline</p>
                                    <div class="template-demo">
                                        <form id="editable-form" class="editable-form">
                                            <div class="form-group row">
                                                <label class="col-6 col-lg-4 col-form-label">Simple text field</label>
                                                <div class="col-6 col-lg-8 d-flex align-items-center">
                                                    <a href="#" id="username" data-type="text" data-pk="1">awesome</a>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-6 col-lg-4 col-form-label">Empty text field, required</label>
                                                <div class="col-6 col-lg-8 d-flex align-items-center">
                                                    <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-6 col-lg-4 col-form-label">Select, local array, custom display</label>
                                                <div class="col-6 col-lg-8 d-flex align-items-center">
                                                    <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex">not selected</a>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-6 col-lg-4 col-form-label">Combodate (date)</label>
                                                <div class="col-6 col-lg-8 d-flex align-items-center">
                                                    <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth">15/05/1984</a>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-6 col-lg-4 col-form-label">Textarea, buttons below. Submit by ctrl+enter</label>
                                                <div class="col-6 col-lg-8 d-flex align-items-center">
                                                    <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <a  href="{{route('viewcode', ['name'=>'xeditable'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                            <!--x-editable ends-->
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <!--form mask starts-->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Form mask</h4>
                                    <p class="card-description">Gives a preview of input format</p>
                                    <form class="forms-sample">
                                        <div class="form-group row">
                                            <div class="col">
                                                <label>Date:</label>
                                                <input class="form-control" data-inputmask="'alias': 'date'" />
                                            </div>
                                            <div class="col">
                                                <label>Date time:</label>
                                                <input class="form-control" data-inputmask="'alias': 'datetime'" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Date with custom placeholder:</label>
                                            <input class="form-control" data-inputmask="'alias': 'date','placeholder': '*'" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phone:</label>
                                            <input class="form-control" data-inputmask="'alias': 'phonebe'" />
                                        </div>
                                        <div class="form-group">
                                            <label>Currency:</label>
                                            <input class="form-control" data-inputmask="'alias': 'currency'" />
                                        </div>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label>Email:</label>
                                                <input class="form-control" data-inputmask="'alias': 'email'" />
                                            </div>
                                            <div class="col">
                                                <label>Ip:</label>
                                                <input class="form-control" data-inputmask="'alias': 'ip'" />
                                            </div>
                                        </div>
                                    </form>
                                    <a  href="{{route('viewcode', ['name'=>'formmask'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                            <!--form mask ends-->
                        </div>
                    </div>

                    <!-- partial -->

                    <div class="row grid-margin">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Bootstrap Maxlength- Validation 1</h4>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">Default usage</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" type="text" placeholder="Type Something..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">Few options</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input class="form-control" maxlength="20" name="defaultconfig-2" id="defaultconfig-2" type="text" placeholder="Type Something..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">All the options</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input class="form-control" maxlength="10" name="defaultconfig-3" id="defaultconfig-3" type="text" placeholder="Type Something..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">Text Area</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <textarea id="maxlength-textarea" class="form-control" maxlength="100" rows="2" placeholder="This textarea has a limit of 100 chars."></textarea>
                                        </div>
                                    </div>
                                    <a  href="{{route('viewcode', ['name'=>'maxlength'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row grid-margin">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Validation 2</h4>
                                    <form class="cmxform" id="commentForm" method="get" action="#">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="cname">Name (required, at least 2 characters)</label>
                                                <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cemail">E-Mail (required)</label>
                                                <input id="cemail" class="form-control" type="email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="curl">URL (optional)</label>
                                                <input id="curl" class="form-control" type="url" name="url">
                                            </div>
                                            <div class="form-group">
                                                <label for="ccomment">Your comment (required)</label>
                                                <textarea id="ccomment" class="form-control" name="comment" required></textarea>
                                            </div>
                                            <input class="btn btn-primary pull-right" type="submit" value="Submit">
                                        </fieldset>
                                    </form>
                                    <a  href="{{route('viewcode', ['name'=>'valid2'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Validation 3 </h4>
                                    <form class="cmxform" id="signupForm" method="get" action="#">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="firstname">Firstname</label>
                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname">Lastname</label>
                                                <input id="lastname" class="form-control" name="lastname" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input id="username" class="form-control" name="username" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input id="password" class="form-control" name="password" type="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="confirm_password">Confirm password</label>
                                                <input id="confirm_password" class="form-control" name="confirm_password" type="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" class="form-control" name="email" type="email">
                                            </div>
                                            <input class="btn btn-primary pull-right" type="submit" value="Submit">
                                        </fieldset>
                                    </form>
                                    <a  href="{{route('viewcode', ['name'=>'valid3'])}}" class="bnt-more">code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- validation form end -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>


        @include('layout.footer')
        @include('layout.script')
    </body>

</html>

