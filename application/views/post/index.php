

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
          <h3 class="card-title"><a href = "<?php echo base_url('post/create')?>" class = "btn btn-dark">Add</a></h3>

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
          <table id ="example2" class = "table table-bordered table-stripped">
            <thead>
                <tr>
                
                    <th>Imagen</th>    
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Category </th>
                    <th>Description</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
</thead>
<tbody>
    <tr><?php foreach($post as $row) {?>
      <td><img src = "<?php echo base_url()?>uploads/<?php echo $row->post_image?>" width = "50px"></td>
        <td><?php echo $row->post_title?></td>
        <td><?php echo $row->slug_title?></td>
        <td><?php echo $row->category_title?></td>
        <td><?php echo $row->description?></td>
        <td><?php echo date('l/d/m/y')?></td>
        <td>
            <a href = "<?php echo base_url()?>post/edit/<?php echo $row->post_id?>" class = "btn btn-dark">Edit</a>
            <a href = "<?php echo base_url()?>post/delete/<?php echo $row->post_id?>" class = "btn btn-dark">Delete</a>
</td>
    </tr><?php }?>
</tbody>
<tfoot>
                <tr>
                    <th>Image</th>    
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Category </th>
                    <th>Description</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
</tfoot>
</table>
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

  