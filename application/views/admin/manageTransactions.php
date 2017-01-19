		<style>
         <section class="content">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Frames in Template</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th width="3%">SNo.</th>
                      <th width="20%">Transection Id</th> 
                      <th width="20%">Email</th>
                      <th width="20%">Amount</th>
                      <th width="8%">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $val['txn_id'];?></td>
                      <td><?php echo $val['payer_email'];?></td>
                      <td><?php echo $val['payment_gross']." ".$val['currency_code'];?></td>
                      <td>
                       <span class="btn "><?php echo $val['payment_status'];?></span>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
<script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
      
      $('#example1').DataTable({
          // "paging": true,
          // "lengthChange": false,
          // "searching": false,
          // "ordering": true,
          // "info": true,
          // "autoWidth": false
        });
  });
  </script>


        </section> 
      </div>