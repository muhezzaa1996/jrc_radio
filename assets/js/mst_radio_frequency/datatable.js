var table;
$(document).ready(function () {
  /* Datatables */
  $("#contentTable").DataTable();
  create_datatable();

  $("#contentTable").on("click", "#edit", function () {
    let data = table.row($(this).parents("tr")).data();
    open_modal_edit(data.mst_radio_frequency_id);
  });

  $("#contentTable").on("click", "#delete", function () {
    let data = table.row($(this).parents("tr")).data();
    open_modal_delete(data.mst_radio_frequency_id, data.station_display_name);
  });
});

function create_datatable() {
  $("#contentTable").DataTable().destroy();
  table = $("#contentTable").DataTable({
    iDisplayLength: 10,
    lengthMenu: [
      [10, 25, 50, -1],
      [10, 25, 50, "All"],
    ],
    columnDefs: [
      {
        targets: [0],
        className: "text-center",
        width: "100px",
        searchable: false,
        orderable: false,
        data: null,
        defaultContent: button_action(),
        fnCreateCell: function (nTd, sData, oData, iRow, iCol) {
          $(".tooltip-button", nTd).tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body",
          });
        },
      },
      {
        targets: [1],
        data: "nomor",
        searchable: false,
        orderable: false,
        width: "30px",
        class: "number",
      },
      { targets: [2], data: "radio_number", width: "120px" },
      { targets: [3], data: "station_no", width: "120px" },
      { targets: [4], data: "station_display_name", width: "200px" },
      { targets: [5], data: "type_name", width: "150px" },
      { targets: [6], data: "serial_number", width: "100px" },
      { targets: [7], data: "frequency_channel", width: "100px" },
      { targets: [8], data: "ip_address", width: "100px" },
      { targets: [9], data: "tcp_port", width: "100px" },
    ],
    order: [[4, "asc"]],
    // "oLanguage": { "sProcessing": loader },
    processing: true,
    serverSide: true,
    // "autoWidth": true,
    searching: true,
    scrollY: "500px",
    scrollX: true,
    scrollCollapse: true,
    paging: true,
    fixedColumns: {
      left: 1,
      right: 0,
    },
    ajax: {
      url: "mst_radio_frequency/create_datatable",
      type: "POST",
    },
  });

  // Membuat nomor tabel
  $("#contentTable").on("draw.dt", function () {
    let n = 1;
    $("td.number").each(function () {
      $(this).html(n++);
    });
  });
}

/* UNTUK REFRESH DATATABLE */
function refresh_table() {
  table.ajax.reload(null, false); //reload datatable ajax
}

/* UNTUK MEMUNCULKAN LOADING DI DATATABLE */
function loader() {
  var load = "<i class='fa fa-spinner fa-3x fa-spin'></i>";
  return load;
}

/* UNTUK MENGUBAH FORMAT TANGGAL */
function change_format_date(data) {
  if (data != undefined) {
    var explode = data.split(" ");
    var explode_date = explode[0].split("-");
    var dd = explode_date[2];
    var mm = explode_date[1];
    var yyyy = explode_date[0];
    var res_tgl = dd + "-" + mm + "-" + yyyy + " " + explode[1] + " WIB";
    return res_tgl;
  }
}

function button_action() {
  var btn =
    '<button type="button" id="edit" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Ubah"><i class="fa fa-edit"></i></button>' +
    "&nbsp;&nbsp;" +
    '<button type="button" id="delete" class="btn btn-sm  btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus"><i class="fa fa-trash"></i></button>';

  return btn;
}
