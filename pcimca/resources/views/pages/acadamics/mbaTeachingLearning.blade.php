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

            <a href="{{ url('/mbaTeachingLearning') }}">Teaching Learning Process</a>



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
                <div class="row pt-5"></div>
                <div class="center_heading left_heading">
                    TEACHING LEARNING PROCESS
                    <div class="center_head_img left_head_img"></div>
                    </div>
                    <div class="row pt-3"></div>
              <p><b>Purandar Technical Education Society’s Pune Cambridge Institute of Management and
                Computer Application adopts various student centric teaching learning methods for enriching
                learning involvement. The student-centric process is always encouraged to ensure better
                outcomes and it includes experiential learning, participative learning, problem solving
                methodologies etc. all the essential facilities are provided to staff to enhance the development
                of students.
                The list of other contemporary methods includes online certifications, ICT enabled teaching,
                Case study etc. The institute’s continuous efforts related with experimental learning,
                participative learning and problem-solving methodologies are summarized below:
            </b></p>
                <div class="width100 mb-3"><img class="img-fluid"  src="assets/images/mba-page3.png"></div>

                <p><b> 1) Experiential Learning:</b> <br>

                     An industrial visit and field visits are organized every year to help students connect
                  theory with practical education. <br> <br>
                  Our students complete their internship training in a field where they can learn about
                  the actual concerns and problems specific to their area of expertise. Under the
                  direction of the faculty, the work is turned in as a project report, and students gain a
                  variety of abilities, including analytical, problem-solving, and technical ones. <br> <br>
                   For programming courses, practicals are held to get real-world knowledge. Students
                  pick up abilities like logical and critical thinking through practicals. <br><br>

                 <b> 2) Participative Learning:</b> Purandar Technical Education Society’s Pune Cambridge
                  Institute of Management and Computer Application uses Participative Learning to encourage
                  students to actively involve in learning process. The Institute uses many methods for
                  participative learning like a few given below: <br>
                  . Group Discussions <br>
                  . Role Plays <br>
                  . Class Room Presentations <br>
                  . Group Activity’s <br>
                  . Team Building Exercises <br>
                  . Management Games <br>
                   Participation in Inter-Institute Competitions <br>
                   Participation in various committees and cells for organizing various events like seminar conferences <br>
                   Planning, Participation, and execution of annual social gathering  <br>
                   Workshops are organized by the institution to exhibit technical skills of students. <br> <br>

                 <b> 3) Problem Solving Methodologies:</b> Numerous activities are conducted to expose the
                  students to the real issues that organizations encounter, fostering the critical thinking,
                  creativity, and problem-solving abilities required by the business world. Students should be
                  taught to identify problems and use original thought to solve problems given by commercial
                  enterprises. Research projects, case analysis and discussion meetings, and other similar
                  activities are examples. <br> <br>

                  <b> 4) ICT Enabled Teaching Learning:</b> Purandar Technical Education Society Pune
                  Cambridge Institute of Management and Computer Application of uses a wide range of ICT
                  tools to generate, communicate, disseminate, store, and manage information. <br> <br> Through
                  methods like switching from chalkboards to interactive digital whiteboards and utilizing
                  teachers' personal smartphones, laptops, or other devices for learning during class time, ICT
                  has in various circumstances also become essential to the teaching-learning interaction. <br> <br> These
                  methods can help students develop progressive thinking abilities, offer them unique and
                  innovative ways to communicate their understandings, and better prepare them to deal with
                  the constant technological change in both society and the industry. <br> <br> The participatory learning environment offered by PTES can also be used to describe types of
                  cutting-edge learning strategies that are based on the most recent technological
                  advancements. In the classroom, the professors at our institution alternate between using
                  chalkboards and smart boards as well as LCD projectors. <br> <br> Additionally, during the lecture
                  period, students are encouraged to engage by asking questions and receiving immediate
                  answers. The PTES PCIMCA offers a well-equipped computer lab with more than 50
                  desktops, 7 printers, 1 server, 20 application software, and modern equipment. The entire
                  PTES campus has Wi-Fi access. <br> <br>
                  Two Smart classrooms with audio and video capabilities are available at PCIMCA. This
                  space is used by the faculty for interactive seminars, classroom instruction, and student
                  project presentations. Online programs and courses like SWAYAM/NPTEL are also available
                  to teachers and students. </p>
                  <div class="width100 mb-3"><img class="img-fluid"  src="assets/images/mba2-page3.png"></div>


                </div>
             </div>
          </div>
        </div>
    </section>
  </div>
  </div>
  </div>
  <!-- end main-content -->

  @endsection
