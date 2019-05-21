<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta charset="utf-8">
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
<link href="font/font-awesome.min.css" type="text/css" rel="stylesheet"/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<script src="jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="bootstrap/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<style>       
    div.stars {
  width: 270px;
  display: inline-block;
}
 
input.star { display: none; }
label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
} 
input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}
input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
input.star-1:checked ~ label.star:before { color: #F62; }
label.star:hover { transform: rotate(-15deg) scale(1.3); }
label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
/*-----------------------------------------------------------*/
      .radio {
  margin: 16px 0;
  display: block;
  cursor: pointer;
}
.radio input {
  display: none;
}
.radio input + span {
  line-height: 22px;
  height: 22px;
  padding-left: 22px;
  display: block;
  position: relative;
}
.radio input + span:not(:empty) {
  padding-left: 30px;
}
.radio input + span:before, .radio input + span:after {
  content: '';
  width: 22px;
  height: 22px;
  display: block;
  border-radius: 50%;
  left: 0;
  top: 0;
  position: absolute;
}
.radio input + span:before {
  background: #d1d7e3;
  transition: background 0.2s ease, transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 2);
}
.radio input + span:after {
  background: #fff;
  transform: scale(0.78);
  transition: transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.4);
}
.radio input:checked + span:before {
  transform: scale(1.04);
  background: #5d9bfb;
}
.radio input:checked + span:after {
  transform: scale(0.4);
  transition: transform 0.3s ease;
}
.radio:hover input + span:before {
  transform: scale(0.92);
}
.radio:hover input + span:after {
  transform: scale(0.74);
}
.radio:hover input:checked + span:after {
  transform: scale(0.4);
}
body .twitter {
  position: fixed;
  display: block;
  right: 24px;
  bottom: 24px;
  opacity: 0.5;
  color: #212533;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.4s ease;
}
body .twitter:hover {
  opacity: 1;
}
body .twitter img {
  display: block;
  height: 36px;
}
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="jquery/jquery-1.11.1.min.js"></script> 
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div id="page">
<table width="1095" border="0" align="center">
  <tbody>
    <tr align="center">
      <td width="600" rowspan="8"><img src="images/01-ceylon-S-600x600.jpg" width="600" height="600"></td>
      <td colspan="2" align="left" ><font size="+3" color="#000000"><b>Trà Sữa Ceylon</b></font></td>
    </tr>
    <tr>
      <td><font size="+2"><b>Giá</b> </font></td>
      <td colspan="2"><font color="#EF0003" size="+2"><b>26000</b></font> <font size="+2">VND</font></td>
    </tr>
      <tr height="5px">
      <td align="left"> Giảm giá
        <hr/></td>
      <td colspan="2">+0 VND
        <hr/></td>
    </tr>
    <tr height="5px">
      <td align="left"> Phí vận chuyển
        <hr/></td>
      <td colspan="2">+0 VND
        <hr/></td>
    </tr>
    <tr height="5px">
      <td width="195">Size</td>
      <td width="276" align="left">
      
          <label class="radio">
        <input type="radio" name="size" value="1" checked>
        <span>M</span>
    </label>
    <label class="radio">
        <input type="radio" name="size" value="2">
        <span>L</span>
    </label>
          
      </td>
    </tr>
    <tr>
      <td>Số Lượng</td>
      <td align="right"><div class="input-group"> <span class="input-group-btn">
          <button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="tbxSl"> <span class="glyphicon glyphicon-minus"></span> </button>
          </span>
          <input name="tbxSl" class="form-control input-number" value="1" min="1" max="10" type="text" readonly >
          <span class="input-group-btn">
          <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="tbxSl"> <span class="glyphicon glyphicon-plus"></span> </button>
          </span> </div></td>
    </tr>
    <tr height="20px">
      <td>Đánh giá</td>
      <td align="center"><div class="stars">
          <form action="">
            <input class="star star-5" id="star-5" type="radio" name="star"/>
            <label class="star star-5" for="star-5"></label>
            <input class="star star-4" id="star-4" type="radio" name="star"/>
            <label class="star star-4" for="star-4"></label>
            <input class="star star-3" id="star-3" type="radio" name="star"/>
            <label class="star star-3" for="star-3"></label>
            <input class="star star-2" id="star-2" type="radio" name="star"/>
            <label class="star star-2" for="star-2"></label>
            <input class="star star-1" id="star-1" type="radio" name="star"/>
            <label class="star star-1" for="star-1"></label>
          </form>
        </div></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><button type="button" class="btn btn-primary">Đưa vào giỏ hàng :v</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-danger">Quay lại trang chủ</button></td>
    </tr>
  </tbody>
</table>
<script type="text/javascript">
$( document ).ready(function() {
    $('.btn-number').click(function(e){
        e.preventDefault();
        
        var fieldName = $(this).attr('data-field');
        var type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {
                var minValue = parseInt(input.attr('min')); 
                if(!minValue) minValue = 1;
                if(currentVal > minValue) {
                    input.val(currentVal - 1).change();
                } 
                if(parseInt(input.val()) == minValue) {
                    $(this).attr('disabled', true);
                }
    
            } else if(type == 'plus') {
                var maxValue = parseInt(input.attr('max'));
                if(!maxValue) maxValue = 9999999999999;
                if(currentVal < maxValue) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == maxValue) {
                    $(this).attr('disabled', true);
                }
    
            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {
        
        var minValue =  parseInt($(this).attr('min'));
        var maxValue =  parseInt($(this).attr('max'));
        if(!minValue) minValue = 1;
        if(!maxValue) maxValue = 9999999999999;
        var valueCurrent = parseInt($(this).val());
        
        var name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        
        
    });
    $(".input-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) || 
                 // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
    });
});
$('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
     
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
  
</script>
</body>
</html>
