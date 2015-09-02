var login_url = null; //初始化连接

/**
 * 弹出发送验证码框前检查手机号是否合法
 */
function hmstar_common_showMobileSend() {
  var mobile = $('#hmstar_header_box_register_form_mobile').val();
  if (!/^1\d{10}$/.test(mobile)) {
    popBox('请填写正确的手机号码', 'error')
    return false;
  }
  $('#hmstar_header_box_form_gettelcode').modal({
    backdrop: 'static'
  })
  $('#hmstar_header_box_form_gettelcode').modal('show');
  document.getElementById('mobile_fresh_valicode').src="/hmstar/user/mobilecode/?t="+ Math.random();
}
/**
 * 发送手机验证码
 */
function hmstar_common_sendMobileCode(obj, msg_type) {
	var mobile = $('#hmstar_header_box_register_form_mobile').val();
	var code  = $('#hmstar_header_box_gettelcode_form_code').val();
	msg_type = msg_type ? msg_type : 'txt';
	//var obj = $(obj);
	if(!/^1\d{10}$/.test(mobile)) {popBox('请填写正确的手机号码','info');return false;}
	if(!$.trim(code)){popBox('请填写验证码','info');return false;}
	$.ajax({
		url:"/hmstar/user/sendmobilecode/",
		data:{mobile:mobile,code:code,msg_type:msg_type},
		dataType:'json',
		success:function(data) {
			if(data.status==1) {
				$('#hmstar_header_box_form_gettelcode').modal('hide');
				popBox('验证码已发送到您填写的手机上','success',2);
				obj.attr('disabled', 'disabled');
				var time = 60;
				var settime = setInterval(function () {
					time--;obj.val(time + '后重新发送');
					if (time <= 0) {clearInterval(settime);obj.removeAttr('disabled');obj.val('重新发送'); }
				}, 1000);
			} else if(data.status!=-5) {
				$('#hmstar_header_box_form_gettelcode').modal('hide');
				popBox(data.msg,'error');
			} else {
				popBox(data.msg,'error');
			}
			hmstar_common_updateCode();
			return false;
		}
	})
}

/**
 * 刷新发送手机验证码
 */
function hmstar_common_updateCode() {
	document.getElementById('mobile_fresh_valicode').src="/hmstar/user/mobilecode/?t="+ Math.random();
}

