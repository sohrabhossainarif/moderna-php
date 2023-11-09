<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<script src="<?= url() ?>/assets/js/jquery.js"></script>
<script src="<?= url() ?>/assets/js/popper.js"></script>
<script src="<?= url() ?>/assets/js/bootstrap.js"></script>
<script src="<?= url() ?>/assets/js/perfect-scrollbar.js"></script>

<script src="<?= url() ?>/assets/js/menu.js"></script>
<script src="<?= url() ?>/assets/js/apexcharts.js"></script>
<script src="<?= url() ?>/assets/js/main.js"></script>
<script src="<?= url() ?>/assets/js/dashboards-analytics.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- text editor -->
<script>
    $('.text-editor').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 100,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>
</body>

</html>
