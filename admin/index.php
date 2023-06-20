<?php 
include ("../admin/includes/header.php");
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <br>
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Số khách hàng</p>
                        <h4 class="mb-0"><?= totalValue('users') ?></h4>
                    </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>so với tháng trước</p>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Tổng số sản phẩm</p>
                        <h4 class="mb-0"><?= totalValue('products') ?></h4>
                    </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>so với tuần trước</p>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Tổng đơn đặt hàng</p>
                        <h4 class="mb-0"><?= totalValue('orders') ?></h4>
                    </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> so với ngày hôm qua</p>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Tiền thu được</p>
                        <h4 class="mb-0"><?= number_format(totalPriceGet(), 0, ',', '.') ?> VNĐ</h4>
                    </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>so với ngày hôm qua</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php include ("../admin/includes/footer.php"); ?>