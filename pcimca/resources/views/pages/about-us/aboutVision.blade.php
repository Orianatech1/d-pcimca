@extends('layout.main')

@section('main-content')


             <div class="width100 banner_section inner_banner_section">
                <div class="banner_leftbox" data-aos="fade-right">

                    <div class="banner_text1 text-left">VISION</div>

                    <div class="breadcrumbs_mainbox width100">

                        <a href="{{ url('/') }}">Home</a>
                        <span><img src="assets/images/breadcrumbs_arrow.png"></span>

                        <a href="{{ url('/aboutVision') }}">About Us</a>
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

                                            VISION
                                            <div class="center_head_img left_head_img"></div>

                                        </div>

                                        <div class="width100">

                                            <div class="about_innerContent" style="padding: 0px 0 50px;">

                                                <div class="my-2">

                                                    <div class="img_left">

                                                        <div class="paragraph-with-image">
                                                            <img src="assets/images/a3-01.png" alt width=600px height=350px style="border-radius: 10px; border: 3px solid #790149; margin-left:11%;"></br></br></br>
                                                            <p>
                                                        </br>"Empowering Future Leaders and Innovators: Our Vision is to be a Premier MBA and MCA College, Globally Recognized for Excellence in Education,  Research, and Entrepreneurship. "</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="width100">


                                        <div class="width100">

                                            <div class="row">

                                                <div class="col-12">

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
