$(document).ready(function () {
  $(".form-control").change(function () {
    $(this).closest(".form-group").find("label").removeClass("text-danger");
    $(this).closest(".form-group").find("label").addClass("text-primary");
    $(this).removeClass("border-danger");
    $(this).next().empty();
  });

  $("#btnSubmitLoader").hide();
  $("#btnSubmitDeleteLoader").hide();
});

function open_modal_add() {
  $("#modalAdd").modal("show");
  $("#modalTitle").text("Add Alarm");
  $("#alarm_id").val("");
  $("#formModalAdd")[0].reset();
  reset_form();
}

function open_modal_edit(id_source) {
  // Reset Button Save
  $("#btnSubmit").show();
  $("#btnSubmitLoader").hide();

  $("#modalAdd").modal("show");
  $("#modalTitle").text("Update Alarm");
  reset_form();
  show_form_value(id_source);
}

function open_modal_delete(id, alarm_name) {
  // Reset Button Delete
  $("#btnSubmitDelete").show();
  $("#btnSubmitDeleteLoader").hide();

  //Show Modal
  $("#modalDelete").modal("show");
  $("#textConfirm").text("Are you sure want to delete " + alarm_name + "?");
  $("#id_hapus").val(id);
}

function submit() {
  let form = $("#formModalAdd").serialize();
  let fd = new FormData();
  fd.append("form", form);

  $.ajax({
    url: "mst_alarm_information/add",
    type: "POST",
    data: fd,
    dataType: "JSON",
    processData: false,
    contentType: false,
    beforeSend: function () {
      $("#btnSubmit").hide();
      $("#btnSubmitLoader").show();
    },
    success: function (response) {
      if (response.status) {
        setTimeout(function () {
          show_notif(response);
          $("#modalAdd").modal("hide");
          refresh_table();
        }, 3000);
      } else {
        setTimeout(function () {
          $("#btnSubmit").show();
          $("#btnSubmitLoader").hide();
          show_error_validation(response);
        }, 3000);
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      setTimeout(function () {
        $("#btnSubmit").show();
        $("#btnSubmitLoader").hide();
        var content = {};

        content.message =
          "Failed! Any trouble when saving data. Call the administrator.";
        content.title = "Error!";
        content.icon = "fas fa-exclamation-circle";

        $.notify(content, {
          type: "danger",
          placement: {
            from: "bottom",
            align: "right",
          },
          time: 1000,
          delay: 2000,
        });
      }, 3000);
    },
  });
}

function submit_delete() {
  $.ajax({
    url: "mst_alarm_information/delete",
    data: {
      id: $("#id_hapus").val(),
    },
    method: "POST",
    dataType: "JSON",
    beforeSend: function () {
      $("#btnSubmitDelete").hide();
      $("#btnSubmitDeleteLoader").show();
    },
    success: function (response) {
      setTimeout(function () {
        show_notif(response);
        $("#modalDelete").modal("hide");
        refresh_table();
      }, 3000);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      setTimeout(function () {
        $("#btnSubmitDelete").show();
        $("#btnSubmitDeleteLoader").hide();
        var content = {};

        content.message =
          "Failed! Any trouble when deleting data. Call the administrator.";
        content.title = "Error!";
        content.icon = "fas fa-exclamation-circle";

        $.notify(content, {
          type: "danger",
          placement: {
            from: "bottom",
            align: "right",
          },
          time: 1000,
          delay: 2000,
        });
      }, 3000);
    },
  });
}

function show_form_value(alarm_id) {
  $.ajax({
    url: "mst_alarm_information/view",
    data: {
      id: alarm_id,
    },
    method: "POST",
    dataType: "JSON",
    success: function (data) {
      $("#alarm_id").val(data.mst_alarm_information_id);
      $("#alarm_name").val(data.alarm_name);
    },
  });
}

function reset_form() {
  // Reset Button Save
  $("#btnSubmit").show();
  $("#btnSubmitLoader").hide();

  //Reset Form
  $("#formModalAdd").find("label").removeClass("text-danger");
  $("#formModalAdd").find("label").addClass("text-primary");
  $("#formModalAdd").find(".form-control").removeClass("border-danger");
  $(".error-message").empty();
}

function show_error_validation(response) {
  for (var i = 0; i < response.field.length; i++) {
    // Untuk Label
    $('[for ="' + response.field[i] + '" ]').removeClass("text-primary");
    $('[for ="' + response.field[i] + '" ]').addClass("text-danger");

    // Untuk Input text
    $('[name ="' + response.field[i] + '" ]').addClass("border-danger");
    $('[name="' + response.field[i] + '"]')
      .next()
      .text(response.message[i]);
  }
}

function show_notif(response) {
  var content = {};

  content.message = response.message;
  content.title = response.title;
  if (response.status) {
    var state = "success";
    content.icon = "fas fa-thumbs-up";
  } else {
    var state = "danger";
    content.icon = "fas fa-exclamation-circle";
  }

  $.notify(content, {
    type: state,
    placement: {
      from: "bottom",
      align: "right",
    },
    time: 1000,
    delay: 2000,
  });
}
