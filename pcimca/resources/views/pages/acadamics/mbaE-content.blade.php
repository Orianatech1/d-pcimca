@extends('layout.main')

@section('main-content')

<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">Academics</div>
        <!-- <div class="banner_text2">HOLISTIC LEADERS <br> TOMORROW</div> -->
        <div class="breadcrumbs_mainbox width100">

            <a href="{{ url('/acedamic') }}">Academics</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/acedamicMba') }}">MBA</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/mbaE-content') }}">E-Content</a>



        </div>
    </div>
</div>
<!-- Start main-content -->
<div class="middle_section_box width100 inner_middle_section_box">
    <div class="main-content">
        <div class="width100">
            <div class="left_panel">
                <a href="javascript:void(0);" class="left_menu_toggle" onclick="myFunction_innerleftmenu()"><img
                        src="assets/images/menu_toggle.png"></a>
                <div id="inner_leftmenu" class="left_menu_box">
                    <a href="javascript:void(0);" class="left_menu_toggle_close"
                        onclick="myFunction_innerleftmenu()">X</a>
                    <ul>
                        <li><a href="{{ url('/acedamicMba') }}">MBA Overview</a></li>
                        <li><a href="{{ url('/mbaAcademicCalander') }}">Academic Calander</a></li>
                        <li><a href="{{ url('/mbaTeachingLearning') }}">Teaching Learning Process</a></li>
                        <li><a href="{{ url('/mbaCourseOutcome') }}">Course Outcome</a></li>
                        <li><a href="{{ url('/mbaE-content') }}">E-content</a></li>
                    </ul>
                </div>
            </div>
            <!-- Section: Blog -->
            <section>
                <div class="right_panel" style="padding-left: 5%">
                    <div class="row">
                        <div class="col-md-12 blog-pull-right">
                            <div class="single-service">
                                <div class="row pt-5"></div>
                                <div class="center_heading left_heading">
                                    EXAMINATION CALENDAR
                                    <div class="center_head_img left_head_img"></div>
                                </div>
                                <div class="row pt-3"></div>

                                <table class="table table-bordered">

                                    <tr class="text-left font-16 font-weight-600 bg-theme-color-2 text-black">
                                        <th class="">Course Number </th>
                                        <th>Course Title
                                        </th>
                                        <th>Download</th>
                                    </tr>
                                    <tbody>

                                        <tr>
                                            <th scope="row">101</th>
                                            <td>MA Managerial Accounting</td>
                                            <td><a href="#"><b>Download PDF</b></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">102</th>
                                            <td>OB Orgnizational Behaviour</td>
                                            <td><a href="#"><b>Download PDF</b></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">103</th>
                                            <td>EABD Economic Analysis Of Business Decision </td>
                                            <td><a href="#"><b>Download PDF</b></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">104</th>
                                            <td>BRM Business Research Methodology</td>
                                            <td><a href="#"><b>Download PDF</b></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">105</th>
                                            <td>BOM Basics Of Marketing </td>
                                            <td><a href="#"><b>Download PDF</b></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">106</th>
                                            <td> DB Digital Business </td>
                                            <td><a href="#"><b>Download PDF</b></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">107</th>
                                            <td>MF Management Fundamentals</td>
                                            <td><a href="#"><b>Download PDF</b></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">108</th>
                                            <td>ED Entrepreneurship Development </td>
                                            <td><a href="#"><b>Download PDF</b></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">109</th>
                                            <td>LAB Legal Aspects Of Business </td>
                                            <td><a href="#"><b>Download PDF</b></a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end main-content -->
        @endsection
