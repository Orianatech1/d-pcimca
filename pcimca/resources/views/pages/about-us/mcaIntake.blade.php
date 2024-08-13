@extends('layout.main')

@section('main-content')


            <div class="width100 banner_section inner_banner_section">
                <div class="banner_leftbox" data-aos="fade-right">

                    <div class="banner_text1 text-left">INTAKE</div>

                    <div class="breadcrumbs_mainbox width100">

                        <a href="{{ url('/') }}">Home</a>
                        <span><img src="assets/images/breadcrumbs_arrow.png"></span>

                        <a href="{{ url('/MCA') }}">MCA</a>
                        <span><img src="assets/images/breadcrumbs_arrow.png"></span>
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

                                           MCA iNTAKE

                                            <div class="center_head_img left_head_img"></div>

                                        </div>

                                        <div class="width100">

                                            <div class="about_innerContent">

                                                <div class="my-2">

                                                    <div class="img_right">

                                                        <style>

h3 {
    color: #7D3C98;
    font-weight: bold;
    margin-bottom: 10px;
}

.seat-matrix {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.seat-matrix th, .seat-matrix td {
    border: 1px solid #dddddd;
    padding: 8px 10px;
    text-align: center;
}

.seat-matrix th {
    background-color: #f8f8f8;
    font-weight: bold;
    color: #3F174B;
}

.yellow-bg {
    background-color: #FFD900;
}

.purple-text {
    color: #7D3C98;
    font-weight: bold;
}

.seat-matrix td {
    background-color: #ffffff;
}

.seat-matrix tr:nth-child(even) td {
    background-color: #f3f3f3;
}
                                                        </style>
                                                        <h3>6992 - Pune Cambridge Institute of Management and Computer Application, Ambegaon Pathar, Pune</h3>

    <table class="seat-matrix">
        <tr>
            <th colspan="2">Un-Aided</th>
            <th colspan="10" class="yellow-bg">CAP Seats: 96</th>
        </tr>
        <tr>
            <th>Choice Code</th>
            <th>Course Name</th>
            <th>SI</th>
            <th>MS Seats</th>
            <th>All India</th>
            <th>Minority Seats</th>
            <th>Institute Seats</th>
            <th>Orphan</th>
            <th>Category</th>
            <th>OPEN</th>
            <th>SC</th>
            <th>ST</th>
            <th>VJ/DT</th>
            <th>NTB</th>
            <th>NTC</th>
            <th>NTD</th>
            <th>OBC</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>699224110</td>
            <td>Master in Computer Application</td>
            <td>120</td>
            <td>78</td>
            <td>18</td>
            <td>0</td>
            <td>24</td>
            <td>1</td>
            <td>HU</td>
            <td>24</td>
            <td>7</td>
            <td>4</td>
            <td>1</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>10</td>
            <td>52</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>OHU</td>
            <td>12</td>
            <td>3</td>
            <td>2</td>
            <td>1</td>
            <td>0</td>
            <td>1</td>
            <td>0</td>
            <td>4</td>
            <td>23</td>
        </tr>
        <tr>
            <td colspan="9" class="purple-text">PWD</td>
            <td class="purple-text">2</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td class="purple-text">2</td>
        </tr>
    </table>

    <p>Economically Weaker Section (EWS) Seats: 12 &nbsp;&nbsp; TFWS Choice Code: 699224111T &nbsp;&nbsp; Seats: 6</p>



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
