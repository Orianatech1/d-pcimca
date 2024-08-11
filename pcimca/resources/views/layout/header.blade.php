<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>PCIMCA-HOME</title>


    <link href="assets/css/other.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <script src="assets/js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/6.1.0/css/all.min.css" />
    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script src="assets/js/countjquery.html"></script>
    <script src="assets/jquery/1.11.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="assets/images/fav.png">

    <style>
        body {
            margin: 0px;
            padding: 0px;
            font-size: 13px;
        }
    </style>

    <!-- RESPONSIVE-NAV-START -->
    <script>
        function myFunction_career() {
            var x = document.getElementById("career_topmenu");
            if (x.className === "career_topmenu") {
                x.className += " responsive_career";
            } else {
                x.className = "career_topmenu";
            }
        }

        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "navigation_box") {
                x.className += " responsive";
            } else {
                x.className = "navigation_box";
            }
        }

        function myFunction_innerleftmenu() {
            var x = document.getElementById("inner_leftmenu");
            if (x.className === "left_menu_box") {
                x.className += " open";
            } else {
                x.className = "left_menu_box";
            }
        }

        function myFunction_academics() {
            var x = document.getElementById("academics_dropdown");
            if (x.className === "navigation_dropdown_box") {
                x.className += " academics_open";
            } else {
                x.className = "navigation_dropdown_box";
            }
        }

        function myFunction_admissions() {
            var x = document.getElementById("admissions_dropdown");
            if (x.className === "navigation_dropdown_box admission_dropdown_box") {
                x.className += " academics_open";
            } else {
                x.className = "navigation_dropdown_box admission_dropdown_box";
            }
        }

        function myFunction_extracontent() {
            var x = document.getElementById("extra_content");
            if (x.className === "extra_content") {
                x.className += " add";
            } else {
                x.className = "extra_content";
            }
        }
    </script>
</head>

