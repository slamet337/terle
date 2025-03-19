<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    2024
                    &copy; Copyright
                    <a href="" class="font-weight-bold" target="_blank">Creative Software Engineer</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</main>

<script>
$(document).ready(function() {
    const modalAdd = $(".modal[add=\"true\"]");
    const modalEdit = $(".modal[edit=\"true\"]");
    if (modalAdd.length !== 0) {
        modalAdd.modal('show');
    }

    if (modalEdit.length !== 0) {
        modalEdit.modal('show');
    }
});
</script>

<script>
function sabarki() {
    Swal.fire(
        'Upss',
        'Halaman ini Masi proses Pengembangan',
        'warning',
    )
}

function btnhapus(kode) {
    Swal.fire({
        title: "Apa anda yakin?",
        text: "Data ini akan dihapus secara permanen!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Iya, hapus!",
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = '<?= base_url('penyakit/delete/') ?>' + kode;
        }
    });
}

<?php
  if (isset($this->session->swetalert)) {
  ?>
Swal.fire(<?= $this->session->swetalert ?>);
<?php
  }
  ?>
</script>

<!-- Bootstrap -->
<script src="<?= base_url('') ?>assets/admin/js/core/popper.min.js"></script>
<script src="<?= base_url('') ?>assets/admin/js/core/bootstrap.min.js"></script>
<script src="<?= base_url('') ?>assets/admin/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('') ?>assets/admin/js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?= base_url('') ?>assets/admin/js/plugins/chartjs.min.js"></script>

<!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->

<script src="<?= base_url('') ?>assets/admin/js/argon-dashboard.min.js?v=2.0.4"></script>
<!-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7638eabbb8eb4804","version":"2022.10.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script> -->
</body>

</html>