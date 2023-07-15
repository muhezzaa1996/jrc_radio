<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title"><?= $title ?></h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Details Radio</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Radio Display - <?= $detail_radio[0]['station_display_name'] . " No. " . $detail_radio[0]['radio_number'] ?></h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="fw-bold text-uppercase">Channel Number</h5>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-info mb-0" style="font-size: 25px">16</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="fw-bold text-uppercase">Radio Status</h5>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-danger mb-0" style="font-size: 25px">OFF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="fw-bold text-uppercase">Power</h5>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-danger mb-0" style="font-size: 25px">OFF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="fw-bold text-uppercase">Squelch</h5>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-danger mb-0" style="font-size: 25px">OFF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="fw-bold text-uppercase">Remote</h5>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-danger mb-0" style="font-size: 25px">OFF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="fw-bold text-uppercase">RX Level</h5>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="text-muted mb-0">Level</p>
                                            <p class="text-muted mb-0">25%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="fw-bold text-uppercase">LX Level</h5>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="text-muted mb-0">Level</p>
                                            <p class="text-muted mb-0">25%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="fw-bold text-uppercase">Power Level</h5>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="text-muted mb-0">Level</p>
                                            <p class="text-muted mb-0">25%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Radio Control</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-channel-tab" data-toggle="pill" href="#pills-channel" role="tab" aria-controls="pills-channel" aria-selected="true">Channel Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-voip-config-tab" data-toggle="pill" href="#pills-voip-config" role="tab" aria-controls="pills-voip-config" aria-selected="false">VoIP Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-tcp-if-tab" data-toggle="pill" href="#pills-tcp-if" role="tab" aria-controls="pills-tcp-if" aria-selected="false">TCP I/F Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-reset-unit-tab" data-toggle="pill" href="#pills-reset-unit" role="tab" aria-controls="pills-reset-unit" aria-selected="false">Reset Unit Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-test-tone-tab" data-toggle="pill" href="#pills-test-tone" role="tab" aria-controls="pills-test-tone" aria-selected="false">Test Tone Output</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-voip-loop-tab" data-toggle="pill" href="#pills-voip-loop" role="tab" aria-controls="pills-voip-loop" aria-selected="false">VoIP Loop Back</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-reset-unit-testing-tab" data-toggle="pill" href="#pills-reset-unit-testing" role="tab" aria-controls="pills-reset-unit-testing" aria-selected="false">Reset Unit Testing</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-channel" role="tabpanel" aria-labelledby="pills-channel-tab">
                                <form class="form" action="#" id="formModalAdd">
                                    <div class="row mt-4">
                                        <div class="col-md-3 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Channel Number</label>
                                                <input id="channel_number" name="channel_number" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-cog"></i> Set Channel</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>Set SQ Level</label>
                                                <input id="sq_level" name="sq_level" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-cog"></i> Set SQ Level</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Power Reduction</label>
                                                <select name="power_reduction" id="power_reduction" class="form-control">
                                                    <option value=""></option>
                                                    <option value="M">Medium</option>
                                                    <option value="H">High</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-cog"></i> Set Power Reduction</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>Set SQ Up Limit</label>
                                                <input id="sq_up_limit" name="sq_up_limit" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-cog"></i> Set SQ Up Limit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>SQ Select</label>
                                                <select name="sq_select" id="sq_select" class="form-control">
                                                    <option value=""></option>
                                                    <option value="N">Noise</option>
                                                    <option value="C">Carrier</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-cog"></i> Set SQ Select</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-warning"><i class="fas fa-cog"></i> Reset Alarm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-voip-config" role="tabpanel" aria-labelledby="pills-voip-config-tab">
                                <form class="form" action="#">
                                    <div class="row mt-4">
                                        <div class="col-md-3 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>VoIP Output</label>
                                                <select name="voip_output" id="voip_output" class="form-control">
                                                    <option value=""></option>
                                                    <option value="1">Enabled</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>VoIP Send Mode</label>
                                                <select name="voip_send_mode" id="voip_send_mode" class="form-control">
                                                    <option value=""></option>
                                                    <option value="1">Always</option>
                                                    <option value="2">Receive Signal</option>
                                                    <option value="3">Stop</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Jitter Buffer Size</label>
                                                <input id="jitter_buffer_size" name="jitter_buffer_size" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>SRC IP Address</label>
                                                <input id="src_ip_address" name="src_ip_address" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Send Interval</label>
                                                <input id="send_interval" name="send_interval" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>DST IP Address</label>
                                                <input id="dst_ip_address" name="dst_ip_address" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Key Source</label>
                                                <select name="key_source" id="key_source" class="form-control">
                                                    <option value=""></option>
                                                    <option value="1">Marker Bit</option>
                                                    <option value="2">Payload</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>SRC Port</label>
                                                <input id="src_port" name="src_port" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>TTL</label>
                                                <input id="ttl" name="ttl" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>DST Port</label>
                                                <input id="dst_port" name="dst_port" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>TOS</label>
                                                <input id="tos" name="tos" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary"><i class="fas fa-cog"></i> Set Configuration</button>
                                            <button type="button" class="btn btn-warning"><i class="fas fa-refresh"></i> Refresh</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-tcp-if" role="tabpanel" aria-labelledby="pills-tcp-if-tab">
                                <form class="form" action="#">
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>IP Address</label>
                                                <input id="ip_address" name="ip_address" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>TCP Port</label>
                                                <input id="tcp_port" name="tcp_port" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Network Mask</label>
                                                <input id="network_mask" name="network_mask" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Unit Address</label>
                                                <input id="unit_address" name="unit_address" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Default Gateway</label>
                                                <input id="default_gateway" name="default_gateway" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>DSC Unit Address</label>
                                                <input id="dsc_unit_address" name="dsc_unit_address" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary"><i class="fas fa-cog"></i> Set Configuration</button>
                                            <button type="button" class="btn btn-warning"><i class="fas fa-refresh"></i> Refresh</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-reset-unit" role="tabpanel" aria-labelledby="pills-reset-unit-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary"><i class="fas fa-cog"></i> Reset Unit Settings</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-test-tone" role="tabpanel" aria-labelledby="pills-test-tone-tab">
                                <form class="form" action="#">
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Status</label>
                                                <input id="status" name="status" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Frequency</label>
                                                <select name="frequency" id="frequency" class="form-control">
                                                    <option value=""></option>
                                                    <option value="1">300 Hz</option>
                                                    <option value="2">500 Hz</option>
                                                    <option value="3">1000 Hz</option>
                                                    <option value="4">2000 Hz</option>
                                                    <option value="5">3000 Hz</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Tone Type</label>
                                                <select name="tone_type" id="tone_type" class="form-control">
                                                    <option value=""></option>
                                                    <option value="1">Tx</option>
                                                    <option value="2">VoIP</option>
                                                    <option value="3">Tx + VoIP</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Tone Level</label>
                                                <input id="tone_level" name="tone_level" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary"><i class="fas fa-cog"></i> Start Testing</button>
                                            <button type="button" class="btn btn-danger"><i class="fas fa-stop"></i> Stop</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-voip-loop" role="tabpanel" aria-labelledby="pills-voip-loop-tab">
                                <form class="form" action="#">
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Loop Back</label>
                                                <select name="frequency" id="frequency" class="form-control">
                                                    <option value=""></option>
                                                    <option value="1">Normal Output</option>
                                                    <option value="2">Loop Back</option>
                                                    <option value="3">Normal + Loop Back</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary"><i class="fas fa-cog"></i> Start Testing</button>
                                            <button type="button" class="btn btn-danger"><i class="fas fa-stop"></i> Stop</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-reset-unit-testing" role="tabpanel" aria-labelledby="pills-reset-unit-testing-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary"><i class="fas fa-cog"></i> Normal</button>
                                        <button type="button" class="btn btn-warning"><i class="fas fa-stop"></i> Local</button>
                                        <button type="button" class="btn btn-success"><i class="fas fa-stop"></i> Master</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Radio Informations</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-serial-number-tab" data-toggle="pill" href="#pills-serial-number" role="tab" aria-controls="pills-serial-number" aria-selected="true">Serial Number</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-voip-tab" data-toggle="pill" href="#pills-voip" role="tab" aria-controls="pills-voip" aria-selected="false">VoIP Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-version-tab" data-toggle="pill" href="#pills-version" role="tab" aria-controls="pills-version" aria-selected="false">Version</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-mac-address-tab" data-toggle="pill" href="#pills-mac-address" role="tab" aria-controls="pills-mac-address" aria-selected="false">Mac Address</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-serial-number" role="tabpanel" aria-labelledby="pills-serial-number-tab">
                                <div class="table-responsive">
                                    <table style="font-size: 13px">
                                        <tbody>
                                            <?php foreach ($detail_radio as $radio) : ?>
                                                <tr>
                                                    <td class="font-weight-bold" style="width: 150px">Radio Number</td>
                                                    <td style="width: 15px">:</td>
                                                    <td class="font-weight-bold text-primary"><?= $radio['radio_number'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold" style="width: 150px">Station Number</td>
                                                    <td style="width: 15px">:</td>
                                                    <td class="font-weight-bold text-primary"><?= $radio['station_no'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold" style="width: 150px">Station Display Name</td>
                                                    <td style="width: 15px">:</td>
                                                    <td class="font-weight-bold text-primary"><?= $radio['station_display_name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold" style="width: 150px">Type Name</td>
                                                    <td style="width: 15px">:</td>
                                                    <td class="font-weight-bold text-primary"><?= $radio['type_name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold" style="width: 150px">Serial Number</td>
                                                    <td style="width: 15px">:</td>
                                                    <td class="font-weight-bold text-primary"><?= $radio['serial_number'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold" style="width: 150px">Frequency / Channel</td>
                                                    <td style="width: 15px">:</td>
                                                    <td class="font-weight-bold text-primary"><?= $radio['frequency_channel'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold" style="width: 150px">IP Address</td>
                                                    <td style="width: 15px">:</td>
                                                    <td class="font-weight-bold text-primary"><?= $radio['ip_address'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold" style="width: 150px">Subnet Mask</td>
                                                    <td style="width: 15px">:</td>
                                                    <td class="font-weight-bold text-primary"><?= $radio['subnet_mask'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold" style="width: 150px">Default Gateway</td>
                                                    <td style="width: 15px">:</td>
                                                    <td class="font-weight-bold text-primary"><?= $radio['default_gateway'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold" style="width: 150px">TCP Port</td>
                                                    <td style="width: 15px">:</td>
                                                    <td class="font-weight-bold text-primary"><?= $radio['tcp_port'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold" style="width: 150px">DSC Unit Address</td>
                                                    <td style="width: 15px">:</td>
                                                    <td class="font-weight-bold text-primary"><?= $radio['dsc_unit_address'] ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-voip" role="tabpanel" aria-labelledby="pills-voip-tab">
                                <div class="table-responsive">
                                    <table style="font-size: 13px">
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">RX Packet</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="rx_packet" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">RX Delay Packet</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="rx_delay_packet" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">RX Loss Packet</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="rx_loss_packet" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">FIFO Overflow</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="fifo_overflow" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">FIFO Underflow</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="fifo_underflow" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">Jitter</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="jitter" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">Max Jitter</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="max_jitter" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">Skew</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="skew" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">Max Skew</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="max_skew" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">Jitter Buffer</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="jitter_buffer" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">Sampling Rate Error</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="sampling_rate_error" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">Rate Control</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="rate_control" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">Rate Controlled Count</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="rate_controlled_count" readonly></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-version" role="tabpanel" aria-labelledby="pills-version-tab">
                                <div class="table-responsive">
                                    <table style="font-size: 13px">
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">Main</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="main" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">MCDSP</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="mcdsp" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">VDSP</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="vdsp" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">FPGA</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="fpga" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">CPU</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="cpu" readonly></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-mac-address" role="tabpanel" aria-labelledby="pills-mac-address-tab">
                                <div class="table-responsive">
                                    <table style="font-size: 13px">
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bold" style="width: 150px">MAC</td>
                                                <td style="width: 15px">:</td>
                                                <td><input class="form-control form-control-sm font-weight-bold text-primary" type="text" id="mac_address" readonly></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Radio Alarm Status</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($alarm_list as $alarm) : ?>
                                <div class="col-md-4">
                                    <div class="card card-stats card-danger card-round" id="<?= strtolower(str_replace(" ", "_", $alarm['alarm_name'])) ?>">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-stats">
                                                    <div class="numbers">
                                                        <p class="card-category" style="font-size: 10px"><?= strtoupper($alarm['alarm_name']) ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>