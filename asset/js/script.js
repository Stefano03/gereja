$(function() {
	// bagian form ANAK USER
	$('.tombolTambahDataAnakUser').on('click', function()
		{
			$('#formModalLabelAnakUser').html('Tambah Data Sekolah Minggu');
			$('.modal-footer button[type=submit]').html('Tambah Data');

				$('#nia').val('');
				$('#nama').val('');
				$('#jenis_kelamin').val('');
				$('#tanggal_lahir').val('');
				$('#anak_ke').val('');
				$('#pendidikan').val('');
				$('#ayah').val('');
				$('#ibu').val('');
				$('#id').val('');
		})

	$('.tampilModalUbahAnakUser').on('click', function() {
	
		$('#formModalLabelAnakUser').html('Ubah Data Anak');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.modal-body form').attr('action', 'http://localhost/stefano/jemaat/editanaksm');

		const id = $(this).data('id');

		$.ajax({
			dataType: 'json',
			method: 'POST',
			url:'http://localhost/stefano/jemaat/geteditanaksm',
			data: {id : id},
			success: function(data) {
				$('#nia').val(data.nia);
				$('#nama').val(data.nama);
				$('#jenis_kelamin').val(data.jenis_kelamin);
				$('#tanggal_lahir').val(data.tanggal_lahir);
				$('#anak_ke').val(data.anak_ke);
				$('#pendidikan').val(data.pendidikan);
				$('#ayah').val(data.ayah);
				$('#ibu').val(data.ibu);
				$('#id').val(data.id);
			}
	
		});


	});

});
