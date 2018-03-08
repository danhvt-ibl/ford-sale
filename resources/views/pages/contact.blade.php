@extends('layouts.master')
@section('main')
<!--page title-->
<!--page title-->
<div class="page_title_area row">
    <div class="col-md-12">
        <div class="bredcrumb">
            <ul>
                <li><a href="/">Trang chủ</a>
                </li>
                <li class="active"><a href="/lien-he">Trang liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/.page title-->
<!--contact-page-->
<div class="content contact-page">
    <div class="row">
        <div class="col-md-12">
            <div class="g-map full">
                <div id='gmap_canvas'></div>
            </div>
        </div>
        <!--/.col-md-12-->
        <!--Groham-Supports-->
        <div class="groham-contact clearfix">
            <div class="col-md-4 col-sm-6">
                <div class="single-support">
                    <div class="support-img">
                        <img alt="icon" src="/images/contact-icon1.png">
                    </div>
                    <div class="hover-support-img">
                        <img alt="icon" src="/images/contact-icon-1.png">
                    </div>
                    <div class="support-text">
                        <h3>phone number</h3>
                        <p>+49 123 456 789 / +49 123 456 787</p>
                    </div>
                </div>
                <!--/.single-support-->
            </div>
            <!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="single-support">
                    <div class="support-img">
                        <img alt="icon" src="/images/contact-icon-211.png">
                    </div>
                    <div class="hover-support-img">
                        <img alt="icon" src="/images/contact-iconhover-2.png">
                    </div>
                    <div class="support-text">
                        <h3>e-mail address</h3>
                        <p>info@groham.template.com</p>
                    </div>
                </div>
                <!--/.single-support-->
            </div>
            <!--/.col-md-4-->
            <div class="col-md-4 col-sm-12">
                <div class="single-support">
                    <div class="support-img">
                        <img alt="icon" src="/images/contact-icon3.png">
                    </div>
                    <div class="hover-support-img">
                        <img alt="icon" src="/images/contact-icon-3.png">
                    </div>
                    <div class="support-text">
                        <h3>location address</h3>
                        <p>78 Fashion Street, Beverly Hill Abony NYC 12045</p>
                    </div>
                </div>
                <!--/.single-support-->
            </div>
            <!--/.col-md-4-->
        </div>
        <!--/.groham-supports-->
        <!--/.col-md-12-->
        <div class="col-md-12">
            <div class="contact login">
                <div class="heading-title">
                    <h3 class="reply-title">Để lại một trả lời</h3>
                </div>
                <!--/.heading-title-->
                <form class="contact-form clearfix" action="#">
                    <div class="col-md-3 col-sm-6">
                        <div class="your-name">
                            <label for="your-name">Tên <span class="required">*</span>
                            </label>
                            <br>
                            <input class="input-field" type="text" name="name" value="" id="your-name">
                        </div>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="email">
                            <label for="your-email">Email <span class="required">*</span>
                            </label>
                            <br>
                            <input class="input-field" type="email" name="email" value="" id="your-email">
                        </div>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="email">
                            <label for="your-subject">Chủ đề</label>
                            <br>
                            <input class="input-field" type="text" name="subject" value="" id="your-subject">
                        </div>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="your-website">
                            <label for="your-website">Website</label>
                            <input class="input-field" type="text" name="website" value="" id="your-website">
                        </div>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-12">
                        <div class="your-message">
                            <label for="your-message">Tin nhắn của bạn</label>
                            <br>
                            <textarea name="your-message" cols="10" rows="6" id="your-message"></textarea>
                        </div>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn-submit btn-hover">Gửi</button>
                    </div>
                </form>
                <!--/.contant-form-->
            </div>
            <!--/.contant-->
        </div>
        <!--/.col-md-12-->
    </div>
</div>
@endsection

@section('scripts') 
    <!-- google map -->
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
    <script src="/js/gmaps.js"></script>
    <script src="/js/contact.map.js"></script>
@endsection