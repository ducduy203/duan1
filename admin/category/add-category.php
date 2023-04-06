<style>
	form {
		width: 600px;
		margin-left: 400px;
		margin-bottom: 50px;
	}

	.center {
		text-align: center;
	}

	body {
		background-color: #f1f2f6;
		;
	}
</style>

<div class="row">
	<div class="row center mt-4 mb-4">
		<h1>Add Category</h1>
	</div>
	<div class="">
		<form action="index.php?act=addcategory" method="post" enctype="multipart/form-data">
			<div>
				<label class="form-label">Category ID</label>
				<input type="text" class="form-control" name="categorycode" disabled>
			</div>
			<div>
				<label class="form-label">Category Name</label>
				<input type="text" class="form-control" name="categoryname">
				<span class="error"> <?php echo $categorynameErr ?? ''; ?></span>
			</div>
			<div>
				<label class="form-label">Image</label>
				<input type="file" class="form-control" name="hinh">
			</div>
			<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<input type="submit" class="btn btn-primary" name="addnew" value="Thêm Mới">
			<a href="index.php?act=listcategory"><input type="button" class="btn btn-primary" value="Danh Sách"></a>
			<?php
			if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
			?>

		</form>

	</div>
</div>