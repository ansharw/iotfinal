// function filterGlobal() {
// 	$("#manageTable")
// 		.DataTable()
// 		.search($("#global_filter").val())
// 		.draw();
// }

$(document).ready(function () {
	$("#managePrestasiNav").addClass("active");

	// load_data();

	// function load_data(query) {
	// 	$.ajax({
	// 		url: base_url + 'prestasi/fetch_prestasi',
	// 		method: "POST",
	// 		data: {query: query},
	// 		success: function (data) {
	// 			$('#result').html(data);
	// 		}
	// 	})
	// }

	// $('#global_filter').keyup(function () {
	// 	var search = $(this).val();
	// 	if (search != '') {
	// 		load_data(search);
	// 	} else {
	// 		load_data();
	// 	}
	// });

	// manageTable = $("#manageTable").DataTable({
	// 	paging: true,
	// 	processing: true,
	// 	serverSide: true,
	// 	responsive: true,
	// 	deferRender: true,
	// 	language: {
	// 		lengthMenu: "Display _MENU_ data per page",
	// 		zeroRecords: "Data tidak ditemukan",
	// 		info: "Menampilkan halaman _PAGE_ dari _PAGES_",
	// 		infoEmpty: "Data tidak ada dalam database"
	// 	},
	// 	order: [],
	// 	ajax: {
	// 		url: base_url + "prestasi/fetchPrestasiDataa",
	// 		type: "POST",
	// 		data: function (data) {
	// 			data.jurusan = $("#jurusan").val();
	// 			data.kategori = $("#kategori").val();
	// 			data.tahun = $("#tahun").val();
	// 		}
	// 	},
	// 	dom:
	// 		"<'row'<'col-sm mr-auto col-md-9'l><'col-sm ml-auto col-md-3'B>>" +
	// 		"<'row'<'col-sm-12'tr>>" +
	// 		"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
	// 	columnDefs: [
	// 		{
	// 			targets: [0, 1, 2, 3, 4, 5],
	// 			orderable: false
	// 		}
	// 	],
	// 	buttons: [
	// 		{
	// 			extend: "pdfHtml5",
	// 			text:
	// 				'<i class="fas fa-file-pdf aria-hidden="true" style="margin-left: 3px"></i> Print pdf',
	// 			className: "btn btn-icon icon-left btn-danger",
	// 			filename: "Rekapitulasi Prestasi",
	// 			orientation: 'landscape',
	// 			pageSize: 'A4',
	// 			exportOptions: {
	// 				modifier: {
	// 					search: "applied",
	// 					order: "applied",
	// 					page: "applied"
	// 				},
	// 				columns: [1, 2, 3, 4, 5, 6]
	// 			},
	// 			customize: function (doc) {
	// 				doc.defaultStyle.alignment = 'left';
	// 				doc.styles.tableHeader.alignment = 'center';
	// 				doc.styles.tableHeader.fontSize = 14;
	// 			}
	// 		},
	// 		{
	// 			extend: "excel",
	// 			text:
	// 				'<i class="fas fa-file-excel" aria-hidden="true"></i> Print Excel',
	// 			className: "btn btn-icon icon-left btn-success",
	// 			filename: "Rekapitulasi Prestasi",
	// 			exportOptions: {
	// 				modifier: {
	// 					search: "applied",
	// 					order: "applied",
	// 					page: "applied"
	// 				},
	// 				columns: [1, 2, 3, 4, 5]
	// 			}
	// 		}
	// 	],
	// 	columns: [
	// 		{
	// 			bVisible: true,
	// 			aTargets: [0]
	// 		}, // data 0
	// 		null, // data 1
	// 		null, // data 2
	// 		null, // data 3
	// 		null, // data 4
	// 		{
	// 			mRender: function (data, type, row) {
	// 				var status =
	// 					row[5] == 1
	// 						? '<span class="badge badge-success">Valid</span>'
	// 						: '<span class="badge badge-danger">Invalid</span>';
	// 				return status;
	// 			}
	// 		}, // data 5
	// 		{
	// 			mRender: function (data, type, row) {
	// 				var bindHtml = "";
	// 				bindHtml +=
	// 					'<a href="' +
	// 					base_url +
	// 					"prestasi/view/" +
	// 					row[6] +
	// 					'" class="btn btn-icon btn-sm btn-success"><i style="margin-left: 3px" class="fas fa-eye"></i></a>';

	// 				bindHtml +=
	// 					'<a href="' +
	// 					base_url +
	// 					"prestasi/update/" +
	// 					row[6] +
	// 					'" class="btn btn-icon btn-sm btn-primary"><i style="margin-left: 3px" class="fas fa-edit"></i></a>';

	// 				bindHtml +=
	// 					'<a href="' +
	// 					base_url +
	// 					"prestasi/delete/" +
	// 					row[6] +
	// 					'" class="hapus btn btn-icon btn-sm btn-danger"><i style="margin-left: 3px" class="fas fa-trash-alt"></i></a>';
	// 				return bindHtml;
	// 			}
	// 		} // data 6
	// 	]
	// });

	// $("#btn-filter").click(function () {
	// 	//button filter event click
	// 	manageTable.ajax.reload(); //just reload table
	// });
	// $("#btn-reset").click(function () {
	// 	//button reset event click
	// 	$("#form-filter")[0].reset();
	// 	manageTable.ajax.reload(); //just reload table
	// });

	// //button enter
	// $("#tahun").on("keyup keypress", function (e) {
	// 	var keyCode = e.keyCode || e.which;
	// 	if (keyCode === 13) {
	// 		e.preventDefault();
	// 		return false;
	// 	}
	// });

	// $("input.global_filter").on("keyup click", function() {
	// 	var v = $(this).val();
	// 	filterGlobal(v);
	// });

	// manageTable = $("#manageTable").DataTable({
	// 	// ajax: base_url + "prestasi/fetchPrestasiData",
	// 	ajax: {
	// 		url: base_url + "prestasi/fetchPrestasiData",
	// 	},
	// 	order: [],
	// 	processing: true,
	// 	serverSide: true,
	// 	responsive: true,
	// 	deferRender: true,
	// 	dom:
	// 		"<'row'<'col-sm mr-auto col-md-9'l><'col-sm ml-auto col-md-3'B>>" +
	// 		"<'row'<'col-sm-12'tr>>" +
	// 		"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
	// 	buttons: [
	// 		{
	// 			extend: "pdf",
	// 			text: '<i class="fas fa-file-pdf aria-hidden="true"></i> Print pdf',
	// 			className: "btn btn-icon icon-left btn-danger",
	// 			exportOptions: {
	// 				modifier: {
	// 					search: "applied",
	// 					order: "applied",
	// 					page: "applied"
	// 				},
	// 				columns: [0, 1, 2, 3, 4, 5, 6]
	// 			}
	// 		},
	// 		{
	// 			extend: "excel",
	// 			text: '<i class="fas fa-file-excel aria-hidden="true"></i> Print Excel',
	// 			className: "btn btn-icon icon-left btn-success",
	// 			exportOptions: {
	// 				modifier: {
	// 					search: "applied",
	// 					order: "applied",
	// 					page: "applied"
	// 				},
	// 				columns: [0, 1, 2, 3, 4, 5, 6]
	// 			}
	// 		}
	// 	]
	// });
	// $("input.global_filter").on("keyup click", function() {
	// 	filterGlobal();
	// });
	// $("#manageTable tbody").on("click", "td.details-control", function() {
	// 	var tr = $(this).closest("tr");
	// 	var row = table.row(tr);

	// 	if (row.child.isShown()) {
	// 		// This row is already open - close it
	// 		row.child.hide();
	// 		tr.removeClass("shown");
	// 	} else {
	// 		// Open this row
	// 		row.child(format(row.data())).show();
	// 		tr.addClass("shown");
	// 	}
	// });
});

