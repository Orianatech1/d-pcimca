@extends('layout.main')

@section('main-content')

<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">Academics</div>
        <!-- <div class="banner_text2">HOLISTIC LEADERS <br> TOMORROW</div> -->
        <div class="breadcrumbs_mainbox width100">

            <a href="{{ url('/acedamic') }}">Academics</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/academicMca') }}">MCA</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/mcaCourseOutcome') }}">Course Outcome</a>



        </div>
    </div>
</div>
 <!-- Start main-content -->
 <div class="middle_section_box width100 inner_middle_section_box">
 <div class="main-content">
    <div class="width100">
            <div class="left_panel">
                    <a href="javascript:void(0);" class="left_menu_toggle" onclick="myFunction_innerleftmenu()"><img src="assets/images/menu_toggle.png"></a>
                    <div id="inner_leftmenu" class="left_menu_box">
                        <a href="javascript:void(0);" class="left_menu_toggle_close" onclick="myFunction_innerleftmenu()">X</a>
                        <ul>
                        <li><a href="{{ url('/academicMca') }}">MCA Overview</a></li>
                        <li><a href="{{ url('/mcaAcademiCalander') }}">Academic Calander</a></li>
                        <li><a href="{{ url('/mcaTeachingLearning') }}">Teaching Learning Process</a></li>
                        <li><a href="{{ url('/mcaCourseOutcome') }}">Course Outcome</a></li>
                        <li><a href="{{ url('/mcaE-content') }}">E-content</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Section: Blog -->
    <section>
        <div class="right_panel" style="padding-left: 5%">
          <div class="row">
            <div class="col-md-12 blog-pull-right">
              <div class="single-service">

                <div class="width100 mb-3"><img class="img-fluid"  src="assets/images/MCA-chart-3-04.png"></div>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
</div>
<!-- end main-content -->
@endsection
