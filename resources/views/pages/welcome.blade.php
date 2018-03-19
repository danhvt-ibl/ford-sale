@extends('layouts.master')
@section('css')
    <style>
        .desc {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            font-weight: normal;
            color: #666;
            line-height: 22px;
            text-align: justify;
        }
    </style>
@endsection
@section('main')
<!--page title-->
<div class="page_title_area row">
    <div class="col-md-12">
        <div class="bredcrumb">
            <ul>
                <li><a href="/">Trang chủ</a>
                </li>
                <li class="active"><a href="#">Giới thiệu</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/.page title-->
<div class="about01">
    <!-- about shop area -->
    <div class="about_our_shop_area">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="about_shop_img">
                    <img class="img-responsive" src="/images/binh-thuan-ford-agency.jpg" alt="about shop" />
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="about_shop_content">
                    <h3>Giới thiệu về Đại lý Bình Thuận Ford</h3>
                    <p>
                        <span style="font-size:16px;"><span style="font-family:tahoma,geneva,sans-serif;"><span style="color: rgb(0, 0, 0);">Được thành lập và chính thức đi vào hoạt động vào&nbsp;năm 2017, </span><span style="color: rgb(0, 51, 204);"><strong>BÌNH THUẬN</strong>&nbsp;<strong>FORD</strong></span><span style="color: rgb(0, 0, 0);"><strong> &nbsp;</strong>khẳng định một thương hiệu vững chắc luôn đi tiên phong về phong cách phục vụ bán hàng và tư vấn cho khách hàng đồng thời luôn khẳng định vị trí số 1 về các loại hình dịch vụ nhằm phục vụ khách hàng.</span><br  />
                        <br  />
                        Nằm ở vị trí đắc địa, ngã 4 quốc lộ 1A và quốc lộ 28&nbsp;(<em>mặt tiền khu công nghiệp Phan Thiết - địa phương gọi là Ford Phan Thiết hay Phan Thiết Ford</em>).&nbsp;Thuận tiện cho khách hàng tham quan, trãi nghiệm các sản phẩm của Ford cùng với các dịch vụ sau bán hàng&nbsp;<span style="color: rgb(0, 0, 0);">tại</span><span style="color: rgb(0, 0, 0);">&nbsp;Bình Thuận và các khu vực lân cận như Bà Rịa, Lâm Đồng, Ninh Thuận...</span></span></span><br  />
                        &nbsp;
                    </p>                    
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="about_shop_content">
                    <p>
                        <span style="font-size:16px;"><span style="font-family: tahoma,geneva,sans-serif;">Quy mô đầu tư&nbsp;<strong>đạt tiêu chuẩn&nbsp;3S&nbsp;của Ford</strong> Việt Nam tại tỉnh Bình Thuận - Phan Thiết, Showroom&nbsp;trưng đầy đủ các dòng xe Ford hiện có tại thị trường Việt Nam đáp ứng mọi nhu cầu mua xe ford tại bình thuận phan thiết, tư vấn bán hàng&nbsp; chuyên nghiệp, đội ngũ kỹ thuật có tay nghề cao,&nbsp;có kinh nghiệm lâu năm cũng như được đào tạo chính quy&nbsp;từ Ford Việt Nam, phụ tùng thay thế chính hãng.</span></span>
                        &nbsp;
                    </p>
                    <p><span style="font-size:16px;"><span style="font-family: tahoma,geneva,sans-serif;">
                        Với đội ngũ nhân viên bán hàng được đào tạo theo chương trình <strong>Ford Academic</strong> và đội ngũ kỹ thuật viên lành nghề được đào tạo và tu nghiệp trong và ngoài nước cùng với trang thiết bị hiện đại, phòng chờ, phòng trưng bày thoải mái thuận tiện cho việc mua sắm và sữa chữa – bảo dưỡng tại Bình Thuận Ford. Chúng tôi tin chắc rằng sẽ mang đến cho Quý khách hàng những trải nghiệm hoàn hảo tại nơi đây.
                        </span>
                        </span>
                    </p>
                        
                </div>
            </div>
        </div>
    </div>
    <!--/.about shop area-->
    <div class="groham-supports row">
        <div class="col-md-4 col-sm-6">
            <div class="single-support">
                <div class="support-img">
                    <img alt="icon" src="/images/support-icon1.png">
                </div>
                <div class="hover-support-img">
                    <img alt="icon" src="/images/support-icon-1.png">
                </div>
                <div class="support-text">
                    <h3>Giao xe nhanh</h3>
                    <p>Xe sẽ được giao nhanh trong vòng 24h</p>
                </div>
            </div>
            <!--/.single-support-->
        </div>
        <!--/.col-md-4-->
        <div class="col-md-4 col-sm-6">
            <div class="single-support">
                <div class="support-img">
                    <img alt="icon" src="/images/support-icon2.png">
                </div>
                <div class="hover-support-img">
                    <img alt="icon" src="/images/support-icon-2.png">
                </div>
                <div class="support-text">
                    <h3>Đảm bảo hoàn tiền</h3>
                    <p>Hoàn trả tiền cho khách nếu kém chất lượng</p>
                </div>
            </div>
            <!--/.single-support-->
        </div>
        <!--/.col-md-4-->
        <div class="col-md-4 col-sm-12">
            <div class="single-support">
                <div class="support-img">
                    <img alt="icon" src="/images/support-icon3.png">
                </div>
                <div class="hover-support-img">
                    <img alt="icon" src="/images/support-icon-3.png">
                </div>
                <div class="support-text">
                    <h3>Hỗ trợ khách hàng 24/7</h3>
                    <p>Hỗ trợ tận tâm, nhiệt tình và chuyên nghiệp</p>
                </div>
            </div>
            <!--/.single-support-->
        </div>
        <!--/.col-md-4-->
    </div>
    <!--/.groham-supports-->
</div>

@endsection