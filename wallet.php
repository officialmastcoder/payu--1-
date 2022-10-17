<?php
// new Code Here New Line hhhhhhh
include('header.php');
$userid= $udata['userid'];

if(isset($_POST['txn_form']) && $_POST['txn_form'] == "ahkwebsolutions"){
    $amount = mysqli_real_escape_string($conn,$_POST['amount']);
    $txn_number  = mysqli_real_escape_string($conn,$_POST['txn_number']);
    // $remark = mysqli_real_escape_string($conn,$_POST['remark']);
    $upi = mysqli_real_escape_string($conn,$_POST['upi']);
    

    $res = mysqli_query($conn,"INSERT INTO `qrtxn`(`emailid`, `amount`, `txnid`, `upi`, `status`) VALUES ('$mail','$amount','$txn_number','$upi','pending')");
    if($res){
        ?>
        <script>
            $(function(){
                Swal.fire(
                    'Success',
                    'Your Request Is Submitted',
                    'success'
                )

            });
        </script>
        <?php
    }else{
        ?>
        <script>
            $(function(){
                Swal.fire(
                    'Opps',
                    'Internal Server Problem Please Try Again Lates!',
                    'error'
                )

            });
        </script>
        <?php

    }
    
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Wallet</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">

		<div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            

            
            
            <div class="text-center">
               
<h3>Pay using Gateway</h3>
            </div>
            
            <form class="mt-2" method="post" action="payu/index.php?pay_uid">
                                     <div class="form-group">
                                   
<input tabindex="2" type="hidden" maxlength="12" size="12" name="pay_uid" autocomplete="off" value="<?php echo $userid ; ?>">

                                     <input type="text" name="Pay_Amt" class="form-control" placeholder="Enter Amount" style="border: 1px solid black">
                                     </div>

                                     <button class="btn-primary" style="width:100%"> Add Money </button>

                                 </form>
            
                      </div>



     
                      
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#wallet-history" data-toggle="tab">Wallet History</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="wallet-history">
                
	                <table id="tb-wallet" class="table table-bordered table-hover">
	                  <thead>
	                  <tr>
	                    <th class="text-center" style="width: 40px;">ID</th>
	                    <th class="text-center" style="width:100px;">Amount</th>
	                    <th>Upi</th>
	                    <th class="text-center" style="width:130px;">Transaction Number</th>
	                    <th class="text-center" style="width:100px;">Date</th>
	                    <th class="text-center" style="width:90px;">Status</th>
	                  </tr>
	                  </thead>
	                  <tbody>
                      <?php 
                      
                      $dres = mysqli_query($conn,"SELECT * FROM `qrtxn` WHERE emailid='$mail'");
                      if(mysqli_num_rows($dres)>0){
                        while($data = mysqli_fetch_assoc($dres)){
                            ?>
                            <tr>
                          
                          <td><?php echo $data['id'] ?></td>
                          <td><?php echo $data['amount'] ?></td>
                          <td><?php echo $data['upi'] ?></td>
                          <td><?php echo $data['txnid'] ?></td>
                          <td><?php echo $data['date'] ?></td>
                          <td><?php echo $data['status'] ?></td>
                        
                        </tr>
                            <?php
                        }
                      }
                      ?>
                        
	                  
	                  </tfoot>
	                </table>

              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->


  </div>
  <!-- /.content-wrapper -->

  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer> -->

  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
  <!-- </aside> -->
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>

<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
function alertMessage(type,message) {
  if (type=='error') {
    type = 'danger';
  }

  return "<div class='alert alert-"+type+" alert-dismissible'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> "+message+" </div>";
}
</script>

<script>
  $(function () {
    $('#tb-wallet').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#tb-births').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
