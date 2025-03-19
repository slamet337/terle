</div>
</div>
</div>
<footer class="py-4 bg-dark">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-light text-center text-xl-left">
                    2024
                    &copy; Copyright Yakuza
                    <!-- <a href="https://www.instagram.com/agrhi_/" class="font-weight-bold text-white" target="_blank">Creative Software Engineer</a> -->
                </div>
            </div>
        </div>

    </div>
</footer>
</div>
</body>

<script>
<?php
    if (isset($this->session->swetalert)) {
    ?>
Swal.fire(<?= $this->session->swetalert ?>);
<?php
    }
    ?>
</script>

</html>