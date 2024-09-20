<!DOCTYPE html>
<html>

<?php
session_start();
$conn= mysqli_connect("localhost", "root", "", "foodbay");
$sql = "Select upload_time from bid_board";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$date_today = $row['upload_time'];
?>
<script type="text/javascript">
var count_id = '<?php echo $row['upload_time'];?>';
var countDownDate = new Date(count_id).getTime()+4*1000*60*60;
var x = setInterval(function(){
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var hours =  Math.floor((distance%(1000*60*60*24))/(1000*60*60));
    var minutes =  Math.floor((distance%(1000*60*60)/(1000*60)));
    var seconds = Math.floor((distance%(1000*60)/(1000)));
    document.getElementById("live").innerHTML = hours + "h "+ minutes + "m " + seconds + "s ";
    if (distance<0){
        clearInterval(x);
        document.getElementById("live").innerHTML= "SOLD";
    }
}, 1000);
</script>
<?php
    $_SESSION['time_left'] = '<p id = "live"></p>';
?>
</html>