$(document).ready(function() {
  /**
   * 注册
   */
  $.formValidator.initConfig({
    formid: "hmstar_header_box_register_form",
    validatorgroup: "99",
    onerror: function(msg) { /*popBox(msg,'error');*/
      return false;
    },
    onsuccess: function() {
      if (!$("input[type='checkbox'][id='hmstar_header_box_register_form_xieyi_input_value']").is(':checked')) {
        popBox('请选择注册协议后再提交', 'info');
        return false;
      }
      $('#register_button').attr('disabled', 'disabled');
      $.post("/hmstar/user/add/", {
        mobile: $('#hmstar_header_box_register_form_mobile').val(),
        mobilecode: $('#hmstar_header_box_register_form_telcode').val(),
        password: $('#hmstar_header_box_register_form_password').val(),
        xieyi: $('#hmstar_header_box_register_form_xieyi_input_value').val(),
        btn_submit: 'register'
      }, function(data) {
        if (data.status == 1) {
          //执行回调地址
          $("body").append(data.data);
          popBox(data.msg, 'success', 2);
          setTimeout(function() {
            window.location.reload();
          }, 2000)
        } else {
          $('#register_button').removeAttr('disabled');
          popBox(data.msg, 'error');
        }
      })
      return false;
    }
  });
  $("#hmstar_header_box_register_form_mobile").formValidator({
      validatorgroup: "99",
      onshow: "请输正确的11位手机号码",
      onfocus: "请输入正确的手机号码",
      oncorrect: "该手机号可以注册"
    })
    .inputValidator({
      min: 11,
      max: 11,
      onerror: "你输入的手机号非法,请确认"
    })
    .functionValidator({
      fun: function(val, obj) {
        var res = /^1\d{10}$/.test(val);
        if (res == false) {
          return false;
        }
        return true;
      },
      onerror: "手机号码格式不正确"
    })
    .ajaxValidator({
      type: "get",
      url: "/hmstar/user/checkmobile/",
      datatype: "json",
      success: function(data) {
        if (data.status == "1") {
          return true;
        } else {
          return false;
        }
      },
      buttons: $("#button"),
      error: function() {
        popBox('服务器没有返回数据，可能服务器忙，请重试', 'error');
      },
      onerror: "手机号码格式不正确或手机号已存在",
      onwait: "正在对手机号进行合法性校验，请稍候..."
    });
  $("#hmstar_header_box_register_form_telcode").formValidator({
    validatorgroup: "99",
    onshow: "请输入手机验证码",
    onfocus: "手机验证码不能为空",
    oncorrect: " "
  }).inputValidator({
    min: 1,
    empty: {
      leftempty: false,
      rightempty: false,
      emptyerror: "手机验证码不能有空符号"
    },
    onerror: "手机验证码不能为空,请确认"
  });
  $("#hmstar_header_box_register_form_password").formValidator({
    validatorgroup: "99",
    onshow: "请输入密码",
    onfocus: "密码不能为空",
    oncorrect: " "
  }).inputValidator({
    min: 4,
    empty: {
      leftempty: false,
      rightempty: false,
      emptyerror: "密码两边不能有空符号"
    },
    onerror: "密码不能为空,请确认"
  });
  /**
   * 登陆
   */
  $.formValidator.initConfig({
    formid: "hmstar_header_box_login_form",
    validatorgroup: "98",
    onerror: function(msg) {},
    onsuccess: function() {
      var remembername = 0;
      if ($("input[type='checkbox'][name='remembername']").is(':checked')) {
        remembername = 1;
      }
      $('#login_button').attr('disabled', 'disabled');
      $.post('/hmstar/user/signin/', {
        username: $('#hmstar_header_box_login_form_usename').val(),
        password: $('#hmstar_header_box_login_form_password').val(),
        btn_submit: 'login',
        remembername: remembername
      }, function(data) {
        //alert(data.status)
        if (data.status == 1) {
          function successJump() {
            //alert(data.message);
            if (login_url) {
              setTimeout(function() {
                window.location.href = login_url;
              }, 2000)
            } else {
              setTimeout(function() {
                window.location.reload();
              }, 2000)
            }
          }
          popBox(data.msg, 'success', 2);
          successJump();
        } else if (data.status == '-5') {
          $('#login_button').removeAttr('disabled', 'disabled');
          popBox(data.msg, 'info');
        } else {
          $('#login_button').removeAttr('disabled', 'disabled');
          popBox(data.msg, 'error');
        }
      })
      return false;
    }
  });
  $("#hmstar_header_box_login_form_usename").formValidator({
      validatorgroup: "98",
      onshow: "请输入用户名或者手机号码",
      onfocus: "请输入正确的用户名或手机号码",
      oncorrect: " "
    })
    .inputValidator({
      min: 4,
      empty: {
        leftempty: false,
        rightempty: false,
        emptyerror: "用户名两边不能有空符号"
      },
      onerrormin: '用户名长度最少6位',
      onerror: "用户名不能为空,请确认"
    })
    .functionValidator({
      fun: function(val, obj) {
        var reg = /^1[0-9]d{9}$/; //手机
        var reg2 = /^[a-zA-Z0-9]{4,30}$/; //用户名
        var reg3 = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/; //邮箱
        if (val[0] == 0 || (!reg.test($.trim(val)) && !reg2.test($.trim(val)) && !reg3.test($.trim(val)))) {
          return false;
        }
        return true;
      },
      onerror: "请输入正确的用户名或手机号码"
    });
  $("#hmstar_header_box_login_form_password").formValidator({
    validatorgroup: "98",
    onshow: "请输入密码",
    onfocus: "密码不能为空",
    oncorrect: " "
  }).inputValidator({
    min: 4,
    empty: {
      leftempty: false,
      rightempty: false,
      emptyerror: "密码两边不能有空符号"
    },
    onerrormin: '密码最少6位',
    onerror: "密码不能为空,请确认"
  });

  /**
   * 显示登录
   */
  $('.ajax_login').unbind("click");
  $('.ajax_login').on("click", function() {
    var url = $(this).attr('href'); //获取点击的链接
    if (url) {
      login_url = url;
    }
    hmstar_common_show_user();
    return false;
  });
  /**
   * 登录事件
   */
  $('#login_button').click(function() {
      return jQuery.formValidator.pageIsValid(98);
    })
    /**
     * 注册事件
     */
  $('#register_button').click(function() {
    return jQuery.formValidator.pageIsValid(99);
  })
});

/**
 * 显示登隐藏注册
 */
function showLogin() {
  $('#hmstar_header_box_register_li').removeClass('hmstar_header_box_login_li_now');
  $('#hmstar_header_box_login_li').addClass('hmstar_header_box_login_li_now');
  $('#hmstar_header_box_register_form').hide();
  $('#hmstar_header_box_login_form').show();
}
/**
 * 显示注册隐藏登陆
 */
function showRegister() {
  $('#hmstar_header_box_login_li').removeClass('hmstar_header_box_login_li_now');
  $('#hmstar_header_box_register_li').addClass('hmstar_header_box_login_li_now');
  $('#hmstar_header_box_login_form').hide();
  $('#hmstar_header_box_register_form').show();
}

/**
 * 登录/注册
 */
