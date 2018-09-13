
    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
	<!-- Daterange Picker -->
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../aset/plugins/select2/select2.full.min.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		$('#Tanggal_Lahir,#Tanggal,#Tanggal1,#Tanggal2,#Tanggal3,#Tanggal4,#Tanggal5').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			format: 'YYYY-MM-DD'
		});
		
		  // Data Table
        $("#data").dataTable({
			scrollX: true,
			bPaginate: true,
          bLengthChange: true,
          bFilter: true,
          bSort: true,
          bInfo: true,
          bAutoWidth: false
		});		
      });
    </script>

    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": true,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          scrollX: true,
          "bAutoWidth": false
        });
      });
    </script>	
 

	
	<!-- Date Time Picker -->
	<script>
		$(function (){
			$('#Jam_Mulai').datetimepicker({
				format: 'HH:mm'
			});
			
			$('#Jam_Selesai').datetimepicker({
				format: 'HH:mm'
			});
		});
	</script>
	
	<!-- Javascript Edit--> 
	<script type="text/javascript">
		$(document).ready(function () {
		
		// Dosen
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "dosen_modal_edit.php",
					type: "GET",
					data : {NIP: m,},
					success: function (ajaxData){
					$("#ModalEditDosen").html(ajaxData);
					$("#ModalEditDosen").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Admin
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "admin_modal_edit.php",
					type: "GET",
					data : {kode_admin: m,},
					success: function (ajaxData){
					$("#ModalEditAdmin").html(ajaxData);
					$("#ModalEditAdmin").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Mahasiswa
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "mahasiswa_modal_edit.php",
					type: "GET",
					data : {NIM: m,},
					success: function (ajaxData){
					$("#ModalEditMahasiswa").html(ajaxData);
					$("#ModalEditMahasiswa").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Ruangan
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "ruangan_modal_edit.php",
					type: "GET",
					data : {Kode_Ruangan: m,},
					success: function (ajaxData){
					$("#ModalEditRuangan").html(ajaxData);
					$("#ModalEditRuangan").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Kelas
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "kelas_modal_edit.php",
					type: "GET",
					data : {Kode_Kelas: m,},
					success: function (ajaxData){
					$("#ModalEditKelas").html(ajaxData);
					$("#ModalEditKelas").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Jurusan
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jurusan_modal_edit.php",
					type: "GET",
					data : {Kode_Jurusan: m,},
					success: function (ajaxData){
					$("#ModalEditJurusan").html(ajaxData);
					$("#ModalEditJurusan").modal('show',{backdrop: 'true'});
					}
				});
			});



		// Siswa
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "siswa1_modal_edit.php",
					type: "GET",
					data : {NIS: m,},
					success: function (ajaxData){
					$("#ModalEditSiswa").html(ajaxData);
					$("#ModalEditSiswa").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Pelanggaran
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "pelanggaran_modal_edit.php",
					type: "GET",
					data : {Kode_Pelanggaran: m,},
					success: function (ajaxData){
					$("#ModalEditPelanggaran").html(ajaxData);
					$("#ModalEditPelanggaran").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Pelanggaran Siswa
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "pelanggaran_siswa_modal_edit.php",
					type: "GET",
					data : {Pelanggaran_Siswa_Id: m,},
					success: function (ajaxData){
					$("#ModalEditPelanggaranSiswa").html(ajaxData);
					$("#ModalEditPelanggaranSiswa").modal('show',{backdrop: 'true'});
					}
				});
			});


		// Bimbingan
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "bimbingan_modal_edit.php",
					type: "GET",
					data : {Bimbingan_Siswa_Id: m,},
					success: function (ajaxData){
					$("#ModalEditBimbingan").html(ajaxData);
					$("#ModalEditBimbingan").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Sanksi
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "sanksi_modal_edit.php",
					type: "GET",
					data : {Kode_Sanksi: m,},
					success: function (ajaxData){
					$("#ModalEditSanksi").html(ajaxData);
					$("#ModalEditSanksi").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Ortu
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "ortu_modal_edit.php",
					type: "GET",
					data : {Kode_Ortu: m,},
					success: function (ajaxData){
					$("#ModalEditOrtu").html(ajaxData);
					$("#ModalEditOrtu").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Guru
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "guru_modal_edit.php",
					type: "GET",
					data : {NIP: m,},
					success: function (ajaxData){
					$("#ModalEditGuru").html(ajaxData);
					$("#ModalEditGuru").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Matakuliah
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "matakuliah_modal_edit.php",
					type: "GET",
					data : {Kode_Matakuliah: m,},
					success: function (ajaxData){
					$("#ModalEditMatakuliah").html(ajaxData);
					$("#ModalEditMatakuliah").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jurusan
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jurusan_modal_edit.php",
					type: "GET",
					data : {Kode_Jurusan: m,},
					success: function (ajaxData){
					$("#ModalEditJurusan").html(ajaxData);
					$("#ModalEditJurusan").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jenjang
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jenjang_modal_edit.php",
					type: "GET",
					data : {Kode_Jenjang: m,},
					success: function (ajaxData){
					$("#ModalEditJenjang").html(ajaxData);
					$("#ModalEditJenjang").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jadwal
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jadwal_modal_edit.php",
					type: "GET",
					data : {Id_Jadwal: m,},
					success: function (ajaxData){
					$("#ModalEditJadwal").html(ajaxData);
					$("#ModalEditJadwal").modal('show',{backdrop: 'true'});
					}
				});
			});
		});
	</script>
	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>