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

                                    Fee Structure

                                    <div class="center_head_img left_head_img"></div>

                                </div>

                                <div class="width40">

                                    <div class="about_innerContent">

                                        <div class="my-2">

                                            <div class="img_right">
                                                <style>

.fees-table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.fees-table th, .fees-table td {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

.fees-table th {
    background-color: #f2b01e;
    color: #900d45;
    font-size: 18px;
}

.fees-table td {
    font-size: 16px;
    color: #900d45;
}

.fees-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.fees-table td:first-child {
    font-weight: bold;
}
                                                </style>

                                                <table class="fees-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Programme</th>
                                                            <th>Category</th>
                                                            <th>Fees</th>
                                                            <th>Note</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="5">MBA</td>
                                                            <td>Open</td>
                                                            <td>Rs.90,000/-</td>
                                                            <td>Fees is subject to revision as per directives of Fees Regulatory Authority</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Open (EBC)</td>
                                                            <td>Rs.49,091/-</td>
                                                            <td>Fees is subject to revision as per directives of Fees Regulatory Authority</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Open (EWS)</td>
                                                            <td>Rs.49,091/-</td>
                                                            <td>Fees is subject to revision as per directives of Fees Regulatory Authority</td>
                                                        </tr>
                                                        <tr>
                                                            <td>OBC</td>
                                                            <td>Rs.49,091/-</td>
                                                            <td>Fees is subject to revision as per directives of Fees Regulatory Authority</td>
                                                        </tr>
                                                        <tr>
                                                            <td>SC/ST/NC/VJNT/SBC</td>
                                                            <td>Nil</td>
                                                            <td>Fees is subject to revision as per directives of Fees Regulatory Authority</td>
                                                        </tr>
                                                    </tbody>
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
