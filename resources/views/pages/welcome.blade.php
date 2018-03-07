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
<div class="container">
    <ol class='breadcrumb'>
        <li><a href='/'>Trang chủ</a></li>
        <li class='active'>Giới thiệu</li>
    </ol>
    <div class="row">
        <div class="col-sm-3 col-md-3 sidebar">

        </div>
    </div>
    <div class="col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3 main">
        <div class="box_mid">
            <div class="mid-title">
                <div class="titleL"><h1>Giới thiệu</h1></div>
                <div class="clearfix"></div>
            </div>
            <div class="mid-content">
                <div class="desc">
                    <p style="text-align: center;">
                        <img alt="City Ford" src="/vnt_upload/about/Untitled-1-636307026227792777.png" style="width: 500px; height: 86px;"></p>
                    <p>&nbsp; &nbsp;<span style="color:#0066cc;"><strong>City Ford</strong></span> đại lý ủy quyền chính thức của Ford tại Việt Nam. Được thành lập vào năm 2000, với 15 năm phát triển, City Ford luôn là một thương hiệu đi đầu trong ngành về doanh số bán cùng dịch vụ đa dạng và chất lượng hoàn hảo.&nbsp;<br>
                    &nbsp; <span style="color:#0066cc;"><strong>&nbsp;City Ford</strong></span> chuyên kinh doanh mua bán <strong>xe Ford mới 100%, xe đã qua sử dụng, kinh doanh phụ tùng chính hãng, Dịch vụ sửa chữa – bảo dưỡng, cứu hộ 24/24 và tư vấn hỗ trợ tài chính khi khách hàng có nhu cầu.&nbsp;</strong></p>
                    
                    <p>&nbsp; &nbsp;Với đội ngũ nhân viên bán hàng được đào tạo theo chương trình <strong>Ford Academic</strong> và đội ngũ kỹ thuật viên lành nghề được đào tạo và tu nghiệp trong và ngoài nước cùng với trang thiết bị hiện đại, phòng chờ, phòng trưng bày thoải mái thuận tiện cho việc mua sắm và sữa chữa – bảo dưỡng tại City Ford. Chúng tôi tin chắc rằng sẽ mang đến cho Quý khách hàng những trải nghiệm hoàn hảo tại nơi đây.</p>
                    
                    <p style="text-align: center;"><span style="color:#006699;"><strong>TẤT CẢ VÌ SỰ HÀI LÒNG CỦA KHÁCH HÀNG</strong></span><br>
                    Hãy <a href="http://fordvietnam.com/gioi-thieu.html#driver">đăng ký lái thử hay đặt cuộc hẹn</a> với chúng tôí để được ưu đãi .</p>
                    
                    <p style="text-align: justify;">&nbsp;</p>
                    
                    <div class="popup-content">
                    <div class="form-wrap">
                    <div class="form-input fname"><input class="required" name="fname" placeholder="Họ tên" type="text" wtx-context="8A0FF20C-03E5-40F0-8DC3-F81399783E56"></div>
                    
                    <div class="form-input selPro">
                    <div><select class="required" id="fproduct" name="fproduct" wtx-context="A42637A9-3821-43DB-B90D-F1E197CF9E57"><option value="">Chọn dòng xe</option><option value="34">Ford Focus 1.5L Ecoboost Titanium</option><option value="36">Ford Fiesta 5 Cửa 1.5L Sport AT</option><option value="35">Ford Fiesta 4 Cửa 1.5L AT Titanium</option><option value="33">Ford Fiesta 5 Cửa 1.0L Sport</option></select></div>
                    
                    <div><label>Hình thức TT</label> <span class="checked">Trả góp</span> <span>Trả hết</span> <input name="loaitra" type="hidden" value="Trả góp" wtx-context="E87F12EB-59A8-4FA0-8B1C-300E26B49812"> <input name="table" type="hidden" value="product_price" wtx-context="DB94EC64-E64C-4284-89D6-D485F4D17BD8"></div>
                    </div>
                    
                    <div class="form-input khuvuc"><select class="required" id="khuvuc" name="khuvuc" size="1" wtx-context="DA79A367-6998-4716-9C4D-158D5F8B4753"><option value="">Chọn khu vực</option><option value="5">Cần Thơ</option><option value="68">Bạc Liêu</option><option value="63">Bến Tre</option><option value="60">Bà Rịa - Vũng Tàu</option><option value="59">An Giang</option><option value="55">Bình Thuận</option><option value="52">Bình Phước</option><option value="51">Bình Dương</option><option value="44">Bình Định</option><option value="26">Bắc Giang</option><option value="25">Bắc Ninh</option><option value="19">Bắc Cạn</option><option value="6">Cao Bằng</option><option value="69">Cà Mau</option></select></div>
                    
                    <div class="form-input phone"><input class="required" name="phone" placeholder="Điện thoại" type="text" wtx-context="44BD052F-8A21-4C37-B418-4D3674ED5C82"></div>
                    
                    <div class="form-input email"><input class="required" name="email" placeholder="Email" type="text" wtx-context="777296DF-E97E-464E-8B94-3F0EA6792C5D"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection