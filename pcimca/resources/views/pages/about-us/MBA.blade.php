
@extends('layout.main')

@section('main-content')

            <div class="width100 banner_section inner_banner_section">
                <div class="banner_leftbox" data-aos="fade-right">

                    <div class="banner_text1 text-left">MBA ELIGIBILITY</div>

                    <div class="breadcrumbs_mainbox width100">

                        <a href="{{ url('/') }}">Home</a>
                        <span><img src="assets/images/breadcrumbs_arrow.png"></span>

                        <a href="{{ url('/MBA') }}">MBA</a>
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
                        <li><a href="{{ url('/mbaDocumentRequired') }}">Document Required</a></li>
                        <li><a href="{{ url('/mbaIntake') }}">Intake </a></li>
                        <li><a href="{{ url('/MBA-feeStructure') }}">Fee Structure</a></li>
                        <li><a href="assets/images/MBA11.pdf" target="_blank">MBA IL & ACAP MeritList</a></li>
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

                                           MBA ELIGIBILITY

                                            <div class="center_head_img left_head_img"></div>

                                        </div>

                                        <div class="width100">

                                            <div class="about_innerContent" style="padding: 0px 0 50px;">

                                                <div class="my-2">

                                                    <div class="img_left">

                                                        <img src="assets/images/architecture_icon.png" alt="">

                                                    </div>
                                                    <p style="font-size: 14px; line-height: 1.5;" >
                                                    The candidate should fulfill the following eligibility criteria: Passed with of 50% marks in aggregate ( 45% in case of candidates of backward class categories belonging to  Maharashtra State only) in any Bachelor’s degree of minimum 3 years duration in any discipline recognized by the Association of Indian Universities.

                                                    MBA ELIGIBILITY TEST MAH-MBA/MMS CET of Academic Year (Website for MAH-MBA/MMS CET: <a href="http://www.dtemaharashtra.gov.in">http://www.dtemaharashtra.gov.in</a>

                                                    MH CET for MBA-MMS/CMAT/CAT. The detailed entrance test information is available at <a href="www.dte.org.in/mba"> www.dte.org.in/mba</a> <a href="www.mahaammi.com www.aicte-cmat.in
                                                    ">  www.mahaammi.com www.aicte-cmat.in</a>

                                                    CMAT (Common Management Admission Test) is conducted by All India Council of Technical Education for more information visit www.aictecmat.in

                                                    Click here for more details.

                                                    MAH-MBA/MMS CET Website for <a href ="MAH-MBA/MMS CET: DTE MAHARASHTRA 2023-24">MAH-MBA/MMS CET: DTE MAHARASHTRA 2023-24</a>

                                                </p></div>


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
