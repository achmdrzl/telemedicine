<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © RSUD Kabupaten Jombang</p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->

<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="<?= base_url('assets/admin/vendor/global/global.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/js/custom.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/js/deznav-init.js') ?>"></script>
<!-- <script src="<?= base_url('assets/vendor/admin/bootstrap-datetimepicker/js/moment.js') ?>"></script>
<script src="<?= base_url('assets/vendor/admin/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') ?>"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Chart piety plugin files -->
<script src="<?= base_url('assets/admin/vendor/peity/jquery.peity.min.js') ?>"></script>

<!-- Dashboard 1 -->
<script src="<?= base_url('assets/admin/vendor/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script>
    (function($) {
        var table = $('#example5').DataTable({
            searching: false,
            paging: true,
            select: false,
            //info: false,         
            lengthChange: false

        });
        $('#example tbody').on('click', 'tr', function() {
            var data = table.row(this).data();

        });
    })(jQuery);

    function kirimpesanselesai(el) {
        let no = $(el).data("no");
        let psn = $(el).data("pesan");
        $.ajax({
            url: "http://127.0.0.1:4774/kirimpesan",
            method: "POST",
            cache: false,
            dataType: "json",
            data: {
                nomor: no,
                pesan: psn
            },
            success: function(x) {
                let data = JSON.parse(JSON.stringify(x));
                alert(data.status);
            },
            error: function(c) {
                alert("Pesan Gagal Dikirim");
            }
        });
    }
    
    function kirimpesantolak(el) {
        let no = $(el).data("no");
        let psn = $(el).data("pesan_tolak");
        $.ajax({
            url: "http://127.0.0.1:4774/kirimpesan",
            method: "POST",
            cache: false,
            dataType: "json",
            data: {
                nomor: no,
                pesan: psn
            },
            success: function(x) {
                let data = JSON.parse(JSON.stringify(x));
                alert(data.status);
            },
            error: function(c) {
                alert("Pesan Gagal Dikirim");
            }
        });
    }

    function kirimpesanotp(el) {
        let no = $(el).data("no");
        let psn = $(el).data("pesan");
        $.ajax({
            url: "http://127.0.0.1:4774/kirimpesan",
            method: "POST",
            cache: false,
            dataType: "json",
            data: {
                nomor: no,
                pesan: psn
            },
            success: function(x) {
                let data = JSON.parse(JSON.stringify(x));
                alert(data.status);
            },
            error: function(c) {
                alert("Pesan Gagal Dikirim");
            }
        });
    }
    
    function kirimpesanzoom(el) {
              let no = $(el).data("no");
              let psn = $(el).data("pesan");
              $.ajax({
                  url: "http://127.0.0.1:4774/kirimpesan",
                  method: "POST",
                  cache: false,
                  dataType: "json",
                  data: {
                      nomor: no,
                      pesan: psn
                  },
                  success: function(x) {
                      let data = JSON.parse(JSON.stringify(x));
                      alert(data.status);
                  },
                  error: function(c) {
                      alert("Pesan Gagal Dikirim");
                  }
              });
            }
</script>
</body>

</html>