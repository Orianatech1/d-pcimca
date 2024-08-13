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
                        <li><a href="assets/pdf/MCA CAP Schedule 2024-25.pdf" target="_blank">MCA CAP Schedule</a></li>
                        <li><a href="assets/pdf/MCA (Management) 2024 Revised Syllabus_30072024.pdf" target="_blank">MCA Syllabus</a></li>
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



                                                    </div>
                                                    <p style="font-size: 14px; line-height: 1.5;" >
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
            background-color: #ffe019;
            color: rgb(112, 8, 57);
        }
        td {
            background-color: #fff;
        }
    </style>

    <h2>MCA Program Eligibility Criteria</h2>
    <table>
        <tr>
            <th>Criteria</th>
            <th>Details</th>
        </tr>
        <tr>
            <td>Nationality</td>
            <td>Indian National</td>
        </tr>
        <tr>
            <td>Educational Qualifications</td>
            <td>
                Graduation degree in any field (e.g., B.E / B.Tech / B.Sc / B.Com / B.A. / B.Voc / BCA, etc.).<br>
                Preferably with Mathematics at 10+2 level or at the Graduation level.
            </td>
        </tr>
        <tr>
            <td>Minimum Marks</td>
            <td>
                At least 50% in aggregate in the qualifying examination.<br>
                For candidates from Reserved Categories, Economically Weaker Section (EWS), and Persons with Disability (PWD) category from Maharashtra State only, at least 45% in the qualifying examination.
            </td>
        </tr>
        <tr>
            <td>Entrance Exam</td>
            <td>Non-zero positive score in MAH-MCA-CET 2023.</td>
        </tr>
        <tr>
            <td>Additional Criteria</td>
            <td>Any other criteria specified by the appropriate authority as per the Act.</td>
        </tr>
    </table>

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
