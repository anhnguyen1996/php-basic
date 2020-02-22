<div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh mục</h1>
                    <a href="<?php echo URL . 'Admin/Category/Add'; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Danh mục</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <?php
        /**
         * @var Core\Data $data
         */
        if ($data->getContentPage() != null) {
            $content = $data->getContentPage();
            if (file_exists('./mvc/views/admin/' . $content . '.php')) {
                require_once('./mvc/views/admin/' . $content . '.php');
            }
        }
        ?>
    </section>
    <!-- /.content -->
</div>