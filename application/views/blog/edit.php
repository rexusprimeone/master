

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form action = "<?php echo base_url('blog/update')?>" method = "post" enctype = "multipart/form-data">
          <input type ="hidden" name = "blog_id" value = "<?php echo $blog->blog_id?>">
          <div class = "form-group">
            <label>Title</label>
            <input type = "text" name = "title" class = "form-control" value = "<?php echo $blog->blog_title?>">
</div>
<div class = "form-group">
            <label>Slug</label>
            <select name = "title" class = "form-control">
              <?php foreach($slug as $row) {?>
              <option value = "<?php echo $row->slug_id?>"><?php echo $row->slug_title?></option>
              <?php }?>
</select>
</div>
<div class = "form-group">
            <label>Category</label>
            <select name = "category" class = "form-control">
              <?php foreach($category as $row) {?>
              <option value = "<?php echo $row->category_id?>"><?php echo $row->category_title?></option>
              <?php }?>
</select>
</div>
<div class = "form-group">
            <label>Description</label>
            <textarea name = "description" class = "form-control"><?php echo $blog->description?></textarea>
</div>
<div class = "form-group">
            <label>Image</label>
            <input type = "file" name = "image" class = "form-control">
</div>
<button type = "submit" class = "btn btn-dark btn-block">Kirim</button>
</form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <?php echo $title?>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  