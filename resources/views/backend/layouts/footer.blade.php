</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('backend/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('backend/vendors/flot/jquery.flot.js')}}"></script>
<script src="{{asset('backend/vendors/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('backend/vendors/flot/jquery.flot.categories.js')}}"></script>
<script src="{{asset('backend/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
<script src="{{asset('backend/vendors/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('backend/vendors/flot/jquery.flot.pie.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('backend/js/off-canvas.js')}}"></script>
<script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('backend/js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('backend/js/dashboard.js')}}"></script>
<script src="{{asset('backend/js/file-upload.js')}}"></script>
<script src="{{ asset('toastr/toastr.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>
<!-- End custom js for this page -->
</body>

</html>