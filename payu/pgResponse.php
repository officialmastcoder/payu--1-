<?php 
include('../../includes/config.php');

?>
<?php

if(isset($_POST['status'])){
    if($_POST['status']=="success"){
        
        $userid =$_POST['udf1'];
        $txnid = $_POST['txnid'];
        $sql = "UPDATE qrtxn SET status='approved' WHERE userid='$userid'";
        $sl = mysqli_query($conn,"SELECT * FROM usertable WHERE userid='$userid'");
        $udata =mysqli_fetch_assoc($sl);
        $check = mysqli_query($conn,"SELECT * FROM qrtxn WHERE userid='$userid' AND txnid='$txnid' AND status='pending'");
        if(mysqli_num_rows($check)==1){
            if($_POST['amount']!=NULL){
                $newbal= $udata['walletamount'];
            }
            $newbal = $udata['walletamount'] +$_POST['amount'];
        $walletadd = mysqli_query($conn,"UPDATE usertable SET walletamount='$newbal' WHERE userid='$userid' ");
        mysqli_query($conn,$sql);
            
        }
        
        echo "Success";
        ?>
        <script>
            setTimeout(()=>{
                window.location.href="https://ddprint.in/admin/wallet.php";
            },2000);
        </script>
        <?php 
    
    
    }
}
else { 
    echo "failed";
?>
 <script>
            setTimeout(()=>{
                window.location.href="https://ddprint.in/admin/wallet.php";
            },2000);
        </script>
    
<?php }




?>