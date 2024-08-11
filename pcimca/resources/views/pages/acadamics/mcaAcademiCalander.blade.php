@extends('layout.main')

@section('main-content')

<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">Academics</div>

        <div class="breadcrumbs_mainbox width100">

            <a href="{{ url('/acedamic') }}">Academics</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/academicMca') }}">MCA</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ url('/mcaAcademiCalander') }}">Academic Calander</a>



        </div>
    </div>
</div>
<!-- Start main-content -->
<div class="middle_section_box width100 inner_middle_section_box">
  <div class="main-content">
    <!-- Section: inner-header -->
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
                <div class="container"></div>
                <div class="row pt-5">
                    <div class="center_heading left_heading">

                        A.Y. 2023-24
                        ACADEMIC CALENDAR
                        <div class="center_head_img left_head_img"></div>

                 </div>
              <table class="table table-bordered">

                <tr class="text-center font-16 font-weight-600 bg-theme-color-2 text-black"> <th class="">TERMS OF PROGRAMME</th> <th>COMMENCEMENT</th> <th>CONCLUSION</th>  </tr>
                <tbody>
                  <tr> <th scope="row">MCA 1st year SEM-1</th> <td>17/08/2023</td> <td>09/12/2023</td>  </tr>

                </tbody>
              </table>
              <div class="center_heading left_heading">

                ACTIVITY CALENDAR
                <div class="center_head_img left_head_img"></div>
                </div>
              <table class="table table-bordered">

                <tr class="text-center font-16 font-weight-600 bg-theme-color-2 text-black"> <th>SR.NO</th> <th>ACTIVITY</th> <th>DATE</th> <th>DAY</th> </tr>
                <tbody>
                  <tr> <th scope="row">1</th> <td>Teachers Day</td> <td>05/09/2023 </td> <td>Tuesday</td> </tr>
                  <tr> <th scope="row">2</th> <td>Induction Programme</td> <td>09/09/2023 </td> <td>Saturday</td> </tr>
                  <tr> <th scope="row">3</th> <td>Industrial Visit</td> <td>16/09/2023</td> <td>Saturday</td> </tr>
                  <tr> <th scope="row">4</th> <td>Expectations from Young Management <br>Graduates – Guest Lecture</td> <td>21/09/2023</td> <td>Thursday</td> </tr>
                  <tr> <th scope="row">5</th> <td>Corporate Interaction -Guest Lecture</td> <td>29/09/2023 </td> <td>Friday</td> </tr>
                  <tr> <th scope="row">6</th> <td>Gandhi Jayanti </td> <td>02/10/2023 </td> <td>Monday</td> </tr>
                  <tr> <th scope="row">7</th> <td>Session on Personality Development </td> <td>05/10/2023</td> <td>Thursday</td> </tr>
                  <tr> <th scope="row">8</th> <td>Sports Activity </td> <td>11/10/2023</td> <td>Wednesday</td> </tr>
                  <tr> <th scope="row">9</th> <td>Vachan Prerana Din - Library Activity -Reading in Digital Era </td> <td>14/10/2023</td> <td>Saturday</td> </tr>
                  <tr> <th scope="row">10</th> <td>Navratri Celebration </td> <td>16/10/2023 </td> <td>Monday</td> </tr>
                  <tr> <th scope="row">11</th> <td>Swatchh Bharat Abhiyan – Social Activity </td> <td>20/10/2023</td> <td>Friday</td> </tr>
                  <tr> <th scope="row">12</th> <td>Dasara Celebration </td> <td>23/10/2023 </td> <td>Monday</td> </tr>
                  <tr> <th scope="row">13</th> <td>Current Trends in Industry- Seminar</td> <td>26/10/2023</td> <td>Thursday</td> </tr>
                  <tr> <th scope="row">14</th> <td>Sports Activity </td> <td>01/11/2023 </td> <td>Wednesday</td> </tr>
                  <tr> <th scope="row">15</th> <td>Diwali Celebration </td> <td>08/11/2023 </td> <td>Wednesday</td> </tr>
                  <tr> <th scope="row">16</th> <td>Digital Marketing Seminar</td> <td>23/11/2023 </td> <td>Thursday</td> </tr>
                  <tr> <th scope="row">17</th> <td>Corporate Interaction - Webinar on Data Analytics </td> <td>29/11/2023 </td> <td>Saturday</td> </tr>
                  <tr> <th scope="row">18</th> <td>Social Activity</td> <td>30/11/2023</td> <td>Friday</td> </tr>
                  <tr> <th scope="row">19</th> <td>Faculty Development Programme </td> <td>02/12/2023</td> <td>Saturday</td> </tr>
                  <tr> <th scope="row">20</th> <td>Commencement MBA IInd Semester</td> <td>01/01/2024</td> <td>Monday</td> </tr>
                  <tr> <th scope="row">21</th> <td>Finance/ Marketing/ OSCM/ BA/ HR specialization Activity </td> <td>11/01/2024 </td> <td>Thursday</td> </tr>
                  <tr> <th scope="row">22</th> <td>National Youth Day- Birth Anniversary of Swami Vivekanand</td> <td>12/01/2024</td> <td>Friday</td> </tr>
                  <tr> <th scope="row">23</th> <td>Industrial Visit </td> <td>13/01/2024</td> <td>Saturday</td> </tr>
                  <tr> <th scope="row">24</th> <td>Republic Day of India </td> <td>26/01/2024</td> <td>Friday</td> </tr>
                  <tr> <th scope="row">25</th> <td>Social Day <span style="font-size: 10px;">(1. Blood Donation Activity,2. Cloth Donation,<br>3. Tree Plantation,  4. Grocery Donation,5. E-Waste Collection & Donation)</span></td> <td>On foundation <br> day of the college</td> <td>$600</td> </tr>
                  <tr> <th scope="row">26</th> <td>Annual Social Gathering- Cultural & Sports Events</td> <td>5/02/2024 To 10/02/2024</td> <td>Monday To Saturday</td> </tr>
                  <tr> <th scope="row">27</th> <td>Intercollegiate Activity / Fun Fair</td> <td>13 /02/2024 </td> <td>Tuesday</td> </tr>
                  <tr> <th scope="row">28</th> <td>Shiv Jayanti 2023 </td> <td>19/02/2024</td> <td>Monday</td> </tr>
                  <tr> <th scope="row">29</th> <td>Finance/ Marketing/ OSCM/ BA/ HR specialization Activity </td> <td>22/02/2024</td> <td>Thursday</td> </tr>
                  <tr> <th scope="row">30</th> <td>Industrial Visit </td> <td>24/02/2024</td> <td>Saturday</td> </tr>
                  <tr> <th scope="row">31</th> <td>Marathi Bhasha Divas</td> <td>27/02/2024</td> <td>Tuesday</td> </tr>
                  <tr> <th scope="row">32</th> <td>International Women’s Day </td> <td>08/03/2024 </td> <td>Tuesday</td> </tr>
                  <tr> <th scope="row">33</th> <td>Corporate Interaction- MBA </td> <td>22/02/2024 </td> <td>Thursday</td> </tr>
                  <tr> <th scope="row">34</th> <td>Guest Lecture </td> <td>28/03/2024 </td> <td>Thursday</td> </tr>
                  <tr> <th scope="row">35</th> <td>Dr. Babasaheb Ambedkar Jayanti</td> <td>13/04/2024 </td> <td>Saturday</td> </tr>
                  <tr> <th scope="row">36</th> <td> Plastic free Campaign</td> <td>25/5/2024 </td> <td>Saturday</td> </tr>
                  <tr> <th scope="row">37</th> <td>Picnic and Tree Plantation Drive </td> <td>20/6/2024 </td> <td>Thursday</td> </tr>
                  <tr> <th scope="row">38</th> <td>International Yoga Day </td> <td>21/6/2024</td> <td>Friday</td> </tr>
                </tbody>
              </table>
              <div class="center_heading left_heading">

                EXAMINATION CALENDAR
                <div class="center_head_img left_head_img"></div>
                </div>
               <table class="table table-bordered">

                <tr class="text-center font-16 font-weight-600 bg-theme-color-2 text-black"> <th class="">Sr.No.</th> <th>ACTIVITY</th> <th>DATE</th>  </tr>
                <tbody>
                  <tr> <th scope="row" colspan="3" style="text-align: center; color: black;">Semester - I</th>   </tr>
                  <tr> <th scope="row">1</th> <td>Assignment Submission</td> <td>October 2023</td>  </tr>
                  <tr> <th scope="row">2</th> <td>Internal Term End - I Exam</td> <td>November 2023</td> </tr>
                  <tr> <th scope="row">3</th> <td>SPPU Theory Exam </td> <td>11/12/2023 Onwards</td>  </tr>
                  <tr> <th scope="row" colspan="3" style="text-align: center; color: black;">Semester - II</th>   </tr>
                  <tr> <th scope="row">4</th> <td>Assignment Submission</td> <td>February 2024</td></tr>
                  <tr> <th scope="row">5</th> <td>Internal Term End - II Exam </td> <td>March 2024</td></tr>
                  <tr> <th scope="row">6</th> <td>SPPU Theory Exam </td> <td>02/05/2024 Onwards</td></tr>
                </tbody>
              </table>
              <div class="center_heading left_heading">

                HOLIDAY  CALENDAR
                <div class="center_head_img left_head_img"></div>
                </div>
               <table class="table table-bordered">

                <tr> <th>Sr.No.</th> <th>HOLIDAY</th> <th>DATE</th> <th>Day</th> </tr>
                <tbody>
                  <tr> <th scope="row">1</th> <td>Ganesh Chaturthi </td> <td>19/09/2023 </td> <td>Tuesday</td> </tr>
                  <tr> <th scope="row">2</th> <td>Anant Chaturdashi </td> <td>28/09/2023</td> <td>Thursday</td> </tr>
                  <tr> <th scope="row">3</th> <td>Mahatma Gandhi Jayanti </td> <td>02/10/2023 </td> <td>Saturday</td> </tr>
                  <tr> <th scope="row">4</th> <td>Dasara</td> <td>24/10/2023</td> <td>Tuesday</td> </tr>
                  <tr> <th scope="row">5</th> <td>Diwali </td> <td>09/11/2023 To 16/11/2023 </td> <td></td> </tr>
                  <tr> <th scope="row">6</th> <td>Guru Nanak Jayanti </td> <td>27/11/2023 </td> <td>Monday</td> </tr>
                  <tr> <th scope="row">7</th> <td>Vacation (MBA)</td> <td>11/12/2023 To 25/12/2023</td> <td></td> </tr>
                  <tr> <th scope="row">8</th> <td>Christmas </td> <td>25/12/2023 </td> <td>Monday</td> </tr>
                  <tr> <th scope="row">9</th> <td>Republic Day </td> <td>26/01/2024 </td> <td>Wednesday</td> </tr>
                  <tr> <th scope="row">10</th> <td>Chatrapati Shivaji Maharaj Jayanti </td> <td>19/02/2024  </td> <td>Monday</td> </tr>
                  <tr> <th scope="row">11</th> <td>Mahashivratri</td> <td>8/03/2024  </td> <td>Friday</td> </tr>
                  <tr> <th scope="row">12</th> <td>Holi (Second Day) </td> <td>25/03/2024 </td> <td>Monday</td> </tr>
                  <tr> <th scope="row">13</th> <td>Good Friday </td> <td>29/03/2024 </td> <td>Friday</td> </tr>
                  <tr> <th scope="row">14</th> <td>Dr. Babasaheb Ambedkar Jayanti </td> <td>14/04/2024 </td> <td>Sunday</td> </tr>
                  <tr> <th scope="row">15</th> <td>Gudhi Padwa </td> <td>09/04/2024 </td> <td>Tuesday</td> </tr>
                  <tr> <th scope="row">16</th> <td>Vacation (MBA) </td> <td>01/05/2024 To 14/06/2024</td> <td>Sunday</td> </tr>
                  <tr> <th scope="row">17</th> <td>Maharashtra Din   </td> <td>01/05/2024 </td> <td>Wednesday</td> </tr>
                  <tr> <th scope="row">18</th> <td>Bakri-Id </td> <td>17/06/2024</td> <td>Monday</td> </tr>

                </tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </div>
  </div>
  </div>
  </div>
  <!-- end main-content -->

  @endsection
