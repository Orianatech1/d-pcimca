@extends('layout.main')

@section('main-content')


            <div class="width100 banner_section inner_banner_section">
                <div class="banner_leftbox" data-aos="fade-right">

                    <div class="banner_text1 text-left">ABOUT PCIMCA</div>

                    <div class="breadcrumbs_mainbox width100">

                        <a href="{{ url('/') }}">Home</a>
                        <span><img src="assets/images/breadcrumbs_arrow.png"></span>

                        <a href="{{ url('/aboutPCIMCA') }}">About Us</a>
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

                                        ABOUT PCIMCA
                                        <div class="center_head_img left_head_img"></div>

                                    </div>

                                    <div class="width100">

                                        <div class="about_innerContent" style="padding: 0px 0 50px;">

                                            <div class="my-2">

                                                <div class="img_left">

                                                    <div class="paragraph-with-image">
                                                        <img src="assets/images/5.jpg" alt width=600px height=350px style="border-radius: 10px; border: 3px solid #790149; margin-left: 0%; border-radius: 7%;"></br></br>
                                                    <p>
                                                        PCIMCA, Pune is Recognised by AICTE, Approved by DTE, Maharashtra & Affiliated to Savitribai Phule Pune University (SPPU) starting in 2023, Pune is one of the premier B-School hub in India. PCIMCA Pune is recognized for its excellence in academics and its valuable contributions to industry, society and students.</br>Our prestigious MBA & MCA college offers a transformative learning experience, equipping aspiring business leaders with cutting-edge skills in management, strategy, and innovation. Our faculty comprises industry experts who nurture students' entrepreneurial spirit, preparing them to excel in today's dynamic business landscape.</br>PCIMCA emphasize a holistic approach to education, encouraging students to hone their critical thinking, communication, and leadership skills. We believe in nurturing well-rounded individuals who can thrive not only in their careers but also as responsible global citizens. Our strong ties with industry leaders enable our MBA and MCA students to gain real-world insights and practical exposure through internships, projects, and workshops. Our graduates are highly sought-after, with many securing coveted positions in reputed companies worldwide. We provide a vibrant and inclusive campus environment where students can participate in various clubs, events, and extracurricular activities to enhance their overall learning experience.</br>Our faculty and staff are dedicated to supporting students in their academic and personal growth journey. PCIMCA will be the institute where talent and ambitions come together in a culture that nourishes thinking and encourages every student to reach his or her fullest potential. Life at PCIMCA will be much more than the regular academic activities. We wish that the student entering our institute will become holistic, responsible person contributing not only to the technocratic demands of the world but also for the betterment of the society.


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
