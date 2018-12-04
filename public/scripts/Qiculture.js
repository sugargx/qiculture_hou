window.onload = function () {

    function school() {
        // 定义滚动速度
        var speed = 50;
        // 获取<div id="imgbox">元素
        var imgbox = document.getElementById("imgbox");
        // 复制一个<div>，用于无缝滚动
        imgbox.innerHTML += imgbox.innerHTML;
        // 获取两个<div>元素
        var div = imgbox.getElementsByTagName("div");
        // 启动定时器，调用滚动函数
        var timer1 = window.setInterval(marquee, speed);
        // 鼠标移入时暂停滚动，移出时继续滚动
        imgbox.onmouseover = function () {
            clearInterval(timer1);
        }
        imgbox.onmouseout = function () {
            timer1 = setInterval(marquee, speed);
        };
        // 滚动函数
        function marquee() {
            // 当第1个<div>被完全卷出时
            if (imgbox.scrollLeft > div[0].offsetWidth) {
                //将被卷起的内容归0
                imgbox.scrollLeft = 0;
            } else {
                // 否则向左滚动
                ++imgbox.scrollLeft;
            }
        }
    }

    school();
}
    function $(id) {
        return typeof id == "string" ? document.getElementById(id) : id;
    }
window.onload = function() {
        var titleName = $("tab-title").getElementsByTagName("li");
        var tabContent = $("tab-content").getElementsByClassName("tabct");
        if (titleName.length != tabContent.length) {
            return;
        }
        for (var index = 0; index < titleName.length; index++) {
            titleName[index].id = index;
            titleName[index].onmouseover = function () {
                for (var j = 0; j < titleName.length; j++) {
                    titleName[j].className = "";
                    tabContent[j].style.display = "none"
                }
                this.className = "select";
                tabContent[this.id].style.display = "block";
            }
        }
    }

