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

                                    MCA ELIGIBILITY

                                    <div class="center_head_img left_head_img"></div>

                                </div>

                                <div class="width100">

                                    <div class="about_innerContent" style="padding: 0px 0 50px;">

                                        <div class="my-2">

                                            <div class="img_right">

                                                <img src="assets/images/architecture_icon.png" alt="">

                                            </div>
                                            <div style="font-size: 14px">
                                            <p>1. Marks Statement of final year of Graduation.</p>
                                            <p>2. HSC Mark list/Certificate.</p>
                                            <p> 3. SSC Mark list/Certificate.</p>
                                            <p>4. Leaving /Transfer Certificate</p>
                                            <p>5. Migration Certificate (for students from other than Savitribai Phule
                                                Pune University).</p>
                                            <p> 6. Nationality certificate</p>
                                            <p>7. Caste Certificate in case of reserved category students(Maharashtra
                                                State candidates only)</p>
                                            <p> 8. Non-Creamy Layer Certificate for OBC, NT-2, & NT-3, SBC candidates
                                                from Maharashtra State.</p>
                                            <p> 9. Caste Validity Certificate (For caste category students).</p>
                                            <p> 10. Income certificate (For caste category students/ EBC).</p>
                                            <p> 11. Nationality/ Domicile Certificate (wherever necessary).</p>
                                            <p> 12. Gap Certificate (In case of Gap in education).</p>
                                            <p> 13. Marriage Certificate (for change in name in case of married female
                                                candidates)</br> Passport size photograph – 05 nos. All original certificates & attested true copies </br>(2 sets) are to be
                                                submitted at the time of securing the admission Candidates will
                                                have to submit any other certificates as will be stipulated by the
                                                DTE/S.P. <br>Pune University from time to time. Students who are appearing
                                                for the qualifying exams in April / May 2013 should submit their
                                                qualifying degrees and marks- sheets to the office for verification
                                                as early as possible.


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
