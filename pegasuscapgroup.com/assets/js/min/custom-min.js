$(function(){$('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var o=$(this.hash);if(o=o.length?o:$("[name="+this.hash.slice(1)+"]"),o.length)return $("html, body").animate({scrollTop:o.offset().top},1e3),!1}})}),$(function(){function o(o,t){var n=o.height(),i=t.height();r.css("height",n),o.fadeToggle(l,function(){r.animate({height:i},l,function(){t.fadeToggle(l)})})}function t(o,t){o.fadeOut(c,function(){$(this).text(t).fadeIn(c)})}function n(o,n,i,e,s,r){var l=o.text();t(i,r),o.addClass(e),n.removeClass("glyphicon-chevron-right"),n.addClass(s+" "+e),setTimeout(function(){t(i,l),o.removeClass(e),n.addClass("glyphicon-chevron-right"),n.removeClass(s+" "+e)},a)}var i=$("#login-form"),e=$("#lost-form"),s=$("#register-form"),r=$("#div-forms"),l=300,c=150,a=2e3;$("form").submit(function(){switch(this.id){case"login-form":var o=$("#login_username").val(),t=$("#login_password").val(),i="id="+o+"&pw="+t;return $.ajax({type:"GET",cache:!1,url:"verify.php",data:i,success:function(o){"OK"==o?(n($("#div-login-msg"),$("#icon-login-msg"),$("#text-login-msg"),"success","glyphicon-ok","Login OK"),setTimeout(' window.location.href = "index.php"; ',4e3)):n($("#div-login-msg"),$("#icon-login-msg"),$("#text-login-msg"),"error","glyphicon-remove","Login error")}}),!1;break;case"lost-form":var e=$("#lost_email").val();return"ERROR"==e?n($("#div-lost-msg"),$("#icon-lost-msg"),$("#text-lost-msg"),"error","glyphicon-remove","Send error"):n($("#div-lost-msg"),$("#icon-lost-msg"),$("#text-lost-msg"),"success","glyphicon-ok","Send OK"),!1;break;default:return!1}return!1}),$("#login_register_btn").click(function(){o(i,s)}),$("#register_login_btn").click(function(){o(s,i)}),$("#login_lost_btn").click(function(){o(i,e)}),$("#lost_login_btn").click(function(){o(e,i)}),$("#lost_register_btn").click(function(){o(e,s)}),$("#register_lost_btn").click(function(){o(s,e)})});