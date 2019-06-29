<!doctype html>
<html lang="en">
<head>
<title>BOOTCAMP ARKADEMY</title>


<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
		<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				
				<a class="navbar-brand"><img class="image" border="0" src="images/logo.png"   style="    height: inherit; margin: 1px;padding: 0px color:white;">ARKADEMY BOOTCAMP</a>
			</div>
			
			
		</div>
	</nav>
<div class="container">
 
  <p align="right"><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>      

<table id="mytable" class="table table-bordered" text-align="center"> 
    <thead>
      <th>Name</th>
      <th>Hobby</th>
      <th>Category</th>
	  <th>Action</th>
    </thead>
<?php 
  include "koneksi.php";
  $no = 0;
  $modal=mysqli_query($koneksi,"SELECT nama.id as 'id', nama.name as 'nama', hobi.name as 'hobi', kategori.name as 'kategori' FROM nama, hobi, kategori WHERE nama.id_hobby = hobi.id_hobby AND 
hobi.id_category = kategori.id_category");
	
  while($r=mysqli_fetch_array($modal)){
  $no++;
       
?>
  <tr>
      
      <td><?php echo  $r['nama']; ?></td>
      <td><?php echo  $r['hobi']; ?></td>
	  <td><?php echo  $r['kategori']; ?></td>
      <td>
	  <a href="#" onclick="confirm_modal('proses_delete.php?&id=<?php echo  $r['id']; ?>');"><img class="image" border="0" src="images/trash.png"   style="    width: 40px; margin: 1px;padding: 0px color:white;"></a>
      
         <a href="#" class='open_modal' id='<?php echo  $r['id']; ?>'><img class="image" border="0" src="images/edit.png"   style="    width: 40px; margin: 1px;padding: 0px color:white;"></a>
         </td>
  </tr>
 

<?php } ?>
</table>
</div>


<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add</h4>
        </div>

        <div class="modal-body">
          <form action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Name</label>
                  <input type="text" name="name"  class="form-control" placeholder="Name .." required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Hobby</label>
                  <input type="text" name="hobby"  class="form-control" placeholder="Hobby .." required/>
                </div>
				
				<div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Category</label>
                  <input type="text" name="category"  class="form-control" placeholder="Category .." required/>
                </div>

              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      ADD
                  </button>
              </div>

              </form>

           

            </div>

           
        </div>
    </div>
</div>

<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
</div>

<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Apakah anda yakin akan menghapus data ini ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>





<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "modal_edit.php",
    			   type: "GET",
    			   data : {id: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

</body>
</html>

  



