@extends('layout.main')

@section('main-content')



<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">FROM PRESESIDENT'S DESK</div>

        <div class="breadcrumbs_mainbox width100">

            <a href="{{ url('/') }}">Home</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/aboutPresidentsDesk') }}">About Us</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>
        </div>
    </div>
</div>


<!--PCIMCA-->

<div class="middle_section_box width100 inner_middle_section_box">
    <div class="width100">
        <div class="left_panel">
            <a href="javascript:void(0);" class="left_menu_toggle" onclick="myFunction_innerleftmenu()"><img
                    src="assets/images/menu_toggle.png"></a>
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

                <div class="inner_page_content_box pb-5">

                    <div class="container">

                        <div class="row pt-5">

                            <div class="col-lg-1"></div>

                            <div class="col-lg-11 pb-3 faculty_list">

                                <div class="faculty_heading">

                                    FROM PRESESIDENT'S DESK

                                </div>

                                <div class="width100">

                                    <div class="container">

                                        <div class="row">

                                            <div class="col-lg-5">

                                                <div class="width100 mb-3"><img class="img-fluid"
                                                        src="assets/images/a1-01.png"
                                                        style="border-radius: 10px; border: 13px solid #790149; border-radius: 4%; ">
                                                </div>

                                            </div>

                                            <div class="col-lg-7 text_14black">

                                                <div class="width100 pb-3">

                                                    <p>
                                                        As a visionary in nation building, & worked as Professor and HOD
                                                        of No.1 college in maharashtra for engineering education since
                                                        last 150 years est.In 1854, has foresight that…… school &
                                                        college education is the core foundation of personal and
                                                        national emancipation at large, that produces multifaceted and
                                                        responsible citizens for this progressive nation. Like many
                                                        social reformers and social revivers, Prof. Dr. Kunjir ventured
                                                        to open a school with very few students, which has now enlarged
                                                        into a vast-fruit of knowledge.</br>Students from
                                                        Nursery-(Pre-Primary), Primary and High school of English
                                                        medium, under the Maharashtra & CBSE board till Std X with
                                                        excellent SSC & CBSE have grown from KG to Std XII & B.A/ B.Com/
                                                        B.Sc. As he has a noble cause for education, he did not enter
                                                        into purely professional education as an initial step. His
                                                        thirst to make every student to reach out to the highest peak of
                                                        knowledge and status. He has launched the study centre for CAT,
                                                        IIT, medical, UPSC, MPSC,SAP CS and many more courses for
                                                        placements.</br>Out of in all 70,000 students which Dr. Kunjir
                                                        taught throughout his career of 40 yearsin technical and
                                                        professional education, 40,000 students are working abroad in
                                                        US, UK, Canada, Australia etc. remaining 30,.000 are working in
                                                        india on key posts like GM, Tata Motors, Sr. Manager Infosys,
                                                        India head of TCS & IAS / IPS officers.
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
</div>
</div>

@endsection
