<?php 
    $data = [
        'pageTitle' => 'Danh sách blog'
    ];

    layout('header', 'admin', $data);
    layout('sidebar', 'admin', $data);
?>

<!-- Content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php layout('breadcrumb', 'admin', $data) ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Thời gian</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xoá</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
        <a href="">Sửa</a>
      </td>
      <td>
        <a href="">Xoá</a>
      </td>
    </tr>
  </tbody>
</table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<!-- End Content -->
<?php
    layout('footer', 'admin', $data);
?>
