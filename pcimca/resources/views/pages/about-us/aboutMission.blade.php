@extends('layout.main')

@section('main-content')

<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">MISSION</div>

        <div class="breadcrumbs_mainbox width100">

            <a href="{{ url('/') }}">Home</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/aboutMission') }}">About Us</a>
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
                                    MISSION
                                    <div class="center_head_img left_head_img"></div>

                                </div>

                                <div class="width100">

                                    <div class="about_innerContent" style="padding: 0px 0 50px;">

                                        <div class="my-2">

                                            <div class="img_left">

                                                <div class="paragraph-with-image">
                                                    <img src="assets/images/a3-01.png" alt width=600px height=350px
                                                        style="border-radius: 10px; border: 3px solid #790149; margin-left: 11%;">

                                                    <p>
                                                        Our mission at the MBA and MCA College is to provide a
                                                        transformative and future-focused education that empowers
                                                        students to become accomplished leaders and technologists in
                                                        their respective fields. We are committed to fostering a dynamic
                                                        learning environment that nurtures creativity, critical
                                                        thinking, and entrepreneurial spirit.
                                                        Through rigorous academic programs and industry-aligned
                                                        curricula, we aim to equip our students with the knowledge,
                                                        skills, and adaptability necessary to excel in the ever-changing
                                                        global landscape of business and technology.
                                                        We strive to cultivate a culture of innovation, encouraging
                                                        research, and experiential learning opportunities that enable
                                                        students to apply theoretical concepts to real-world challenges.
                                                        Our faculty, comprised of accomplished academics and industry
                                                        practitioners, are dedicated to guiding and mentoring students
                                                        throughout their educational journey. Embracing diversity and
                                                        inclusivity, we are devoted to creating a collaborative
                                                        community that respects individuality and values varied
                                                        perspectives. We believe that this rich tapestry of experiences
                                                        and backgrounds enriches the learning process and prepares our
                                                        graduates to excel in multicultural and interdisciplinary
                                                        settings.
                                                        As a socially responsible institution, we are committed to
                                                        instilling ethical values, environmental consciousness, and a
                                                        sense of civic duty in our students. We aspire to produce
                                                        responsible leaders who lead with integrity, compassion, and a
                                                        commitment to making a positive impact on society.
                                                        At the core of our mission is the belief in continuous
                                                        improvement and excellence in all aspects of education and
                                                        administration. We envision ourselves as catalysts for personal
                                                        and professional growth, empowering our graduates to embrace
                                                        challenges, embrace lifelong learning, and become agents of
                                                        positive change in the global community.


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
