<p id="demo"></p>

<script>
var today = new Date();
var dd = today.getDate();
var mmm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mmm<10) {
    mmm = '0'+mmm
} 

today = dd + '/' + mmm + '/' + yyyy;
document.write('Today Is: ' +today);
</script>