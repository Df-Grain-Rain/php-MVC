/*****************************************************************
                  jQuery Validate扩展验证方法  运用管理后台    
*****************************************************************/
$.validator.setDefaults({
    //指定错误提示的css类名，可以自定义错误提示的样式
    //validClass: "help-block m-b-none",
    //errorClass: "help-block m-b-none",
    //验证错误文本框样式
    highlight: function (element) {
        $(element).closest('.form-group')
            .removeClass('has-success')
            .addClass('has-error');
    },
    ////验证通过文本框样式
    unhighlight: function (element) {
        $(element).closest('.form-group')
            .removeClass('has-error')
            .addClass('has-success');
    },
    //用什么标签标记错误，默认是 label，可以改成 span
    errorElement: "span",
    //更改错误信息显示的位置
    errorPlacement: function (error, element) {
        if (element.is(":radio") || element.is(":checkbox")) {
            error.appendTo(element.parent().parent().parent());
        } else {
            error.appendTo(element.parent());
        }
    }
    //光标移出时
    //onfocusout: function (element) {
    //    this.element(element);
    //}
    ////光标移入时
    //onfocusin: function (element, event) {
    //    ////找到显示错误提示的标签并移除,针对jquery.validate.unobtrusive
    //    //var errorElement = $(element).next('span.field-validation-error');
    //    //if (errorElement) {
    //    //    errorElement.children().remove();
    //    //}
    //},
    //onkeyup: function (element, event) {
    //}
});
