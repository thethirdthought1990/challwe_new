<?php
$user=$this->session->userdata('user');
?>
      <div class="content-wrapper">      
         <section class="">         
            <div>
              <div class="box">
                <div class="box-header">                
                  <h3 class="box-title">Industry Directory</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th width="10%"></th>
                      <th width="40%">Title</th>
                      <th width="20%">Status</th>
                      <th width="30%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $i=1;
                    $statusClass=array("bg-red","bg-blue");
                    foreach ($list as $val) {?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $val['txt_field_name'];?></td>
                      <td>
                            <select class="form-control txt_status <?php echo $statusClass[$val['int_is_active']]?>" id="status_<?php echo $val['int_field_id']?>">
                                <option value="0" <?php echo ($val['int_is_active']==0)?"Selected":"";?>>Inactive</option>
                                <option value="1" <?php echo ($val['int_is_active']==1)?"Selected":"";?>>Active</option>
                            </select>
                        </td> 
                        <td>
                          <a href="<?php echo site_url().'/admin/editDirectory/'.$val['int_field_id']?>" class="btn btn-primary">Edit</a>
                          <a href="<?php echo site_url().'/admin/deleteDirectory/'.$val['int_field_id']?>" class="btn btn-danger">Delete</a>
                      </td>                      
                    </tr>
                    <?php }?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

<style>
.datepicker{
  z-index:9999 !important;
}
</style>
          
<script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
      $(".txt_status").change(function(){
          var idname=this.id;
          id=idname.split("_");
          var int_status=$(this).val();
          $.ajax({
              url: '<?php echo site_url()."/admin/changeDirectoryStatus"?>',
              type: "POST",
              data:{int_field_id:id[1],int_status:int_status},
              success: function(result){
                if(result=="Success"){
                    $("#"+idname).removeClass("bg-blue bg-red ");
                    if(int_status==1) $("#"+idname).addClass("bg-blue");
                    if(int_status==0) $("#"+idname).addClass("bg-red");
                    alert("Status Updated");  
                }                
              }
          });
      });

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