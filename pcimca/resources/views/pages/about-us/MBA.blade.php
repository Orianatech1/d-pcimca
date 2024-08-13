
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
                        <li><a href="assets/pdf/MBA CAP Schedule 2024-25.pdf" target="_blank">MBA CAP Schedule</a></li>
                        <li><a href="assets/pdf/MBA CAP Schedule 2024-25.pdf" target="_blank">MBA Syllabus</a></li>
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



                                                    </div>
                                                    <style>
                                                    table {
                                                        width: 100%;
                                                        border-collapse: collapse;
                                                        margin-bottom: 20px;
                                                    }
                                                    th, td {
                                                        padding: 12px;
                                                        text-align: left;
                                                        border: 1px solid #ddd;
                                                    }
                                                    th {
                                                        background-color: #f3ff16;
                                                        color: rgb(144, 14, 77);
                                                    }
                                                    td a {
                                                        color: #840b6d;
                                                        text-decoration: none;
                                                    }
                                                    td a:hover {
                                                        text-decoration: underline;
                                                    }
                                                </style>

                                                <h2>MBA Program Eligibility Criteria</h2>
                                                <table>
                                                    <tr>
                                                        <th>Criteria</th>
                                                        <th>Details</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Degree Required</td>
                                                        <td>Bachelor's degree of a minimum 3 years duration in any discipline recognized by the Association of Indian Universities.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Minimum Marks</td>
                                                        <td>
                                                            General Candidates: 50% in aggregate.<br>
                                                            Backward Class Categories (Maharashtra State only): 45% in aggregate.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Entrance Exam Requirements</td>
                                                        <td>
                                                            MAH-MBA/MMS CET: Candidates must have appeared for the MAH-MBA/MMS CET for the academic year. More details can be found on the <a href="https://mba21.dtemaharashtra.gov.in/">DTE Maharashtra MAH-MBA/MMS CET website</a>.<br>
                                                            Other Accepted Exams: MH CET for MBA-MMS, CMAT, or CAT. Detailed information about these exams is available at:<br>
                                                            <a href="https://mba21.dtemaharashtra.gov.in/">DTE Maharashtra MBA</a><br>
                                                            <a href="https://mahaammi.org/">Maha AMMI</a><br>
                                                            <a href="https://cmat.nta.nic.in/">AICTE CMAT</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Additional Information</td>
                                                        <td>For more information regarding the MAH-MBA/MMS CET, visit the <a href="https://mba21.dtemaharashtra.gov.in/">DTE Maharashtra 2023-24 website</a>.</td>
                                                    </tr>
                                                </table>


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
