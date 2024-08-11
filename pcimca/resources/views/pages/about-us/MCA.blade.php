@extends('layout.main')

@section('main-content')


            <div class="width100 banner_section inner_banner_section">
                <div class="banner_leftbox" data-aos="fade-right">

                    <div class="banner_text1 text-left">MCA ELIGIBILITY</div>

                    <div class="breadcrumbs_mainbox width100">

                        <a href="{{ url('/') }}">Home</a>
                        <span><img src="assets/images/breadcrumbs_arrow.png"></span>

                        <a href="{{ url('/MCA') }}">MCA</a>
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
                        <li><a href="{{ url('/mcaDocumentRequired') }}">Document Required</a></li>
                        <li><a href="{{ url('/mcaIntake') }}">Intake </a></li>
                        <li><a href="{{ url('/MCA-FeeStructure') }}"> MCA Fee Structure</a></li>
                        <li><a href="assets/images/MCA22.pdf">MCA IL & ACAP MeritList</a></li>
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

                                           MCA ELIGIBILITY

                                            <div class="center_head_img left_head_img"></div>

                                        </div>

                                        <div class="width100">

                                            <div class="about_innerContent" style="padding: 0px 0 50px;">

                                                <div class="my-2">

                                                    <div class="img_left">

                                                        <img src="assets/images/architecture_icon.png" alt="">

                                                    </div>
                                                    <p style="font-size: 14px; line-height: 1.5;" >
                                                    The candidate should be an Indian National

                                                    Passed any graduation degree (e.g. B.E / B.Tech/ B.Sc / B.Com / B.A. /B.Voc / BCA etc) preferably with Mathematics at 10+2 level or at Graduation level and obtained (at least 50% Marks in aggregate (at least 45% in case of candidates of Reserved Categories, Economically Weaker Section (EWS) and Persons with Disability category belonging to Maharashtra State only) in the qualifying examination

                                                    The candidate should have obtained non zero positive score in MAH-MCA-CET 2023.

                                                    Passed any graduation degree (e.g. B.E / B.Tech/ B.Sc / B.Com / B.A. /B.Voc / BCA etc) preferably with Mathematics at 10+2 level or at Graduation level and obtained at least 50% marks in the qualifying examination;

                                                    Any other criterion declared from time to time by the appropriate authority as defined under the Act.

                                                    </p>

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
