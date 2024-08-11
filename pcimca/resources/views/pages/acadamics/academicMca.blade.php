@extends('layout.main')

@section('main-content')


<!--PCIMCA -->
<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">Academics</div>

        <div class="breadcrumbs_mainbox width100">

            <a href="{{ url('/') }}">Home</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/acedamic') }}">Academics</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/academicMca') }}">MCA</a>



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
                    <li><a href="{{ url('/academicMca') }}">MCA Overview</a></li>
                    <li><a href="{{ url('/mcaAcademiCalander') }}">Academic Calander</a></li>
                    <li><a href="{{ url('/mcaTeachingLearning') }}">Teaching Learning Process</a></li>
                    <li><a href="{{ url('/mcaCourseOutcome') }}">Course Outcome</a></li>
                    <li><a href="{{ url('/mcaE-content') }}">E-content</a></li>
                </ul>
            </div>
        </div>
        <section>
            <div class="right_panel" style="padding-left: 5%">
                <div class="row">


                    <section>

                        <div class="row pt-5">
                            <div class="col-md-12">
                                <div class="center_heading left_heading">

                                    Master of Computer Applications
                                    <div class="center_head_img left_head_img"></div>

                                </div>


                                <p> The Department of Master of Computer Applications (MCA) is affiliated to Savitribai
                                    Phule Pune University and Approved by
                                    AICTE and recognized by DTE.
                                    <br><br>
                                    It helps in providing the I.T. and Computer Industry with world-class talent and
                                    creating some of the finest software
                                    professionals year after year. By providing concept-oriented subject knowledge
                                    through a high quality teaching that is
                                    supplemented with practical training and project development, the Department aims to
                                    bring out some of the brightest
                                    minds into the world of computers and technology.
                                    <br><br>
                                    Our aim is to prepare students to excel in the professional world and to be
                                    successful in all walks of life. To inculcate social
                                    awareness among the students department organizes various social activities. For
                                    extra-curricular development we
                                    encourage students to participate in Seminars, Project competitions, workshops,
                                    technical events conducted on or
                                    off the campus.
                                </p>

                                <div class="center_heading left_heading">
                                    Objectives
                                    <div class="center_head_img left_head_img"></div>
                                </div>
                                <p> The goals of the MCA department are to prepare students for Post Graduate training
                                    in some specialized area of computer
                                    science, to prepare students for jobs in industry, business or government, and to
                                    provide support courses for students in
                                    engineering, mathematics and other fields requiring computing skills. Upon
                                    successful completion of a major in computer ,
                                    students will be able to achieve :
                                <ul>
                                    <li> <b> The broad knowledge of computer applications for successful careers in
                                            industry.</b></li>
                                    <li> <b> The habit of lifelong learning for career development in this dynamic and
                                            rapidly changing field.</b></li>
                                    <li> <b> The ability to inculcate effective communication in the team through
                                            demonstration of good analytical, design,
                                            development and implementation skills.</b></li>
                                </ul>
                                </p>
                                </p>
                            </div>
                    </section>

                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
<br><br>
    <section>
        <div class="container">

            <div class="row">
                <div class="col-md-12" style="padding-bottom: 20px;">
                    <div class="card__front "
                        style="background-color:#FFD511; padding: 10px; color: white; text-align: center; border-radius: 20px;">
                        <h3 style="color:black;"> <b> Activities</b></h3>
                    </div>

                </div>
                <div class="col-md-12">
                </div>
                <div class="col-md-3">
                    <div class="card " style="border-radius: 10px;">
                        <div class="card__front " style="background-color: #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="MBA.html"><br>
                                                    <img src="assets/images/mca-1.png" width="200px" height="111px"
                                                        alt="" class="center">

                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">Project Exhibition
                                                </h3>

                                                <br>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /flip-box -->
                </div>
                <div class="col-md-3">
                    <div class="card ">
                        <div class="card__front " style="background-color: #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#"><br>

                                                    <img src="assets/images/mca-2.png" width="200px" height="130px"
                                                        alt="" class="center">
                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">Business Analytics
                                                </h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /flip-box -->
                </div>
                <div class="col-md-3">
                    <div class="card ">
                        <div class="card__front " style="background-color: #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#"><br>

                                                    <img src="assets/images/mca-3.png" width="200px" height="130px"
                                                        alt="" class="center">
                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">Leadership Quality
                                                </h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /flip-box -->
                </div>
                <div class="col-md-3">
                    <div class="card ">
                        <div class="card__front " style="background-color: #7C1F4E; border-radius: 20px;">
                            <div class="card__text">
                                <div class="display-table-parent">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="icon-box mb-0">
                                                <a href="#"><br>

                                                    <img src="assets/images/mca-4.png" width="200px" alt=""
                                                        class="center">
                                                </a>
                                                <h3 class="icon-box-title text-white" align="center">Soft Skill
                                                    Development </h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        @endsection
