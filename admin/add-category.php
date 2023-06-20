<?php 
include ("../admin/includes/header.php");
?>
<body>
<div class="container-fluid">   
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Thêm loại sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data"><!-- Uploads image -->

                            <div class="row">
                                <div class="col-md-12">
                                    <label for=""><b>Tên</b></label>
                                    <input type="text" id="full-name" required name="name" placeholder="Nhập tên Loại" class="form-control"> 
                                </div>                               
                                <div class="col-md-12">
                                <br>
                                    <label for=""><b>Slug</b></label>
                                    <input type="text" id="slug-name" required name="slug" placeholder="Nhập slug" class="form-control">
                                </div>                              
                                <div class="col-md-12">
                                <br>
                                    <label for=""><b>Mô tả</b></label>
                                    <input type="text" required name="description" placeholder="Nhập mô tả" class="form-control">
                                </div>                              
                                <div class="col-md-12">
                                <br>
                                    <label for=""><b>Hình</b></label>
                                    <input type="file" required name="image" class="form-control">
                                </div>
                                <div class="col-md-6">
                                <br>
                                    <label for=""><b>Status</b></label>
                                    <input type="checkbox" name="status">
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="add_category_btn">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
<script type="text/javascript" src="./assets/js/StringConvertToSlug.js"></script>
<?php include ("../admin/includes/footer.php"); ?>