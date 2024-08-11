@extends('layout.main')

@section('main-content')

<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">Objective of the Institude</div>

        <div class="breadcrumbs_mainbox width100">

            <a href="{{ url('/') }}">Home</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/aboutObjectiveInstitute') }}">About Us</a>
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
                    <li><a href="{{ url('/aboutCampusTour') }}">PCIMCA Campus Tour</a></li>
                    <li><a href="{{ url('/aboutPresidentsDesk') }}">FROM PRESESIDENT'S DESK</a></li>
                    <li><a href="{{ url('/aboutPTES') }}">ABOUT PTES</a></li>
                    <li><a href="{{ url('/aboutPCIMCA') }}">About PCIMCA</a></li>
                    <li><a href="{{ url('/aboutVision') }}">VISION</a></li>
                    <li><a href="{{ url('/aboutMission') }}">MISSION</a></li>
                    <li><a href="{{ url('/aboutObjectiveInstitute') }}">Objectives of the Institute</a></li>

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

                                    Objectives of the Institude
                                    <div class="center_head_img left_head_img"></div>

                                </div>

                                <div class="width100">

                                    <div class="about_innerContent" style="padding: 0px 0 50px;">

                                        <div class="my-2">

                                            <div class="img_left">

                                                <div class="paragraph-with-image">

                                                    <p>
                                                        The institute aims to achieve the following: Empowering Future
                                                        Leaders and Innovators: The college's primary focus is on
                                                        nurturing students to become competent and visionary leaders in
                                                        their chosen fields. It seeks to empower them with the
                                                        knowledge,skills, and values required to make a positive impact
                                                        on society.</br>Premier MBA and MCA College: The college aspires
                                                        to be a leading institution for MBA and MCA education, setting
                                                        new standards of excellence and serving as a role model for
                                                        other institutions in the domain.
                                                        Global Recognition: The college aims to gain international
                                                        acclaim for its acade
                                                        mic programs, research contributions, and innovative approaches
                                                        to education. </br>It strives to attract students and faculty
                                                        from all around the world, creating a diverse and enriching
                                                        learning environment. Excellence in Education: The college is
                                                        committed to providing the highest quality of education through
                                                        modern teaching methodologies, experienced faculty, and
                                                        state-of-the-art infrastructure. It seeks to create an
                                                        intellectually stimulating atmosphere that fosters curiosity,
                                                        critical thinking, and creativity. Research and Innovation: The
                                                        college emphasizes the importance of research and innovation,
                                                        encouraging students and faculty to explore new ideas,
                                                        technologies, and methodologies. It aims to be at the forefront
                                                        of knowledge creation and application in the fields of business
                                                        administration and computer applications. Entrepreneurship and
                                                        Industry Relevance: The college endeavors to instill an
                                                        entrepreneurial mindset in its students, equipping them with the
                                                        skills and knowledge to start their ventures or contribute
                                                        significantly to the growth of existing businesses.</br>It
                                                        maintains strong ties with industries to ensure that its
                                                        programs remain relevant and aligned with market needs. By
                                                        working towards this vision, the MBA and MCA college seeks to
                                                        create a positive and lasting impact on the lives of its
                                                        students, the industry, and society as a whole

                                                    </p>

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



</div>

</div>

</div>
@endsection