// manageTable = $("#manageTable").DataTable({
// 	paging: true,
// 	processing: false,
// 	serverSide: true,
// 	order: [],
// 	ajax: {
// 		url: base_url + "prestasi/getAllPrestasi",
// 		type: "POST",
// 		data: function(data) {
// 			data.prestasi_kategori = $("#kategori_filter").val();
// 			data.prestasi_jurusan = $("#jurusan_filter").val();
// 		}
// 	},
// 	dom:
// 		"<'row'<'col-sm mr-auto'l><'col-auto'B>>" +
// 		"<'row'<'col-sm-12'tr>>" +
// 		"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
// 	buttons: [
// 		// {
// 		// 	extend: "excel",
// 		// 	text:
// 		// 		'<i class="far fa-file-excel" aria-hidden="true"></i> Excel Export',
// 		// 	className: "btn btn-icon icon-left btn-success",
// 		// 	filename: "members",
// 		// 	title: "",
// 		// 	exportOptions: {
// 		// 		modifier: {
// 		// 			search: "applied",
// 		// 			order: "applied",
// 		// 			page: "current"
// 		// 		},
// 		// 		columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
// 		// 	}
// 		// },
// 		{
// 			extend: "pdf",
// 			text: '<i class="far fa-file-pdf" aria-hidden="true"></i> PDF Export',
// 			className: "btn btn-icon icon-left btn-danger",
// 			filename: "members",
// 			title: "",
// 			exportOptions: {
// 				modifier: {
// 					search: "applied",
// 					order: "applied",
// 					page: "current"
// 				},
// 				columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
// 			}
// 		}
// 	],
// 	lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
// 	columns: [
// 		{
// 			bVisible: false,
// 			aTargets: [0]
// 		},
// 		null,
// 		null,
// 		null,
// 		null,
// 		null,
// 		{
// 			// render action button
// 			mRender: function(data, type, row) {
// 				var bindHtml = "";
// 				bindHtml +=
// 					'<a data-toggle="modal" data-target="#dispaly-employee" href="javascript:void(0);" title="View Employee" class="display-emp ml-1 btn-ext-small btn btn-sm btn-info"  data-geteid="' +
// 					row[0] +
// 					'"><i class="fas fa-eye"></i></a>';
// 				bindHtml +=
// 					'<a data-toggle="modal" data-target="#update-employee" href="javascript:void(0);" title="Edit Employee" class="update-emp-details ml-1 btn-ext-small btn btn-sm btn-primary"  data-getueid="' +
// 					row[0] +
// 					'"><i class="fas fa-edit"></i></a>';
// 				bindHtml +=
// 					'<a data-toggle="modal" data-target="#delete-employee" href="javascript:void(0);" title="Delete Employee" class="delete-em-details ml-1 btn-ext-small btn btn-sm btn-danger" data-getdeid="' +
// 					row[0] +
// 					'"><i class="fas fa-trash"></i></a>';
// 				return bindHtml;
// 			}
// 		}
// 	],
// 	fnCreatedRow: function(nRow, aData, iDataIndex) {
// 		$(nRow).attr("id", aData[0]);
// 	}
// });

