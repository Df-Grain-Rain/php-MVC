/*****************************************************************
                  jQuery Validate扩展
*****************************************************************/
//修改jQuery Validation默认设置
$.validator.setDefaults({
    //验证通过文本框增加自定义样式,默认valid
    validClass: "valid",
    //验证未通过文本框增加自定义错误样式
    highlight: function (element) {
        //文本框移除正确样式,增加错误样式
        $(element).removeClass('valid').addClass('valid-error');
        //其他操作
        var tipElement = $(element).siblings(".tips");
        if (tipElement) 
          tipElement.hide();  
    },
    //验证通过文本框增加自定义正确样式
    unhighlight: function (element) {
        ////文本框移除错误样式,增加正确样式
        $(element).removeClass('valid-error').addClass('valid');
        ////其他操作
        var rightElement = $(element).siblings(".field-validation-valid");
        var tipElement = $(element).siblings(".tips");
        if (rightElement)
            tipElement.hide(); rightElement.addClass("field-validation-right");
    },
    //更改错误信息显示的位置
    errorPlacement: function (error, element) {
        if (element.is(":radio") || element.is(":checkbox")) {
            error.appendTo(element.parent().parent().parent());
        } else {
            error.appendTo(element.parent());
        }
    },
    ////光标移出时，显示错误信息
    //onfocusout: function (element) {
    //    this.element(element);
    //},
    ////光标移入时,清除错误信息
    //onfocusin: function (element, event) {
    //    //找到显示错误提示的标签并移除,针对jquery.validate.unobtrusive
    //    var errorElement = $(element).next('span.field-validation-error');
    //    if (errorElement) {
    //        errorElement.children().remove();
    //    }
    //},
    //
    onkeyup: function (element, event) {
    }
});
/*****************************************************************
                 jQuery Validate自定义验证方法       
*****************************************************************/
$(function () {
    // 判断值是否是空格，  2016-9-23 liliang  2016-9-26日liliang已测试  
    jQuery.validator.addMethod("isSpace", function (value, element) {
        value = value.replace(/(^\s*)|(\s*$)/g, "");
        return this.optional(element) || value.length > 0;
    }, "不能为空格");

    // 判断是否规范合法账号  2016-12-7日liliang已测试, 已加入属性验证 
    jQuery.validator.addMethod("account", function (value, element) {
        return this.optional(element) || /^[\u4e00-\u9fa5A-Za-z0-9_-]{4,20}$/.test(value);
    }, "支持中文、字母、数字、“-”“_”的组合，4-20个字符");

    // 判断整数value是否等于0 
    jQuery.validator.addMethod("isIntEqZero", function (value, element) {
        value = parseInt(value);
        return this.optional(element) || value == 0;
    }, "整数必须为0");

    // 判断整数value是否大于0
    jQuery.validator.addMethod("isIntGtZero", function (value, element) {
        value = parseInt(value);
        return this.optional(element) || value > 0;
    }, "整数必须大于0");

    // 判断整数value是否大于或等于0
    jQuery.validator.addMethod("isIntGteZero", function (value, element) {
        value = parseInt(value);
        return this.optional(element) || value >= 0;
    }, "整数必须大于或等于0");

    // 判断整数value是否不等于0 
    jQuery.validator.addMethod("isIntNEqZero", function (value, element) {
        value = parseInt(value);
        return this.optional(element) || value != 0;
    }, "整数必须不等于0");

    // 判断整数value是否小于0 
    jQuery.validator.addMethod("isIntLtZero", function (value, element) {
        value = parseInt(value);
        return this.optional(element) || value < 0;
    }, "整数必须小于0");

    // 判断整数value是否小于或等于0 
    jQuery.validator.addMethod("isIntLteZero", function (value, element) {
        value = parseInt(value);
        return this.optional(element) || value <= 0;
    }, "整数必须小于或等于0");

    // 判断浮点数value是否等于0 
    jQuery.validator.addMethod("isFloatEqZero", function (value, element) {
        value = parseFloat(value);
        return this.optional(element) || value == 0;
    }, "浮点数必须为0");

    // 判断浮点数value是否大于0
    jQuery.validator.addMethod("isFloatGtZero", function (value, element) {
        value = parseFloat(value);
        return this.optional(element) || value > 0;
    }, "浮点数必须大于0");

    // 判断浮点数value是否大于或等于0
    jQuery.validator.addMethod("isFloatGteZero", function (value, element) {
        value = parseFloat(value);
        return this.optional(element) || value >= 0;
    }, "浮点数必须大于或等于0");

    // 判断浮点数value是否不等于0 
    jQuery.validator.addMethod("isFloatNEqZero", function (value, element) {
        value = parseFloat(value);
        return this.optional(element) || value != 0;
    }, "浮点数必须不等于0");

    // 判断浮点数value是否小于0 
    jQuery.validator.addMethod("isFloatLtZero", function (value, element) {
        value = parseFloat(value);
        return this.optional(element) || value < 0;
    }, "浮点数必须小于0");

    // 判断浮点数value是否小于或等于0 
    jQuery.validator.addMethod("isFloatLteZero", function (value, element) {
        value = parseFloat(value);
        return this.optional(element) || value <= 0;
    }, "浮点数必须小于或等于0");

    // 判断浮点型  
    jQuery.validator.addMethod("isFloat", function (value, element) {
        return this.optional(element) || /^[-\+]?\d+(\.\d+)?$/.test(value);
    }, "只能包含数字、小数点等字符");

    // 匹配integer
    jQuery.validator.addMethod("isInteger", function (value, element) {
        return this.optional(element) || (/^[-\+]?\d+$/.test(value) && parseInt(value) >= 0);
    }, "匹配integer");

    // 判断数值类型，包括整数和浮点数
    jQuery.validator.addMethod("isNumber", function (value, element) {
        return this.optional(element) || /^[-\+]?\d+$/.test(value) || /^[-\+]?\d+(\.\d+)?$/.test(value);
    }, "匹配数值类型，包括整数和浮点数");

    // 只能输入[0-9]数字 2016-12-5日liliang已测试 
    jQuery.validator.addMethod("digits", function (value, element) {
        return this.optional(element) || /^\d+$/.test(value);
    }, "只能输入0-9数字");
    // 判断是否中文汉字  2016-12-6日liliang已测试, 已加入属性验证 
    jQuery.validator.addMethod("chinese", function (value, element) {
        return this.optional(element) || /^[\u4e00-\u9fa5]+$/.test(value);
    }, "只能包含中文汉字字符");
    // 判断英文字符 
    jQuery.validator.addMethod("english", function (value, element) {
        return this.optional(element) || /^[A-Za-z]+$/.test(value);
    }, "只能包含英文字符。");

    // 手机号码验证    2016-9-26日liliang已测试，  
    jQuery.validator.addMethod("mobile", function (value, element) {
        var length = value.length;
        return this.optional(element) || (length == 11 && /^1[34578]\d{9}$/.test(value));
    }, "请正确填写您的手机号码。");

    // 电话号码验证    
    jQuery.validator.addMethod("isPhone", function (value, element) {
        var tel = /^(\d{3,4}-?)?\d{7,9}$/g;
        return this.optional(element) || (tel.test(value));
    }, "请正确填写您的电话号码。");

    // 联系电话(手机/电话皆可)验证   
    jQuery.validator.addMethod("isTel", function (value, element) {
        var length = value.length;
        var mobile = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
        var tel = /^(\d{3,4}-?)?\d{7,9}$/g;
        return this.optional(element) || tel.test(value) || (length == 11 && mobile.test(value));
    }, "请正确填写您的联系方式");

    // 匹配qq      
    jQuery.validator.addMethod("isQq", function (value, element) {
        return this.optional(element) || /^[1-9]\d{4,12}$/;
    }, "匹配QQ");

    // 邮政编码验证    
    jQuery.validator.addMethod("isZipCode", function (value, element) {
        var zip = /^[0-9]{6}$/;
        return this.optional(element) || (zip.test(value));
    }, "请正确填写您的邮政编码。");

    // 匹配密码，以字母开头，长度在6-12之间，只能包含字符、数字和下划线。         2016-9-26日liliang已测试  
    jQuery.validator.addMethod("isPwd", function (value, element) {
        return this.optional(element) || /^[a-zA-Z]\\w{6,12}$/.test(value);
    }, "以字母开头，长度在6-12之间，只能包含字符、数字和下划线。");

    // 身份证号码验证
    jQuery.validator.addMethod("isIdCardNo", function (value, element) {
        //var idCard = /^(\d{6})()?(\d{4})(\d{2})(\d{2})(\d{3})(\w)$/;   
        return this.optional(element) || isIdCardNo(value);
    }, "请输入正确的身份证号码。");

    // IP地址验证   
    jQuery.validator.addMethod("ip", function (value, element) {
        return this.optional(element) || /^(([1-9]|([1-9]\d)|(1\d\d)|(2([0-4]\d|5[0-5])))\.)(([1-9]|([1-9]\d)|(1\d\d)|(2([0-4]\d|5[0-5])))\.){2}([1-9]|([1-9]\d)|(1\d\d)|(2([0-4]\d|5[0-5])))$/.test(value);
    }, "请填写正确的IP地址。");

    // 字符验证，只能包含中文、英文、数字、下划线等字符。    
    jQuery.validator.addMethod("stringCheck", function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9\u4e00-\u9fa5-_]+$/.test(value);
    }, "只能包含中文、英文、数字、下划线等字符");

    // 匹配english  
    jQuery.validator.addMethod("isEnglish", function (value, element) {
        return this.optional(element) || /^[A-Za-z]+$/.test(value);
    }, "匹配english");
    // 匹配中文(包括汉字和字符) 
    jQuery.validator.addMethod("isChineseChar", function (value, element) {
        return this.optional(element) || /^[\u0391-\uFFE5]+$/.test(value);
    }, "匹配中文(包括汉字和字符) ");

    // 判断是否为合法字符(a-zA-Z0-9-_)
    jQuery.validator.addMethod("isRightfulString", function (value, element) {
        return this.optional(element) || /^[A-Za-z0-9_-]+$/.test(value);
    }, "判断是否为合法字符(a-zA-Z0-9-_)");

    // 判断是否包含中英文特殊字符，除英文"-_"字符外
    jQuery.validator.addMethod("isContainsSpecialChar", function (value, element) {
        var reg = RegExp(/[(\ )(\`)(\~)(\!)(\@)(\#)(\$)(\%)(\^)(\&)(\*)(\()(\))(\+)(\=)(\|)(\{)(\})(\')(\:)(\;)(\')(',)(\[)(\])(\.)(\<)(\>)(\/)(\?)(\~)(\！)(\@)(\#)(\￥)(\%)(\…)(\&)(\*)(\（)(\）)(\—)(\+)(\|)(\{)(\})(\【)(\】)(\‘)(\；)(\：)(\”)(\“)(\’)(\。)(\，)(\、)(\？)]+/);
        return this.optional(element) || !reg.test(value);
    }, "含有中英文特殊字符");


    //身份证号码的验证规则
    function isIdCardNo(num) {
        //if (isNaN(num)) {alert("输入的不是数字！"); return false;} 
        var len = num.length, re;
        if (len == 15)
            re = new RegExp(/^(\d{6})()?(\d{2})(\d{2})(\d{2})(\d{2})(\w)$/);
        else if (len == 18)
            re = new RegExp(/^(\d{6})()?(\d{4})(\d{2})(\d{2})(\d{3})(\w)$/);
        else {
            //alert("输入的数字位数不对。"); 
            return false;
        }
        var a = num.match(re);
        if (a != null) {
            if (len == 15) {
                var D = new Date("19" + a[3] + "/" + a[4] + "/" + a[5]);
                var B = D.getYear() == a[3] && (D.getMonth() + 1) == a[4] && D.getDate() == a[5];
            }
            else {
                var D = new Date(a[3] + "/" + a[4] + "/" + a[5]);
                var B = D.getFullYear() == a[3] && (D.getMonth() + 1) == a[4] && D.getDate() == a[5];
            }
            if (!B) {
                //alert("输入的身份证号 "+ a[0] +" 里出生日期不对。"); 
                return false;
            }
        }
        if (!re.test(num)) {
            //alert("身份证最后一位只能是数字和字母。");
            return false;
        }
        return true;
    }

});


//扩展方法注册,必须注册，才能加入model属性验证，名称必须小写
var _extendRuleArray = new Array("mobile", "chinese", "account");//初始化扩展规则
for (var i = 0; i < _extendRuleArray.length; i++) {
    $.validator.unobtrusive.adapters
        .addBool(_extendRuleArray[i]);
}
/*****************************************************************
                  公共验证方法      
*****************************************************************/
/// <summary>
/// 获取验证码倒计时
/// </summary>
/// <param name="obj"></param>
/// <returns></returns>
var countdown = 10;

function settime(obj) {//obj,dom名称
    if (countdown == 0) {
        $(obj).attr("disabled", "disabled")
        .css("cursor", "pointer")
        .val("免费获取验证码");
        countdown = 10;
        return;
    } else {
        $(obj).attr("disabled", "true")
        .css("cursor", "not-allowed")
        .val("重新发送(" + countdown + ")");
        countdown--;
    }
    setTimeout(function () { settime(obj) }, 1000);
}
/// <summary>
/// 显示错误提示信息
/// </summary>
/// <param name="a"></param>
/// <param name="b"></param>
/// <returns></returns>
function showTips(a, b) {
    //获取文本框对象
    var obj = $("[name =" + a + "]");
     obj.removeClass('valid')
        .addClass('valid-error')
        .siblings(".field-validation-valid")
        .removeClass('field-validation-valid')
        .addClass('field-validation-error')
        .html(b);
    //其他操作
    var element = obj.siblings(".tips");
    if (element)
        element.hide();

}
/// <summary>
/// 清除提示信息
/// </summary>
function clearTips()
{
    $(".field-validation-error")
        .removeClass('field-validation-error')
        .addClass('field-validation-valid').html("")
}
/// <summary>
/// 显示服务器端返回的错误提示信息
/// </summary>
/// <param name="a"></param>
/// <param name="b"></param>
/// <returns></returns>
function errTips(errorList)
{
    if (errorList != undefined && errorList != null && errorList.length > 0) {
        //文本框错误提示方式
        for (var i = 0; i < errorList.length; i++) {
            showTips(errorList[i].key, errorList[i].msg);
        }
    }
}
/// <summary>
/// 强度验证
/// </summary>
/// <param name="dom"></param>
/// <returns></returns>
function pwstrength(dom) {//注意样式
    $(dom).keyup(function () {
        var v = $(this).val();
        var strongRegex = new RegExp("^(?=.{10,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        if (strongRegex.test(v)) {
            //密码为七位及以上并且字母、数字、特殊字符三项中有两项，强度是强的
            $('#pwstrength-bar').attr("class", "pwstrength-bar-strong");
        }
        else if (mediumRegex.test(v)) {
            //密码为七位及以上并且字母、数字、特殊字符三项中有两项，强度是中等
            $('#pwstrength-bar').attr("class", "pwstrength-bar-normal");
        }
        else {
            //如果密码为6为及以下，就算字母、数字、特殊字符三项都包括，强度也是弱的 
            $('#pwstrength-bar').attr("class", "pwstrength-bar-weak");
        }
        return true;
    });
}






