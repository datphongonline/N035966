function goidoianh() {
    var anh = ['image/pic1.jpg', 'image/pic2.jpg', 'image/pic3.jpg'];
    var i = 0;
    var j = 0; // width cua anh tiep theo
    var k = 0;
    setInterval(doianh, 7000);
    function doianh() {
        var ha = document.getElementById("myImage");
        var ha2 = document.getElementById("myImage2");
        if (i==2) {
            i=-1;
            k=0;
            ha2.src = anh[k];
        } else {
            k=i+1;
            ha2.src = anh[k];
        }
        var tg = setInterval(move2, 20);
        function move2() {
                    j++;
                    ha2.style.width = j + '%';
                    if (j == 101) {
                        ha.src = anh[k]
                        // ha2.style.zIndex = '-1';
                        // ha.style.zIndex = '1';
                        // ha2.src = anh[i];
                        j = 0;
                        i++;
                        clearInterval(tg);
                    }
        }
    }
}
goidoianh();// chay slide show
document.getElementById('login').addEventListener('click',function(){
    document.getElementById('formlogin').style.display = 'block';
},false)
document.getElementById('thoat').addEventListener('click', function(){
    document.getElementById('formlogin').style.display = 'none';
},false);

//hien dat phong
document.getElementById('phong100').addEventListener('click',function(){
    document.getElementById('hiendatphong').style.display = 'block';
});
document.getElementById('thoat1').addEventListener('click', function(){
    document.getElementById('hiendatphong').style.display = 'none';
},false);