// function filterGlobar(v) {
// 	$('#manageTable').DataTable().search(
// 		v,
// 		false,
// 		false
// 		).draw();
// 	)
// }

// $('input.global_filter').on('keyup click', function() {
// 	var v = $(this).val();
// 	filterGlobal(v);
// });
// $('input.column_filter').on('keyup click', function() {
// 	$('#manageTable').DataTable().ajax.reload();
// });

// manageTable = $("#manageTable").DataTable({
// 	processing: true,
// 	serverSide: true,
// 	order: [],
// 	ajax: {
// 		url: base_url + "prestasi/fetchPrestasiDataa",
// 		type: "POST",
// 		data: function(data) {
// 			data.kategori_nama = $("#kategori_prestasi").val();
// 			data.jurusan_nama = $("#jurusan_prestasi").val();
// 		}
// 	},
// 	columnDefs: [{
// 		targets: [0],
// 		orderable: false,
// 	},],
// });
// $('#btn-filter').click(function() { //button filter event click
// 	manageTable.ajax.reload(); //just reload table
// });
// $('#btn-reset').click(function() { //button reset event click
// 	$('#form-filter')[0].reset();
// 	manageTable.ajax.reload(); //just reload table
// });
// });

// $(".hapus").on("click", function(e) {
// 	e.preventDefault();
// 	Swal.fire({
// 		title: "Hapus data!",
// 		text: "Data yang dihapus tidak dapat dikembalikan!",
// 		icon: "warning",
// 		showCancelButton: true,
// 		cancelButtonText: "Cancel",
// 		confirmButtonText: "Hapus Data!"
// 	}).then(result => {
// 		if (result.value) {
// 			Swal.fire("Deleted!", "Data telah dihapus.", "success");
// 			// For more information about handling dismissals please visit
// 			// https://sweetalert2.github.io/#handling-dismissals
// 		} else if (result.dismiss === Swal.DismissReason.cancel) {
// 			Swal.fire("Cancelled", "Data aman, terima kasih", "error");
// 		}
// 	});
// });
