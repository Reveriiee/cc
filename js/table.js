$(document).ready(function () {
  $("#myTable").DataTable({
    responsive: true,
    autoWidth: false, // Set autoWidth to false
    lengthMenu: [
      [4, 5, 10],
      ["4", "5", "10"],
    ], // Mengembalikan opsi 20, 50, 80, dan 100
    language: {
      // Konfigurasi bahasa lainnya
      lengthMenu: "Tampilkan : _MENU_  per halaman",
      zeroRecords: "Tidak ditemukan data yang sesuai",
      info: "Menampilkan _PAGE_ dari _PAGES_ halaman",
      infoEmpty: "Tidak ditemukan data yang sesuai",
      infoFiltered: "(Disaring dari _MAX_ data keseluruhan)",
      search: "Cari : ",
      searchPlaceholder: "Masukkan kata kunci", // Menambahkan placeholder

      paginate: {
        previous: '<i class="ti ti-chevron-left"></i>',
        next: '<i class="ti ti-chevron-right"></i>',
      },
    },
  });
});
