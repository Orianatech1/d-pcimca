@extends('layout.main')

@section('main-content')



<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">FEE STURCTURE</div>

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
            <a href="javascript:void(0);" class="left_menu_toggle" onclick="myFunction_innerleftmenu()"><img
                    src="assets/images/menu_toggle.png"></a>
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

                                    FEE STRUCTURE

                                    <div class="center_head_img left_head_img"></div>

                                </div>
                                <style>
                                    /* CSS for the heading */
                                    #blinking-heading {
                                        font-size: 2em;
                                        text-align: center;
                                        /* margin-top: 20%; */
                                        animation: blinkColorChange 3s infinite;

                                    }
                                    #blinking-heading:hover {
                                        animation-play-state: paused;
                                    }

                                    /* Keyframes for blinking and color-changing effect */
                                    @keyframes blinkColorChange {
                                        0% {
                                            opacity: 1;
                                            color: rgb(111, 6, 45);
                                        }
                                        25% {
                                            opacity: 0;
                                            color: rgb(255, 255, 42);
                                        }
                                        50% {
                                            opacity: 1;
                                            color: rgb(28, 3, 73);
                                        }
                                        75% {
                                            opacity: 0;
                                            color: rgb(189, 132, 26);
                                        }
                                        100% {
                                            opacity: 1;
                                            color: rgb(91, 21, 21);
                                        }
                                    }
                                </style>
                               <h1 id="blinking-heading"><a target="_blank" style="color: inherit" href="assets/pdf/freeEduGR.pdf">As Per Govt. GR Free Education For Girls (Conditions Apply*)</a></h1>

                                <div class="width100">

                                    <div class="about_innerContent" style="padding: 0px 0 0px;">

                                        <div class="my-2">
                                            <style>
                                                /* Style for the entire table */
                                                table {
                                                    width: 100%;
                                                    border-collapse: collapse;
                                                    margin: 20px 0;
                                                    font-size: 18px;
                                                    text-align: left;
                                                    color: #4b173a;
                                                }

                                                /* Style for table headers */
                                                th {
                                                    background-color: #FFD900;
                                                    color: #4b0634;
                                                    padding: 12px 15px;
                                                    font-weight: bold;
                                                }

                                                /* Style for table data cells */
                                                td {
                                                    background-color: #F3F3F3;
                                                    padding: 12px 15px;
                                                }

                                                /* Add borders to table cells */
                                                th,
                                                td {
                                                    border: 1px solid #dddddd;
                                                }

                                                /* Style for the first column (Programme) */
                                                td[rowspan] {
                                                    font-weight: bold;
                                                    background-color: #E8E8E8;
                                                }

                                                /* Add hover effect for rows */
                                                tr:hover {
                                                    background-color: #f1f1f1;
                                                }

                                                /* Style for notes column */
                                                td:last-child {
                                                    color: #6c757d;
                                                    font-style: italic;
                                                }
                                            </style>

                                            <div class="img_right">
                                                <table border="5">
                                                    <tr>
                                                        <th>Programme</th>
                                                        <th>Category</th>
                                                        <th>Fees</th>
                                                        <th>Note</th>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="5">MCA</td>
                                                        <td>Open</td>
                                                        <td>Rs.90,000/-</td>
                                                        <td>Fees are subject to revision as per directives of Fees
                                                            Regulatory Authority</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Oen(EBC)</td>
                                                        <td>Rs.49,091/-</td>
                                                        <td>Fees are subject to revision as per directives of Fees
                                                            Regulatory Authority</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Open(EWS)</td>
                                                        <td>Rs.49,091/-</td>
                                                        <td>Fees are subject to revision as per directives of Fees
                                                            Regulatory Authority</td>
                                                    </tr>
                                                    <tr>
                                                        <td>OBC</td>
                                                        <td>Rs.49,091/-</td>
                                                        <td>Fees are subject to revision as per directives of Fees
                                                            Regulatory Authority</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SC/ST/NC VJNT/SBC</td>
                                                        <td>Nil</td>
                                                        <td>Fees are subject to revision as per directives of Fees
                                                            Regulatory Authority</td>
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

</div>

<!-- PCIMCA -->
@endsection
