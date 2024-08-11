@extends('layout.main')

@section('main-content')



            <div class="width100 banner_section inner_banner_section">
                <div class="banner_leftbox" data-aos="fade-right">

                    <div class="banner_text1 text-left">ABOUT PTES</div>

                    <div class="breadcrumbs_mainbox width100">

                        <a href="{{ url('/') }}">Home</a>
                        <span><img src="assets/images/breadcrumbs_arrow.png"></span>

                        <a href="{{ url('/aboutPTES') }}">About Us</a>
                        <span><img src="assets/images/breadcrumbs_arrow.png"></span>
                    </div>
                </div>
            </div>


<!--PCIMCA-->

<div class="middle_section_box width100 inner_middle_section_box">
<div class="width100">
<div class="left_panel">
                <a href="javascript:void(0);" class="left_menu_toggle" onclick="myFunction_innerleftmenu()"><img src="assets/images/menu_toggle.png"></a>
                <div id="inner_leftmenu" class="left_menu_box">
                    <a href="javascript:void(0);" class="left_menu_toggle_close" onclick="myFunction_innerleftmenu()">X</a>
                    <ul>
                        <li><a href="{{ url('/aboutCampusTour') }}">PCIMCA Campus Tour</a></li>
                        <li><a href="{{ url('/aboutPresidentsDesk') }}">FROM PRESESIDENT'S DESK</a></li>
                        <li><a href="{{ url('/aboutPTES') }}">ABOUT PTES</a></li>
                        <li><a href="{{ url('/aboutPCIMCA') }}">About PCIMCA</a></li>
                        <li><a href="{{ url('/aboutVision') }}">VISION</a></li>
                        <li><a href="{{ url('/aboutMission') }}">MISSION</a></li>
                        <li><a href="{{ url('/aboutObjectiveInstitute') }}">Objectives of the Institute</a></li>

                    </ul>
                </div>
            </div>
            <div class="right_panel">

                    <div class="width100">

                        <div class="inner_page_content_box">

                            <div class="container">

                                <div class="row pt-5">

                                    <div class="col-lg-1"></div>

                                    <div class="col-lg-11">

                                        <div class="center_heading left_heading">

                                            ABOUT PTES
                                            <div class="center_head_img left_head_img"></div>

                                        </div>

                                        <div class="width100">

                                            <div class="about_innerContent" style="padding: 0px 0 50px;">

                                                <div class="my-2">

                                                    <div class="img_left">

                                                        <div class="paragraph-with-image">
                                                            <img src="assets/images/a2-01.png" alt width=600px height=350px style="border-radius: 10px; border: 3px solid #790149; margin-left: 0%;"></br></br></br>
                                                           <p>
                                                            Purandhar Technical Education Society, registered under Bombay Charitable Trust Act in 2007, by a group of Trustees to provide quality education imbibed with ethical values to the students. Trust has been running its schools, junior college and senior college since last 14 years. Now after successfully completing 14 years of non-technical education, the trust has entered into technical education in the name ‘Pune Cambridge Institute of Management & Computer Application’ (PCIMCA). Our honorable founder President of the Trust, Prof. Dr. Chandrakant T. Kunjir was a renowned professor, worked with the top most College for engineering in Maharashtra namely “Government College of Engineering Pune(COEP)” under SPPU Pune established in the year 1854. </br>In addition to the professional teaching experience of 37 years, Prof. Dr. Chandrakant T. Kunjir also worked as Deputy Director, Technical Education Pune Region, governing admission to Inspection, affiliation, academic monitoring and day to day administration of almost about 1200 Professional Colleges & streams like MBA, MCA, Engineering and Technology (Degree and Diploma), Hotel Management (Degree and Diploma) and Architecture (Degree). With rich experience of professional courses, presently the Purandhar Technical Education Society has three campuses catering education to almost 3000 students from KG to PG.

                                                            </p>
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

        </div>

    </div>

    @endsection
