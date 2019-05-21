<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="font/font-awesome.min.css" type="text/css" rel="stylesheet"/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<script src="jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="bootstrap/bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<style>
        body
        {
            width:1150px;
            margin: auto;
            padding-top: 1px;
            background: #D3CCCC;
        }
        #formm
        {
            
            width: 750px;
            float: left;
            height: auto;
            background: #FFFFFF;
            border-top-left-radius: 4px;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 16px;
            border-bottom-left-radius: 32px;
        }
        #giohang
        {
            width: 395px;
            height: auto;
            float: right;
            background: #FFFFFF;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            font-family:"Times New Roman";
            font-size: 20px;
            
        }
        .form-detail {
  padding-top: 0px;
  display: flex;
  align-items: flex-end;
}

.form-detail .control-custom {
  font-size: 14px;
  color: #868686;
  width: 97%;
}

.form-detail .group { 
  position: relative;
}

.form-detail input {
  display: block;
  padding: 14px 0;
  border: none;
  border-bottom: 1px solid #d8d8d8;
  margin-top: 26px;
}

.form-detail textarea {
  display: block;
  border: none;
  border-bottom: 1px solid #d8d8d8;
}

.form-detail label {
  font-size: 14px;
  color: #868686;
  position: absolute;
  pointer-events: none;
  left: 0;
  top: 16px;
}

input:focus, 
textarea:focus {
  outline: none;
}

.form-detail .bar { 
  position: relative; 
  display: block; 
  width: 97%; 
}

.bar::before,
.bar::after {
  content:'';
  height: 2px; 
  width: 0;
  bottom: 1px; 
  position: absolute;
  background: #F30004; 
  transition: 0.2s ease all; 
  -moz-transition: 0.2s ease all; 
  -webkit-transition: 0.2s ease all;
}

.bar::before {
  left:50%;
}

.bar::after {
  right:50%; 
}

.form-detail input:focus ~ .bar::before,
.form-detail input:focus ~ .bar::after,
.form-detail textarea:focus ~ .bar::before,
.form-detail textarea:focus ~ .bar::after {
  width:50%;
}
        .form-detail label {
  font-size: 14px;
  color: #868686;
  position: absolute;
  pointer-events: none;
  left: 0;
  top: 16px;
  transition: 0.2s ease all; 
  -moz-transition: 0.2s ease all; 
  -webkit-transition: 0.2s ease all;
}
        .form-detail input:focus ~ label, 
.form-detail input:valid ~ label,
.form-detail textarea:focus ~ label,
.form-detail textarea:valid ~ label {
  top: -16px;
  color: #0010C3;
}
    hr {
  color: red;
  background: #002CFF;
  border: 0;
  height: 1px;
  margin: 10px 0 20px; }
    .form-button {
  margin-top: 20px; 
}
    input[type=checkbox] {
    display: none;
}
    .checkbox label:before {
    border-radius: 3px;
}
    input[type=checkbox]:checked + label:before {
    content: "\2713";
    text-shadow: 1px 1px 1px rgba(0, 0, 0, .2);
    font-size: 15px;
    color: #00F114;
    text-align: right;
    line-height: 15px;
}
    </style>
