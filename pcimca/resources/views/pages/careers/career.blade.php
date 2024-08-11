@extends('layout.main')

@section('main-content')




<div class="width100 banner_section inner_banner_section">
    <div class="banner_leftbox" data-aos="fade-right">

        <div class="banner_text1 text-left">CAREERS</div>
        <div class="breadcrumbs_mainbox width100">

            <a href="{{ ('/') }}">Home</a>
            <span><img src="assets/images/breadcrumbs_arrow.png"></span>

            <a href="{{ ('/careers') }}">Careers</a>




        </div>
    </div>
</div>


<style>


    .blog-posts {
        margin-top: 0px;
    }

    .blog-posts .blog-post {
        margin-bottom: 30px;
    }

    .blog-posts .blog-thumb img {
        width: 100%;
        overflow: hidden;
    }

    .blog-posts .down-content {
        padding: 40px;
        border-right: 1px solid #000;
        border-left: 1px solid #000;
        border-bottom: 1px solid #000;
        border-top: 1px solid #000;
    }

    .blog-posts .down-content-border {
        border-top: 1px solid #eee;
    }

    .blog-posts .down-content-border p {
        border-bottom: 0 !important;
        padding-bottom: 0 !important;
        margin-bottom: 0 !important;
    }

    .blog-posts .down-content span {
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 900;
        color: #f48840;
    }

    .blog-posts .down-content h4 {
        font-size: 24px;
        text-transform: capitalize;
        letter-spacing: 0.5px;
        font-weight: 900;
        color: #20232e;
        margin: 10px 0px 12px 0px;
    }

    .blog-posts .down-content ul.post-info li {
        display: inline-block;
        margin-right: 8px;
    }

    .blog-posts .down-content ul.post-info li:after {
        content: '|';
        color: #aaa;
        margin-left: 8px;
    }

    .blog-posts .down-content h4 {
        font-size: 20px;
        letter-spacing: 0.25px;
    }

    .grid-system .down-content ul.post-info li {
        margin-right: 3px;
    }

    .grid-system .down-content ul.post-info li:after {
        margin-left: 5px;
    }

    .blog-posts .down-content ul.post-info li:last-child::after {
        display: none;
    }

    .blog-posts .down-content ul.post-info li a {
        font-size: 14px;
        color: #aaa;
        font-weight: 400;
        transition: all .3s;
    }

    .blog-posts .down-content ul.post-info li a:hover {
        color: #f48840;
    }

    .blog-posts .down-content p {
        padding: 5px 0px;
        margin: 25px 0px;

        border-bottom: 1px solid #000;
    }

    .blog-posts .down-content ul.post-share {
        text-align: right;
    }

    .blog-posts .down-content ul.post-tags li,
    .blog-posts .down-content ul.post-share li {
        display: inline-block;
    }

    .blog-posts .down-content ul.post-tags li:first-child i,
    .blog-posts .down-content ul.post-share li:first-child i {
        color: #f48840;
        margin-right: 5px;
    }

    .blog-posts .down-content ul.post-tags li,
    .blog-posts .down-content ul.post-share li {
        color: #aaa;
    }

    .blog-posts .down-content ul.post-tags li a,
    .blog-posts .down-content ul.post-share li a {
        font-size: 14px;
        color: #aaa;
        font-weight: 400;
        transition: all .3s;
    }

    .blog-posts .down-content ul.post-tags li a:hover,
    .blog-posts .down-content ul.post-share li a:hover {
        color: #f48840;
    }

    .blog-posts .main-button a {
        height: 60px;
        line-height: 60px;
        padding: 0px;
        width: 100%;
        text-align: center;
    }

    ul.page-numbers {
        text-align: center;
    }

    ul.page-numbers li {
        display: inline-block;
        margin: 0px 5px;
    }

    ul.page-numbers li a {
        width: 50px;
        height: 50px;
        display: inline-block;
        text-align: center;
        line-height: 50px;
        font-size: 15px;
        color: #7a7a7a;
        border: 1px solid #eee;
        font-weight: 500;
        transition: all 0.3s;
    }

    ul.page-numbers li.active a {
        background-color: #f48840;
        border-color: #f48840;
        color: #fff;
    }

    ul.page-numbers li a:hover {
        color: #f48840;
    }

    .blog-posts .sidebar-heading h2 {
        font-size: 18px;
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: 0.5px;
        color: #20232e;
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
        margin-bottom: 25px;
    }

    .blog-posts .comments {
        margin-top: 30px;
    }

    .blog-posts .comments ul li {
        display: inline-block;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .blog-posts .comments ul li.replied {
        padding-left: 130px;
    }

    .blog-posts .comments ul li:last-child {
        margin-bottom: 0px;
        padding-bottom: 0px;
        border-bottom: none;
    }

    .blog-posts .comments ul li .author-thumb {
        display: inline;
        float: left;
    }

    .blog-posts .comments ul li .author-thumb img {
        max-width: 100px;
        display: inline;
    }

    .blog-posts .comments ul li .right-content {
        margin-left: 130px;
    }

    .blog-posts .comments ul li .right-content h4 {
        color: #20232e;
        font-size: 19px;
        font-weight: 900;
        letter-spacing: 0.5px;
    }

    .blog-posts .comments ul li .right-content h4 span {
        font-size: 14px;
        color: #aaa;
        font-weight: 400;
        letter-spacing: 0.25px;
        margin-left: 20px;
    }

    .blog-posts .submit-comment {
        margin-top: 60px;
    }

    .blog-posts .submit-comment input {
        width: 100%;
        height: 46px;
        border: 1px solid #eee;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 500;
        color: #7a7a7a;
        outline: none;
        padding: 0px 15px;
        margin-bottom: 30px;
    }

    .blog-posts .submit-comment textarea {
        width: 100%;
        height: 46px;
        border: 1px solid #eee;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 500;
        color: #7a7a7a;
        outline: none;
        padding: 10px 15px;
        margin-bottom: 30px;
        height: 180px;
        max-height: 220px;
        max-width: 100%;
        min-width: 160px;
    }

    .blog-posts .submit-comment input::placeholder,
    .blog-posts .submit-comment textarea::placeholder {
        color: #aaa;
    }

    .blog-posts .submit-comment button {
        display: inline-block;
        background-color: #f48840;
        color: #fff;
        font-size: 13px;
        font-weight: 500;
        padding: 12px 20px;
        text-transform: uppercase;
        transition: all .3s;
        border: none;
        outline: none;
    }

    .blog-posts .submit-comment button:hover {
        background-color: #fb9857;
    }
</style>


<div class="middle_section_box width100 inner_middle_section_box">


    <div class="width100">



        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-lg-1"></div>
                <div class="col-lg-11">
                    <div class="center_heading left_heading">
                        CURRENT OPENINGS <div class="center_head_img left_head_img"></div>
                    </div>



                    <div class="">
                        <div class="about_innerContent" style="padding: 0px 0 15px;">
                            <div class="pb-2">
                                <h4> Eligibility for teaching staff</h4><br>
                                <p><strong>Note: Candidate with relavant qualifications and experience as per
                                        UGC/NCTE/COA/AICTE/DG Shipping etc. norms may send their detailed resume with
                                        job Applications
                                        to </strong><a style="color: #9f2176;"
                                        href="mailto:hr@pcimca.in ">hr@pcimca.in
                                    </a></p>


                            </div>
                        </div>
                    </div>



                </div><br>
                <section class="blog-posts grid-system">
                    <div class="container">
                        <div class="all-blog-posts">



                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="assets/images/product-1-720x480.html" alt="">
                                        </div>
                                        <div class="down-content">
                                            <span> FACULTY OF MCA</span><br>
                                            <a href="" target="_blank" style=" background-color: #78015e;
                                                    color: white;
                                                    padding: 10px 30px;
                                                    text-align: center;
                                                    text-decoration: none;
                                                    display: inline-block;  margin-top: 2%;">Apply Now</a>

                                            <p>
                                            <h4>Specializations: </h4>
                                            <li>
                                                PhD In Computer Applications
                                            </li>



                                            <li>Computer Science & Engineering (CSE)</li>
                                            <li>Information Technology (IT)</li><br>

                                            </p>
                                            <div class="post-options">
                                                <h4>Open Positions: </h4>

                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <a target="_blank" style=" background-color: #92065c;
                                                        color: white;
                                                        padding: 10px 58px;
                                                        text-align: center;
                                                        text-decoration: none;
                                                        display: inline-block;  margin-top: 2%;">Professor</a>

                                                        <br>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="#" alt="">
                                        </div>
                                        <div class="down-content">
                                            <span> FACULTY OF MBA</span><br>
                                            <a href="#" target="_blank" style=" background-color: #78015e;
                                                    color: white;
                                                    padding: 10px 30px;
                                                    text-align: center;
                                                    text-decoration: none;
                                                    display: inline-block;  margin-top: 2%;">Apply Now</a>

                                            <p>
                                            <h4>Specializations: </h4>
                                            <li>
                                                PhD In Business Administration
                                            </li>




                                            </p>
                                            <div class="post-options">
                                                <h4>Open Positions: </h4>

                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <a target="_blank" style=" background-color: #92065c;
                                                        color: white;
                                                        padding: 10px 58px;
                                                        text-align: center;
                                                        text-decoration: none;
                                                        display: inline-block;  margin-top: 2%;">Professor</a>

                                                        <br>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div></div></div></div>

                                @endsection
