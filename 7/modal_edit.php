<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
    include "koneksi.php";
	$id=$_GET['id'];
	$modal=mysqli_query($koneksi,"SELECT nama.id as 'id', nama.name as 'nama', hobi.id_hobby as 'hobi_id', hobi.name as 'hobi', kategori.id_category as 'kategori_id', kategori.name as 'kategori'  FROM nama, hobi, kategori WHERE nama.id_hobby = hobi.id_hobby AND 
    hobi.id_category = kategori.id_category AND nama.id = '$id'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit</h4>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Name</label>
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $r['id']; ?>" />
     				<input type="text" name="name"  class="form-control" value="<?php echo $r['nama']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Hobby</label>
					<input type="hidden" name="hobby_id"  class="form-control" value="<?php echo $r['hobi_id']; ?>" />
     				<input type="text" name="hobby"  class="form-control" value="<?php echo $r['hobi']; ?>"/>
                </div>
				
				<div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Category</label>
					<input type="hidden" name="category_id"  class="form-control" value="<?php echo $r['kategori_id']; ?>" />
     				<input type="text" name="category"  class="form-control" value="<?php echo $r['kategori']; ?>"/>
                </div>

	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Confirm
	                </button>

	           
	            </div>

            	</form>

             <?php } ?>

            </div>

           
        </div>
    </div>