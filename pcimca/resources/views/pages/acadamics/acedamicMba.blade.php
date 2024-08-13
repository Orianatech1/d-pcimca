@extends('layout.main')

@section('main-content')



<!--PCIMCA -->
<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">Academics</div>
        <!-- <div class="banner_text2">HOLISTIC LEADERS <br> TOMORROW</div> -->
        <div class="breadcrumbs_mainbox width100">

            <a href="{{ url('/') }}">Home</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/acedamic') }}">Academics</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/acedamicMba') }}">MBA</a>



        </div>
    </div>
</div>

<div class="middle_section_box width100 inner_middle_section_box">


    <div class="width100">

        <div class="left_panel">
            <a href="javascript:void(0);" class="left_menu_toggle" onclick="myFunction_innerleftmenu()"><img
                    src="assets/images/menu_toggle.png"></a>
            <div id="inner_leftmenu" class="left_menu_box">
                <a href="javascript:void(0);" class="left_menu_toggle_close" onclick="myFunction_innerleftmenu()">X</a>
                <ul>
                    <li><a href="{{ url('/acedamicMba') }}">MBA Overview</a></li>
                    <li><a href="{{ url('/mbaAcademicCalander') }}">Academic Calander</a></li>
                    <li><a href="{{ url('/mbaTeachingLearning') }}">Teaching Learning Process</a></li>
                    <li><a href="{{ url('/mbaCourseOutcome') }}">Course Outcome</a></li>
                    <li><a href="{{ url('/mbaE-content') }}">E-content</a></li>
                </ul>
            </div>
        </div>

            <div class="right_panel">
                <div class="row" style="padding-left: 5%">
                    <section>
                        <div class="container">
                            <div class="row pt-5">
                                <div class="col-md-12">
                                    <div class="center_heading left_heading">

                                        Master of Business Administration
                                        <div class="center_head_img left_head_img"></div>

                                    </div>


                                    <p>PCIMCA MBA programs are affiliated to Savitribai Phule Pune University, one of
                                        the most premier universities in India and the
                                        world. The revised MBA Curriculum 2019 is cut above the rest MBA programs
                                        available in the country. The 2 years, 4 Semester
                                        full-time program takes the post-graduation to the next level in terms of
                                        implementing outcome-based education (OBE)
                                        along with the Choice Based Credit System (CBCS) and the Grading System.</p>
                                    <p>
                                        <b>The outcome-based education or the OBE approach conveys that the Outcomes are
                                            only about performance, which
                                            further elaborates:</b>
                                    <ul>
                                        <li>
                                            <b>There must be a performer – the student (learner), not only the
                                                teacher</b>
                                        </li>
                                        <li>
                                            <b>There must be something performable (thus demonstrable or assessable) to
                                                perform.</b>
                                        </li>
                                        <li>
                                            <b>The focus is on the performance, not the activity or task to be
                                                performed</b>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

    </div>
    <!-- end main-content -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding-bottom: 20px;">
                    <div class="card__front "
                        style="background-color:#FFD511; padding: 10px; color: white; text-align: center; border-radius: 20px;">
                        <h3 style="color:black;">
                            <b>Specializations Offered:</b>
                        </h3>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card " style="border-radius: 10px;">
                        <div class="card__front " style="background-color: #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#">
                                                    <img src="assets/images/mba-1.png" width="150px" alt=""
                                                        class="center">
                                                    <!-- <i class="text-white pe-7s-users font-72"></i> -->
                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">Business Analytics
                                                </h3>
                                                <p style="color: aliceblue;">&nbsp;&nbsp;&nbsp;&nbsp;Business Analytics
                                                    is the latest
                                                    management specialisation that &nbsp;&nbsp;has
                                                    emerged with the new era of online
                                                    shopping, electronic &nbsp;&nbsp;payments and
                                                    delivery of goods and other services.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /flip-box -->
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card__front " style="background-color: #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#">
                                                    <!-- <i class="text-white pe-7s-users font-72"></i> -->
                                                    <img src="assets/images/mba-2.png" width="150px" alt=""
                                                        class="center">
                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">Finance Management
                                                </h3>
                                                <p style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;Any business can
                                                    operate
                                                    successfully only if it is financially
                                                    &nbsp;&nbsp;sound. The financial health of an
                                                    organization can only be better &nbsp;&nbsp;if
                                                    earnings are more than its spending. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /flip-box -->
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card__front " style="background-color: #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#">
                                                    <!-- <i class="text-white pe-7s-users font-72"></i> -->
                                                    <img src="assets/images/mba-3.png" width="150px" alt=""
                                                        class="center">
                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">HR Management</h3>
                                                <p style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;The human resource
                                                    department
                                                    manages the most important &nbsp;&nbsp;and
                                                    valuable resources of an organization
                                                    and is thus one of the &nbsp;&nbsp;core
                                                    management functions.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /flip-box -->
                </div>
            </div>
            <div class="row" style="padding-top: 50px;">
                <div class="col-md-12"></div>
                <div class="col-md-6">
                    <div class="card " style="border-radius: 10px;">
                        <div class="card__front " style="background-color: #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#">
                                                    <img src="assets/images/mba-4.png" width="150px" alt=""
                                                        class="center">
                                                    <!-- <i class="text-white pe-7s-users font-72"></i> -->
                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">Marketing
                                                    Management</h3>
                                                <p style="color: aliceblue;">&nbsp;&nbsp;&nbsp;&nbsp;Marketing
                                                    management refers to the
                                                    control and operations of various
                                                    marketing activities and &nbsp;&nbsp;the people
                                                    involved in those activities marketing
                                                    management ,contractors, & more.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /flip-box -->
                </div>
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card__front " style="background-color:  #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#">
                                                    <!-- <i class="text-white pe-7s-users font-72"></i> -->
                                                    <img src="assets/images/mba-5.png" width="150px" alt=""
                                                        class="center">
                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">Operation and
                                                    Supply Chain
                                                    Management</h3>
                                                <p style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;Operations and Supply
                                                    Chain
                                                    Management (OSCM) includes a
                                                    broad area that covers both
                                                    &nbsp;&nbsp;manufacturing and service
                                                    industries.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /flip-box -->
                </div>
            </div>
            <div class="row" style="padding-top: 50px;">
                <div class="col-md-12" style="padding-bottom: 20px;">
                    <div class="card__front "
                        style="background-color:#FFD511; padding: 10px; color: white; text-align: center; border-radius: 20px;">
                        <h3 style="color:black;">
                            <b>4 Minor Specializations:</b>
                        </h3>
                    </div>
                    <!-- <h3 class="icon-box-title text-black" style="text-align: center;">4 Minor Specializations:</h3> -->
                </div>
                <div class="col-md-6">
                    <div class="card " style="border-radius: 10px;">
                        <div class="card__front " style="background-color:  #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#">
                                                    <img src="assets/images/mba-6.png" width="150px" alt=""
                                                        class="center">
                                                    <!-- <i class="text-white pe-7s-users font-72"></i> -->
                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">Rural &
                                                    Agribusiness
                                                    Management</h3>
                                                <p style="color: aliceblue;">&nbsp;&nbsp;&nbsp;&nbsp;Rural Management
                                                    refers to the study
                                                    of rural economy, agribusiness,
                                                    planning, organising and &nbsp;&nbsp;maintaining
                                                    co-operatives and businesses in
                                                    rural areas and related fields.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /flip-box -->
                </div>
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card__front " style="background-color: #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#">
                                                    <!-- <i class="text-white pe-7s-users font-72"></i> -->
                                                    <img src="assets/images/mba-7.png" width="150px" alt=""
                                                        class="center">
                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">Pharma & Healthcare
                                                    Management</h3>
                                                <p style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;MBA in pharmaceutical
                                                    management
                                                    is a postgraduate course with a
                                                    central administration and &nbsp;&nbsp;strategic
                                                    policies in the pharmaceutical
                                                    business.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /flip-box -->
                </div>
            </div>
            <div class="row" style="padding-top: 50px;">
                <div class="col-md-12"></div>
                <div class="col-md-6">
                    <div class="card " style="border-radius: 10px;">
                        <div class="card__front " style="background-color: #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#">
                                                    <img src="assets/images/mba-8.png" width="150px" alt=""
                                                        class="center">
                                                    <!-- <i class="text-white pe-7s-users font-72"></i> -->
                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">Tourism &
                                                    Hospitality
                                                    Management</h3>
                                                <p style="color: aliceblue;">&nbsp;&nbsp;&nbsp;&nbsp;The hospitality and
                                                    tourism industry is
                                                    a vast sector that includes all the
                                                    economic activities that &nbsp;&nbsp;directly or
                                                    indirectly contribute to, or depend
                                                    upon, travel and tourism.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /flip-box -->
                </div>
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card__front " style="background-color: #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#">
                                                    <!-- <i class="text-white pe-7s-users font-72"></i> -->
                                                    <img src="assets/images/mba-9.png" width="150px" alt=""
                                                        class="center">

                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">International
                                                    Business
                                                    Management</h3>
                                                <p style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;International Business
                                                    Management is
                                                    a specialisation concerned with the
                                                    management of business &nbsp;&nbsp;operations
                                                    on a global level.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /flip-box -->
                </div>
            </div></div></section></div><
                <!-- end main-content -->
                @endsection