function hmstar_common_show_user(type, url) {
  type = type ? type : 'login';
  url = url ? url : '';
  if (url) {
    setCookie('loginsuccjump_url', url, 1);
  }
  if (type == 'register') {
    showRegister();
  } else {
    showLogin();
  }
  $('#hmstar_header_box_login').modal({
    backdrop: 'static'
  })
  $('#hmstar_header_box_login').modal('show');
}
/**
 * 提交分组表单
 * 分组ID
 */
function on_submit(groupid) {
  return jQuery.formValidator.pageIsValid(groupid);
}

var callfun = null;

function popBox(msg, type, time_num, call_fun, is_static) {
  callfun = call_fun;
  is_static = is_static || false;
  if (!msg) return false;
  if (!time_num) time_num = 3;
  var _match = /^[0-9]+.?[0-9]*$/;
  var _str = '';
  _str = '<div class="modal fade" id="popBox" tabindex="-1" role="dialog" aria-hidden="true">';
  _str += '<div class="modal-dialog modal-alert">';
  _str += '<div class="modal-content">';
  _str += '<div class="modal-body">';
  _str += '<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
  _str += '<table>';
  _str += '<tr id="popBoxContent">';
  _str += '</tr>';
  _str += '</table>';
  _str += '</div>';
  _str += '</div>';
  _str += '</div>';
  _str += '</div>';
  if ($('#popBox').is('#popBox') == false) {
    $('body').append(_str);
    if (is_static) {
      $("#popBox").modal({
        keyboard: false,
        backdrop: 'static',
        show: false
      });
    }
    if (typeof(callfun) == 'function') {
      $('#popBox').on('hidden.bs.modal', function(e) {
        callfun();
      });
    }
  }

  var _tips, _tips2;
  _tips2 = '<p>' + msg + '</p>';
  if (_match.test(time_num)) {
    _tips2 += '<p class="text-muted">消息将在<span id="popTimeNum">' + time_num + '</span> 秒后消失</p>';
  }
  if (type == 'error') {
    _tips = '<td width="80" class="pop-error">&nbsp;</td><td><h2>失败</h2>' + _tips2 + '</td>';
  } else if (type == 'info') {
    _tips = '<td width="80" class="pop-info">&nbsp;</td><td><h2>消息</h2>' + _tips2 + '</td>';
  } else {
    _tips = '<td width="80" class="pop-success">&nbsp;</td><td><h2>成功</h2>' + _tips2 + '</td>';
  }
  $('#popBoxContent').html(_tips);
  $('#popBox').modal('toggle');
  if (_match.test(time_num)) {
    var timer = '';
    $("#popTimeNum").html(time_num);
    timer = setInterval(function() {
      var count = parseInt(parseInt($("#popTimeNum").html()) - 1);
      if (count > 0) {
        $("#popTimeNum").html(count);
      } else {
        clearInterval(timer);
        $('#popBox').modal('hide');
      }
    }, 1000);
  } else {

  }

}

/* 首页广告栏 */
$(function() {
  var sWidth = $("#focus").width();
  var len = $("#focus ul li").length;
  var index = 0;
  var picTimer;

  $("#focus").mouseover(function() {
			$(".pre").show();
			$(".next").show();
		}).on("mouseleave",function() {
			$(".pre").hide();
			$(".next").hide();
	});

  var btn = "<div class='preNext-btn'><div class='preNext'><div class='preNext pre'></div><div class='preNext next'></div></div><div class='bg-btn-news'>";
  for (var i = 0; i < len; i++) {
    btn += "<span></span>";
  }
  btn += "</div></div>";
  $("#focus").append(btn);

  $("#focus .bg-btn-news  span").css("opacity", 0.5).mouseover(function() {
    index = $("#focus .bg-btn-news  span").index(this);
    showPics(index);
  }).eq(0).trigger("mouseover");

  $("#focus .preNext").css("opacity", 0.2).hover(function() {
    $(this).stop(true, false).animate({
      "opacity": "0.5"
    }, 300);
  }, function() {
    $(this).stop(true, false).animate({
      "opacity": "0.2"
    }, 300);
  });

  $("#focus .pre").click(function() {
    index -= 1;
    if (index == -1) {
      index = len - 1;
    }
    showPics(index);
  });

  $("#focus .next").click(function() {
    index += 1;
    if (index == len) {
      index = 0;
    }
    showPics(index);
  });

  $("#focus ul").css("width", sWidth * (len));

  $("#focus").hover(function() {
    clearInterval(picTimer);
  }, function() {
    picTimer = setInterval(function() {
      showPics(index);
      index++;
      if (index == len) {
        index = 0;
      }
    }, 4000);
  }).trigger("mouseleave");

  function showPics(index) {
    var nowLeft = -index * sWidth;
    $("#focus ul").stop(true, false).animate({
      "left": nowLeft
    }, 300);
    $("#focus .bg-btn-news  span").stop(true, false).animate({
      "opacity": "0.2"
    }, 300).eq(index).stop(true, false).animate({
      "opacity": "1"
    }, 300);
  }
});
