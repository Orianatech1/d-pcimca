@extends('layout.main')

@section('main-content')


<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">Fee Structure</div>

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
            <a href="javascript:void(0);" class="left_menu_toggle" onclick="myFunction_innerleftmenu()"><img
                    src="assets/images/menu_toggle.png"></a>
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

                                    Fee Structure

                                    <div class="center_head_img left_head_img"></div>

                                </div>

                                <div class="width40">

                                    <div class="about_innerContent" style="padding: 0px 0 50px;">

                                        <div class="my-2">

                                            <div class="img_right">

                                                <img src="assets/images/mbafees.png" alt="##" width="75%"
                                                    height="50%">

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

<!-- PCIMCA -->
@endsection
