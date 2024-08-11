@extends('layout.main')

@section('main-content')

<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">Academics</div>

        <div class="breadcrumbs_mainbox width100">

            <a href="{{ url('/') }}">Home</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/acedamic') }}">Academics</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>



        </div>
    </div>
</div>


<!-- PCIMCA-->

<div class="middle_section_box width100 inner_middle_section_box">
    <div class="width100">
        <div class="left_panel">

            <a href="javascript:void(0);" class="left_menu_toggle" onclick="myFunction_innerleftmenu()"><img
                    src="assets/images/menu_toggle.png"></a>
        </div>

        <div class="right_panel">

            <div class="width100">

                <div class="inner_page_content_box pb-5">

                    <div class="container">

                        <div class="row pt-5">

                            <div class="col-lg-1"></div>

                            <div class="col-lg-11 pb-3 faculty_list">

                                <div class="faculty_heading">

                                    MBA

                                </div>

                                <div class="width100">

                                    <div class="container">

                                        <div class="row">

                                            <div class="col-lg-5">

                                                <div class="width100 mb-3"><img class="img-fluid"
                                                        src="assets/images/faculty-of-art.jpg"></div>

                                            </div>

                                            <div class="col-lg-7 text_14black">

                                                <div class="width100 pb-3">

                                                    <p>PCIMCA MBA programs are
                                                        affiliated to Savitribai Phule Pune University, one of the most
                                                        premier universities in India and the
                                                        world. The revised MBA Curriculum 2019 is cut above the rest MBA
                                                        programs available in the country. The 2 years, 4 Semester
                                                        full-time program takes the post-graduation to the next level in
                                                        terms of implementing outcome-based education (OBE)
                                                        along with the Choice Based Credit System (CBCS) and the Grading
                                                        System.</p>
                                                </div>

                                                <div class="width100 faculty_grey_box">

                                                    <div class="width100 faculty_grey_inner_box">

                                                        <div class="width100">

                                                            <ul>
                                                                <li><a href="{{ url('/acedamicMba') }}"> MBA</a></li>

                                                            </ul>

                                                        </div>

                                                        <div class="width100 my-3"><a href="{{ url('/acedamicMba') }}"
                                                                class="blue_enquire_btn">Explore Now</a></div>

                                                    </div>

                                                </div>

                                            </div>



                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row pt-5">

                            <div class="col-lg-1"></div>

                            <div class="col-lg-11 pb-3 faculty_list">

                                <div class="faculty_heading">

                                    MCA

                                </div>

                                <div class="width100">

                                    <div class="container">

                                        <div class="row">

                                            <div class="col-lg-5">

                                                <div class="width100 mb-3"><img class="img-fluid"
                                                        src="assets/images/I1.jpg"></div>

                                            </div>

                                            <div class="col-lg-7 text_14black">

                                                <div class="width100 pb-3">

                                                    <p>
                                                        The Department of Master of Computer Applications (MCA) is
                                                        affiliated to Savitribai Phule Pune University and Approved by
                                                        AICTE and recognized by DTE.
                                                        It helps in providing the I.T. and Computer Industry with
                                                        world-class talent and creating some of the finest software
                                                        professionals year after year.
                                                    </p>
                                                </div>

                                                <div class="width100 faculty_grey_box">

                                                    <div class="width100 faculty_grey_inner_box">

                                                        <div class="width100">

                                                            <ul>

                                                                <li><a href="{{ url('/academicMca') }}">MCA</a></li>

                                                            </ul>

                                                        </div>

                                                        <div class="width100 my-3"><a href="{{ url('/academicMca') }}"
                                                                class="blue_enquire_btn">Explore Now</a></div>

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
