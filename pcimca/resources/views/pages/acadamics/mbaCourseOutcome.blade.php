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

            <a href="{{ url('/mbaCourseOutcome') }}">Course Outcome</a>



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

                <h3 style="color:#7c1f4e; font-size: 30px;"> <b> Programme Educational Objectives (PEOs)</b>
                  </h3>
               <p>

                 <h3 style="color: #7c1f4e;; font-size: 30px;"> <b> Programme Outcomes (POs)
                </b> </h3>
                 <table class="table table-bordered">


                  <tbody>
                    <tr> <th scope="row">P01</th> <td>Generic and Domain Knowledge</td> <td>Ability to articulate, illustrate, analyze, synthesize and apply the knowledge of principles and frameworks of management and allied domains to the solutions of real-world complex businessissues </td> </tr>
                    <tr> <th scope="row">P02</th> <td>Problem Solving & Innovation </td> <td>Ability to Identify, formulate and provide innovative solution frameworks to real world complex business and social problems by systematically applying modern quantitative and qualitative problem solving tools and techniques.</td>  </tr>
                    <tr> <th scope="row">P03</th> <td>Critical Thinking </td> <td>Ability to conduct investigation of multidimensional business problems using research based knowledge and research methods to arrive at data driven decisions </td> </tr>
                    <tr> <th scope="row">P04</th> <td>Effective Communication</td> <td>Ability to effectively communicate in cross-cultural settings, in technology mediated environments, especially in the business context and with society at large</td>  </tr>
                    <tr> <th scope="row">P05</th> <td>Leadership and Team Work</td> <td>Ability to collaborate in an organizational context and across organizational boundaries and lead themselves and others in the achievement of organizational goals and optimize outcomes for all stakeholders. </td>  </tr>
                    <tr> <th scope="row">P06</th> <td>Global Orientation and Cross-Cultural Appreciation </td> <td>Ability to approach any relevant business issues from a global perspective and exhibit an appreciation of Cross Cultural aspects of business and management. </td> </tr>
                    <tr> <th scope="row">P07</th> <td>Entrepreneurship</td> <td>Ability to identify entrepreneurial opportunities and leverage managerial & leadership skills for founding, leading & managing startups as well as professionalizing and growing family businesses.</td>  </tr>
                    <tr> <th scope="row">P08</th> <td>Environment and Sustainability </td> <td>Ability to demonstrate knowledge of and need for sustainable development and assess the impact of managerial decisions and business priorities on the societal, economic and environmental aspects. </td> </tr>
                    <tr> <th scope="row">P09</th> <td>Social Responsiveness and Ethics</td> <td>Ability to exhibit a broad appreciation of the ethical and value underpinnings of managerial choices in a political, cross-cultural, globalized, digitized, socio-economic environment and distinguish between ethical and unethical behaviors & act with integrity. </td>  </tr>
                    <tr> <th scope="row">P010</th> <td>LifeLong Learning </td> <td>Ability to operate independently in new environment, acquire new knowledge and skills and assimilate them into the internalized knowledge and skills.  </td>  </tr>


                  </tbody>
                  </tbody>
                </table>
                <h3 style="color:#7C1F4E; font-size: 30px;"> <b> Graduate Attributes (GAs)
                </b> </h3>
                <table class="table table-bordered">

                   <tbody>
                    <tr> <th scope="row">GA1</th> <td>Managerial competence</td>  </tr>
                    <tr> <th scope="row">GA2</th> <td>Proficiency in Communication, Collaboration, Teamwork and Leadership</td>  </tr>
                    <tr> <th scope="row">GA3</th> <td>Competence in Creativity & Innovation</td>  </tr>
                    <tr> <th scope="row">GA4</th> <td>Research Aptitude, Scholarship & Enquiry</td>  </tr>
                    <tr> <th scope="row">GA5</th> <td>Global Orientation</td>  </tr>
                    <tr> <th scope="row">GA6</th> <td>Proficiency in ICT & Digital Literacy</td>  </tr>
                    <tr> <th scope="row">GA7</th> <td>Entrepreneurship & Intrapreneurship Orientation</td>  </tr>
                    <tr> <th scope="row">GA8</th> <td>Cross-functional & Inter-disciplinary Orientation</td>  </tr>
                    <tr> <th scope="row">GA9</th> <td>Results Orientation</td>  </tr>
                    <tr> <th scope="row">GA10</th> <td>Professionalism, Ethical, Values Oriented & Socially Responsible behaviour</td>  </tr>
                    <tr> <th scope="row">GA11</th> <td>Life-Long Learning Orientation</td>  </tr>

                  </tbody>
                </table>
                {{-- <h3 style="color: #7c1f4e; font-size: 30px;"> <b> Course Outcomes(COs): Semester - I
                  </b></h3>
                  <div class="width100 mb-3"><img class="img-fluid"  src=""></div> --}}

               </p>

              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->

    @endsection
