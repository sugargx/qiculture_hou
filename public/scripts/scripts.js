//下方滚动图片
$(document).ready(function () {
    var t1 = $(".scrollbar ul");    // 单轮ul
    var t2 = t1.html(); // 所有ul
    t1.html(t2+t2);
    var tm = null;  // 定时器，用于悬停
    var ll = $(".scrollbar ul li"); // 2轮li防止首尾有空
    var lg = ll.length; // li个数
    var ulw = 0; //2轮宽度
    for(var i = 0; i < lg; i++) {
        ulw += ll.eq(i).width();    // 加上每一个图宽度
    }
    t1.width(ulw);//改变单轮总宽度防止过渡时突然消失
    var speed = 1;   //  循环速度
    function slider(){
        if(t1.css('left')>='0px'){
            t1.css('left',-ulw/2+'px');
        }
        t1.css('left','+='+speed+'px');
    }
    tm = setInterval(slider,30);
    // 鼠标滑过停止滑动
    $('.scrollbar').mouseover(function(){

        clearInterval(tm);
    });
    //鼠标移开重新滑动
    $('.scrollbar').mouseout(function(){
        tm = setInterval(slider,30);
    });
});
/*时间不够了强行写*/
$(document).ready(function () {
    var slideImages = $('.slideImages');
    var slideTitles = $('.slideTitles');
    var slideIndexs = $('.slideIndexs');
    var num = slideImages.length;

    function change(current){
        $('.slideImages').fadeIn();
        $('.slideTitles').hide();
        $('.slideIndexs').css('background-color','black').css('color','white');
        $(".main-i" + current).fadeOut();
        $(".main-p" + current).show();
        $(".main-w" + current).css('background-color','white').css('color','black');
    }

    var current = 2;

    change(1)

    setInterval(function () {
        change(current);
        if(current % num == 0) {
            current = 1;
        }else{
            current = current+1;
        }
    }, 3000);


    $(".slideIndexs").click(function(){
        var index = $(this).attr('id')
        change(index)
    });
});