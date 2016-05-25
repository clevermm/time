<span id="show_time_1" style="font-size:18px;font-family:tahoma,arial;">
<script language="JavaScript">
function show_time_1(){
 d=new Date();
 H=d.getHours();H=(H<10)?"0"+H:H;
 i=d.getMinutes();i=(i<10)?"0"+i:i;
 s=d.getSeconds();s=(s<10)?"0"+s:s;
 document.getElementById('show_time_1').innerHTML=H+":"+i+":"+s;
 setTimeout("show_time_1()",1000);/* 1 sec */
} show_time_1();
</script>
</span>
