<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title"><?= $title ?></h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="<?= base_url('dashboard') ?>">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Master Menu</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Alarm Information</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title">Alarm List Table</h5>
                            <button class="btn btn-primary btn-round ml-auto" onclick="open_modal_add()">
                                <i class="fa fa-plus"></i>
                                Add Data
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="contentTable" class="table table-head-bg-primary mt-4 mb-4 table-bordered table-striped" style="font-size: 12px">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>#</th>
                                        <th>Alarm Name</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>