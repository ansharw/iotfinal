$(document).ready(function() {
    $("#managePertukaranNav").addClass("active");
    
    manageTable = $("#manageTable").DataTable({
		paging: true,
		processing: true,
		serverSide: true,
		responsive: true,
		deferRender: true,
		language: {
			lengthMenu: "Display _MENU_ data per page",
			zeroRecords: "Data tidak ditemukan",
			info: "Menampilkan halaman _PAGE_ dari _PAGES_",
			infoEmpty: "Data tidak ada dalam database"
		},
		order: [],
		ajax: {
			url: base_url + "pertukaran/fetchPertukaranDataa",
			type: "POST",
			data: function(data) {
				data.jurusan = $("#jurusan").val();
				data.kategori = $("#kategori").val();
				data.tahun = $("#tahun").val();
			}
		},
		dom:
			"<'row'<'col-sm mr-auto col-md-9'l><'col-sm ml-auto col-md-3'B>>" +
			"<'row'<'col-sm-12'tr>>" +
			"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
		columnDefs: [
			{
				targets: [0, 1, 2, 3, 4, 5, 6],
				orderable: false
			}
		],
		buttons: [
			{
				extend: "pdfHtml5",
				text:
					'<i class="fas fa-file-pdf aria-hidden="true" style="margin-left: 3px"></i> Print pdf',
				className: "btn btn-icon icon-left btn-danger",
				filename: "Rekapitulasi Prestasi",
				exportOptions: {
					modifier: {
						search: "applied",
						order: "applied",
						page: "applied"
					},
					columns: [1, 2, 3, 4, 5]
				}
			},
			{
				extend: "excel",
				text:
					'<i class="fas fa-file-excel" aria-hidden="true"></i> Print Excel',
				className: "btn btn-icon icon-left btn-success",
				filename: "Rekapitulasi Prestasi",
				exportOptions: {
					modifier: {
						search: "applied",
						order: "applied",
						page: "applied"
					},
					columns: [1, 2, 3, 4, 5]
				}
			}
		],
		columns: [
			{
				bVisible: true,
				aTargets: [0]
			}, // data 0
			null, // data 1
			null, // data 2
			null, // data 3
			null, // data 4
			{
				mRender: function(data, type, row) {
					var status = (row[5] == 1) ? '<span class="badge badge-success">Valid</span>' : '<span class="badge badge-danger">Invalid</span>';
					return status;
				}
			}, // data 5
			{
				mRender: function(data, type, row) {
					var bindHtml = "";
					bindHtml +=
						'<a href="' +
						base_url +
						"prestasi/view/" +
						row[6] +
						'" class="btn btn-icon btn-sm btn-success"><i style="margin-left: 3px" class="fas fa-eye"></i></a>';

					bindHtml +=
						'<a href="' +
						base_url +
						"prestasi/update/" +
						row[6] +
						'" class="btn btn-icon btn-sm btn-primary"><i style="margin-left: 3px" class="fas fa-edit"></i></a>';

					bindHtml +=
						'<a href="' +
						base_url +
						"prestasi/delete/" +
						row[6] +
						'" class="hapus btn btn-icon btn-sm btn-danger"><i style="margin-left: 3px" class="fas fa-trash-alt"></i></a>';
					return bindHtml;
				}
			} // data 6
		]
	});

	$("#btn-filter").click(function() {
		//button filter event click
		manageTable.ajax.reload(); //just reload table
	});
	$("#btn-reset").click(function() {
		//button reset event click
		$("#form-filter")[0].reset();
		manageTable.ajax.reload(); //just reload table
	});

	//button enter
	$("#tahun").on('keyup keypress', function(e) {
		var keyCode = e.keyCode || e.which;
		if (keyCode === 13) {
			e.preventDefault();
			return false;
		}
	});
});
