$(document).ready(function () {
  $("#jumlah").val(0);
  $("#submit").prop("disabled", true);
  $("#barang").on("change", function () {
    let selectedBarang = $("#barang").val();

    switch (selectedBarang) {
      case "TV Samsung":
        $("#harga").val(3000000);
        break;

      case "TV LG":
        $("#harga").val(2500000);
        break;

      case "TV TCL":
        $("#harga").val(2000000);
        break;

      case "TV Hisens":
        $("#harga").val(1500000);
        break;

      default:
        $("#harga").val(0);
        break;
    }

    // console.log(selectedBarang);
  });
  $("#reset").on("click", function () {
    $("#totalHarga").val("");
    $("#diskon").val("");
    $("#totalBayar").val("");
    $("#bonus").val("");
  });

  $("#jumlah").on("keyup", function () {
    let jmlhBeli = $("#jumlah").val();

    // console.log(jmlhBeli);
    if (jmlhBeli > 0) {
      $("#submit").prop("disabled", false);
    }
  });
});