<div>
     <header class="header-container"> 
    <!-- Navbar -->
    <nav>
      <div class="header container">
        <div class="row">
          <div class="col-xs-12"> 
            <!-- Header Logo -->
            <div class="col-md-2 col-lg-2 col-sm-8 col-xs-7 logo-header"> <a class="logo" href="index.html"> <img alt="Coffee House" src="images/logo.png"/> </a> </div>
            <div class="nav-mobile hidden-lg hidden-md">
              <div class="top-cart-contain" id="open_shopping_cart">
                <div class="mini-cart">
                  <div class="basket dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"> <a href="p/gio-hang.html"><i class="fa fa-shopping-cart"></i><span class="item_count"><span class="simpleCart_quantity"></span></span></a> </div>
                  <ul class="mini-products-list" id="cart-sidebar">
                    <div class="top-cart-content open_button arrow_box shopping_cart dropdown find" data-amount="0" style="display: none;">
                      <ol class="cart-products-list" id="top-cart-sidebar">
                        <div class="simpleCart_items"></div>
                      </ol>
                      <strong>Tổng giá tiền:</strong> <span class="price" id="jshop_summ_product"> <span class="simpleCart_finalTotal"></span></span>
                      <div class="animated_item actions"><a class=" view-cart" href="p/gio-hang.html">Giỏ hàng</a><a class=" btn-checkout" href="p/thanh-toan.html">Thanh toán</a></div>
                    </div>
                  </ul>
                </div>
              </div>
              <!-- Header Top Links -->
              <div class="toplinks">
                <div class="links">
                  <div class="login"> <a href="login/login.html"></a> 
                    <!--                                            <a href="login/login.html" title="Đăng nhập"><i class="fa fa-user"></i></a>--> 
                  </div>
                </div>
              </div>
            </div>
            <!-- End Header Logo -->
            <div class="col-md-10 col-lg-10 col-sm-12">
              <div class="nav-inner">
                <ul class="" id="nav">
                  <li class="level0 parent drop-menu active"> <a href="index.html"><span>Trang chủ</span></a> </li>
                  <li class="level0 parent drop-menu "> <a href="gioi-thieu.html"><span>Giới thiệu</span></a> </li>
                  <li class="level0 parent drop-menu "> <a href="collections/all.html"><span>Sản phẩm</span></a>
                    <ul class="level1" style="display: none;">
                      <li class="level1 first "> <a href="san-pham-noi-bat.html"> <span>Sản phẩm nổi bật</span> </a> </li>
                      <li class="level1 first "> <a href="san-pham-khuyen-mai.html"> <span>Sản phẩm khuyến mại</span> </a> </li>
                      <li class="level1 first "> <a href="frontpage.html"> <span>Sản phẩm mới</span> </a> </li>
                    </ul>
                  </li>
                  <li class="level0 parent drop-menu"><a href="tin-tuc.html"><span>Tin tức</span> </a> </li>
                  <li class="level0 parent drop-menu"><a href="lien-he.html"><span>Liên hệ</span> </a> </li>
                </ul>
              </div>
              <div class="nav-inner hidden-sm hidden-xs" style="z-index:0">
                <div class="top-cart-contain" >
                  <div class="mini-cart">
                    <div class="basket dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"> <a href="p/gio-hang.html"> <i class="fa fa-shopping-cart"></i> Giỏ hàng <span class="cart-total">(<span class="simpleCart_quantity"></span>)</span> </a> </div>
                    <ul class="mini-products-list" id="cart-sidebar">
                      <div class="top-cart-content open_button arrow_box shopping_cart dropdown find" data-amount="0" style="display: none;">
                        <ol class="cart-products-list" id="top-cart-sidebar">
                          <div class="simpleCart_items"></div>
                        </ol>
                        <strong>Tổng giá tiền:</strong> <span class="price" id="jshop_summ_product"> <span class="simpleCart_finalTotal"></span></span>
                        <div class="animated_item actions"> <a class=" view-cart" href="p/gio-hang.html">Giỏ hàng</a> <a class=" btn-checkout" href="p/thanh-toan.html">Thanh toán</a> </div>
                      </div>
                    </ul>
                  </div>
                </div>
                <!-- Header Top Links -->
                <div class="toplinks">
                  <div class="links">
                    <div class="login"> <a href="login/login.html" title="Đăng nhập"><span class="hidden-xs">Đăng nhập</span></a> </div>
                  </div>
                </div>
                <div class="form_search">
                  <form action="https://coffee-housetemplate.blogspot.com/search" class="navbar-form form_search_index" method="get">
                    <div class="input-group">
                      <input class="form-control block_in" id="search" maxlength="70" name="q" placeholder="Tìm kiếm" type="text" value=""/>
                      <span class="input-group-btn">
                      <button class="btn btn-default" type="submit"> <i class="fa fa-search"></i> Tìm kiếm</button>
                      </span> </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
</div>  
<div id = "formm" align="center">
    <font size="+2"><b> Thông tin khách hàng</b> </font><hr/>
  <!-- Material input -->
    <form>
    <div class="form-detail">
      <div class="form-info col-md-6 col-xs-12">
        <div class="group">      
          <input class="control-custom" type="text" required="required"/>
          <span class="bar"></span>
          <label>Email</label>
        </div>
        <div class="group">      
          <input class="control-custom" type="text" required="required" />
          <span class="bar"></span>
          <label>Họ tên</label>
        </div>
        <div class="group">      
          <input class="control-custom" type="text" required="required" />
          <span class="bar"></span>
          <label>Điện thoại</label>
        </div>
          <div class="group">      
          <input class="control-custom" type="text" required="required" />
          <span class="bar"></span>
          <label>Địa chỉ</label>
        </div>
      </div>
      <div class="form-message col-md-6 col-xs-12">
        <!-- <input class="control-custom" type="text" value="china"/>-->
        <div class="group">  
          <textarea class="control-custom" rows="10"  required="required"></textarea>
          <span class="bar"></span>
          <label>&nbsp;&nbsp;&nbsp;Ghi chú</label>
        </div>
          
      </div>
    </div>
    
      <div class="checkbox">
    <input id="check1" type="checkbox" name="check" value="check1" checked>
    <label for="check1">Thanh toán khi giao hàng</label>
    <br>
    <input id="check2" type="checkbox" name="check" value="check2">
    <label for="check2">Đến cửa hàng lấy hàng</label>
</div>
    
</form>      
</div>
<div id ="giohang"> 
    <table class="table table-striped" width="321" border="0" align="center" >
    <tbody>
      <tr class="success">
        <td colspan="2" align="center"><font size="+2"><b>Hóa đơn cần thanh toán</b></font></td>
      </tr>
      <tr >
        <td colspan="2"></td>
      </tr>
      <tr>
        <td width="118">Tổng tiền sản phẩm</td>
        <td width="157" align="right">50000VNĐ</td>
      </tr>
      <tr>
        <td>Tiền vận chuyển</td>
        <td align="right">25000VNĐ</td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td align="right">0.00%</td>
      </tr>
      <tr class="danger">
        <td>Tổng cộng</td>
        <td align="right">75000VNĐ</td>
      </tr>
      <tr align="center">
        <td height="45" colspan="2">
            <button type="button" class="btn btn-primary"><font size="+1">Đặt hàng</font></button></td>
      </tr>
    </tbody>
  </table>
    </div>
</body>
</html>