<body>

    <script type="text/javascript">
        var npf_d='';
    var npf_c='346';
    var npf_m='1';
    var s=document.createElement("script");
    s.type="text/javascript";
    s.async=true;
    s.src="assets/js/track.js";
    document.body.appendChild(s);
    </script>

    <!-- header section start -->
    <div class="header width100">
        <div class="width100 header_background">
            <div class="width1240">
                <div class="width100 top_box1">
                    <div class="width100">
                        <div class="Logo" data-aos="fade-down">
                            <a href="{{ ('/') }}"> <img src="/assets/images/LOGOFINAL.png" id="logoimg"></a>
                        </div>
                        <div class="logo_text" style="color:white; margin-left: 12px;">
                            <h6 align="left">Purandhar Technical Education Society’s.</h6>
                            <h5 align="left">PUNE CAMBRIDGE INSTITUTE OF MANAGEMENT AND COMPUTER APPLICATION</h5>
                            <h6 align="left">Approved by AICTE, Recognised by DTE & Affiliated to Savitribai Phule Pune
                                University</h6>
                        </div>
                        <div class="top_right">
                            <div class="width100 top_box2">
                                <div class="top_btn_box">

                                    <a href="https://staff.pcimca.in" target="_blank">Login</a>
                                    <div class="careers_dropdown_box">


                                    </div>

                                </div>
                                <div id="career_topmenu" class="career_topmenu">
                                    <a href="javascript:void(0);" class="carrer_menu_toggle menu_toggle"
                                        onclick="myFunction_career()"><img src="/assets/images/menu_toggle.png"></a>
                                    <ul class="top_menu_box">
                                        <a href="javascript:void(0);" class="carrer_menu_toggle_close menu_toggle"
                                            onclick="myFunction_career()">x</a>
                                        <li>
                                            <a href="{{ ('/career') }}">Careers</a>
                                            <div class="careers_dropdown_box">
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Feedback Form</a>
                                            <div class="careers_dropdown_box">
                                                <ul>
                                                    <li><a href="#" target="_blank"> <b> AICTE Feedback </b></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <b> Grievance Redressal </b></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <b> SC/ST Grievance Redressal </b></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <b> Anti Ragging Feedback Form </b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>


                                        </li>
                                        <li>
                                            <a href="#">Mandatory Disclosures</a>
                                            <div class="careers_dropdown_box">
                                                <ul>
                                                    <li><a target="_blank"
                                                            href="/assets/images/Mandatory Disclosure PCIMCA Final.pdf">Download
                                                            Mandatory Disclosure</a></li>
                                                    <li><a target="_blank"
                                                            href="/assets/images/22.LOA Report 2023-24.pdf">Download LOA
                                                            Report</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#"><span></span>Merit List</a>
                                            <div class="careers_dropdown_box">
                                                <ul>
                                                    <li></li>
                                                    <li><a href="/assets/images/MBA-1st man1.pdf">MBA</a></li>
                                                    <li><a href="/assets/images/MCA 1st year.pdf">MCA</a></li>
                                                </ul>
                                            </div>

                                        <li>
                                            <a href="#" style="border: 0px;">Quick Links</a>
                                            <div class="careers_dropdown_box">
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="https://aicte-india.org/sites/default/files/approval/APH%20Final.pdf">
                                                            <b> AICTE Approval </b></a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://www.education.gov.in/sites/upload_files/mhrd/files/NEP_Final_English_0.pdf">
                                                            <b> MHRD </b></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://swayam.gov.in/"> <b> SWAYAM </b></a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://aicte-india.org/sites/default/files/AICTE%20Internship%20Policy.pdf">
                                                            <b> AICTE Internship </b></a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://www.aicte-india.org/sites/default/files/TRAINING%20POLICY%20FOR%20TECHNICAL%20TEACHERS_BOOK%20%2812%29.pdf">
                                                            <b> AICTE Teacher Training </b></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.msde.gov.in/"> <b> Skill development and
                                                                Entrepreneurship </b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>

                                </div>


                            </div>



                            <div class="width100 top_box3" data-aos="fade-right">

                                <div class="top_search_box">
                                    <div class="top_social_icon">

                                        <a target="_blank" href="https://facebook.com"><span class="facebook_icon"></span></a>
                                        <a target="_blank" href="https://instagram.com"><span class="instagram_icon"></span></a>

                                        <a target="_blank" href="https://youtube.com"><span class="youtube_icon"></span></a>
                                    </div>
                                    <input type="input" placeholder="Search Here...">
                                    <input type="submit" class="submit">
                                </div>

                            </div>
                        </div>


                        <div class="width100">
                            <a href="javascript:void(0);" class="menu_toggle" onclick="myFunction()"><img
                                    src="assets/images/menu_toggle.png"></a>
                            <div id="myTopnav" class="navigation_box">
                                <a href="javascript:void(0);" class="nav_close_btn" onclick="myFunction()">x</a>
                                <ul>
                                    <li><a class="selected" href="{{ ('/') }}"
                                            style="border-left:0px;"><span></span>Home</a></li>
                                    <li><a href="{{ ('/aboutCampusTour') }}"><span></span>About Us</a></li>
                                    <li>
                                        <a href="{{ ('/acedamic') }}"><span></span>Academics</a>
                                    </li>
                                    <li><a href="#"><span></span>Admissions</a>
                                        <div class="menu_arrow2" onclick="myFunction_admissions()"><img
                                                src="/assets/images/menu_arrow2.png"></div>
                                        <div class="navigation_dropdown_box admission_dropdown_box"
                                            id="admissions_dropdown">
                                            <div class="width1240">
                                                <div class="width100">
                                                    <div class="dropdown_list">
                                                        <div class="width100">
                                                            <ul>
                                                                <li></li>
                                                                <li><a href="{{ ('/MBA') }}">MBA</a></li>
                                                                <li><a href="{{ ('/MCA') }}">MCA</a></li>
                                                                <li><a href="#">BBA</a></li>
                                                                <li><a href="#">BCA</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li><a href="#"><span></span>Committee</a>
                                        <div class="menu_arrow2" onclick="myFunction_admissions()"><img
                                                src="assets/images/menu_arrow2.png"></div>
                                        <div class="navigation_dropdown_box admission_dropdown_box"
                                            id="admissions_dropdown">
                                            <div class="width1240">
                                                <div class="width100">
                                                    <div class="dropdown_list">
                                                        <div class="width100">
                                                            <ul>
                                                                <li></li>
                                                                <li><a href="{{ ('/anti_raging') }}">Anti
                                                                        Ragging Committee</a></li>
                                                                <li><a href="{{ ('/grievance_redressal') }}">Grievance
                                                                        Redressal Committees</a></li>
                                                                <li><a href="{{ ('/sc_st') }}">SC/ST
                                                                        Committee</a></li>
                                                                <li><a
                                                                        href="{{ ('/internal_quality_assurance') }}">Internal
                                                                        Quality Assurance Committee</a></li>
                                                                <li><a href="{{ ('/equal_appourtunity') }}">Equal
                                                                        Opportunity Facility Cell</a></li>
                                                                <li><a href="{{ ('/establishment_og') }}">Establishment
                                                                        of Online Grievance Redressal Mechanism</a></li>

                                                                <li><a href="{{ ('/industry_institute') }}">Industry
                                                                        Institute Interaction Cell</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <li><a href="{{ ('/infrastructure') }}"><span></span>Infrastructure</a>
                                    </li>
                                    </li>
                                    <li><a href="{{ ('/contactus') }}"><span></span>Contact</a></li>
                                    <br><br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--header end-->


        <style>
             /* Responsive adjustments */
        @media (max-width: 768px) {
            .enquiry-form {
                width: 250px;

            }

            .form-header h2 {
                font-size: 1.3em;
            }

            form button {
                font-size: 14px;
            }

            .open-btn {
                padding: 12px 25px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .enquiry-form {
                width: 100%;

            }

            .open-btn {
                padding: 10px 20px;
                font-size: 12px;
                right: -50px;
            }
        }
            .enquiry-form {
                 position: fixed;
                 right: -300px;
                 top: 30%;
                 width: 300px;
                 min-height: 60%
                 background-color: #ffdd1f;
                 box-shadow: -2px 0 5px rgba(0, 0, 0, 0.3);
                 padding: 15px;
                 box-sizing: border-box;
                 transition: right 0.3s ease-in-out;
                 z-index: 1000;
             }

             .enquiry-form.active {
                 right: 0;
             }

             .form-header {
                 display: flex;
                 justify-content: space-between;
                 align-items: center;
                 margin-bottom: 20px;
             }

             .form-header h2 {
                 margin: 0;
             }

             .close-btn {
                 font-size: 24px;
                 cursor: pointer;
             }

             form {
                 display: flex;
                 flex-direction: column;
             }

             form label {
                 margin-bottom: 5px;
             }

             form input,
             form textarea {
                 margin-bottom: 15px;
                 padding: 10px;
                 border: 1px solid #ccc;
                 border-radius: 5px;
                 font-size: 16px;
             }

             form textarea {
                 resize: none;
                 height: 100px;
             }

             form button {
                 padding: 10px;
                 background-color: #82064a;
                 color: #fff;
                 border: none;
                 border-radius: 5px;
                 font-size: 16px;
                 cursor: pointer;
                 transition: background-color 0.3s;
             }

             form button:hover {
                 background-color: #85013f;
             }

             .open-btn {
                 position: fixed;
                 right: 0;
                 top: 60%;
                 transform: translateY(-50%);
                 padding: 15px 30px;
                 background-color: #920457;
                 color: #fff;
                 border: none;
                 border-radius: 5px 0 0 5px;
                 cursor: pointer;
                 z-index: 1001;
                 display: none; /* Hidden by default */
             }

             .open-btn.visible {
                 display: block; /* Make visible when needed */
             }


         </style>
          <script>
            document.addEventListener('DOMContentLoaded', function () {
                const enquiryForm = document.getElementById('enquiryForm');
                const closeBtn = document.getElementById('closeBtn');
                const openBtn = document.getElementById('openBtn');

                // Automatically open the form when the page loads
                setTimeout(function () {
                    enquiryForm.classList.add('active');
                }, 500); // Adjust delay as needed

                closeBtn.addEventListener('click', function () {
                    enquiryForm.classList.remove('active');
                    openBtn.classList.add('visible');
                });

                openBtn.addEventListener('click', function () {
                    enquiryForm.classList.add('active');
                    openBtn.classList.remove('visible');
                });

                // Close the form if the user clicks outside of it
                window.addEventListener('click', function (event) {
                    if (!enquiryForm.contains(event.target) && !event.target.closest('.open-btn')) {
                        enquiryForm.classList.remove('active');
                        openBtn.classList.add('visible');
                    }
                });
            });
        </script>

<div class="enquiry-form" id="enquiryForm" style="background-color:#ffcc01">
<div class="form-header">
<h2>Contact Us</h2>
<span class="close-btn" id="closeBtn">&times;</span>
</div>
<form method="post" action="senddata.php">

<input name="form_name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true">

<input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">

<input name="form_phone" class="form-control required" type="text" placeholder="Enter Phone" aria-required="true">
<select name="form_state" class="form-select form-control required" aria-label="Default select example">
<option selected>Select State</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Others">Others</option>
<!--<option value="3">Three</option>-->
</select>
<br>
<select name="city" class="form-select form-control required" aria-label="Default select example">
<option selected name="city" class="">Select City</option>
<option value="PUNE">PUNE</option>
<option value="MUMBAI">MUMBAI</option>
<option value="Others">Others</option>
</select>
<br>
<select name="course" class="form-select form-control required" aria-label="Default select example">
<option  selected class="">Select Course</option>
<option value="MBA">MBA</option>
<option value="MCA">MCA</option>
<!-- <option value="3">Three</option> -->
</select>
<br>
<button type="submit" data-loading-text="Please wait...">Submit</button>
</form>
</div>

<button class="open-btn" id="openBtn" style="font-size: 15px">Contact Form</button>
