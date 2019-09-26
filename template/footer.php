</div>
    </div>
</div>

</div>
<!--/#app -->

<script src="<?= base_url('assets/js/app.js'); ?>"></script>
<script src="<?= base_url('config/config.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

<script type="text/javascript">
	$(document).ready( function () {
	    $('.dataTable').DataTable();
	} );

	$("#logout").click(function (event) {
    $.ajax({
        type: 'POST',
        url: base_url + 'config/logout',
        data: '',
        cache: false,
        async: true,
        success: function (data) {
            if (data) {
                pesan_berhasil_swal('Berhasil!', 'Berhasil Logout!', base_url);
            } else {
                pesan_error('Gagal!', 'Logout Gagal!');
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            pesan_error("Gagal!", errorThrown);
        }
    });
    event.preventDefault(); //Prevent the default submit
    return false; //stop
});
</script>


<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

<!-- Mirrored from xvelopers.com/demos/html/paper-panel/panel-page-dashboard9.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Sep 2019 16:23:15 GMT -->
</html>
