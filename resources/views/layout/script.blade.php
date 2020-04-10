
<!-- Just Gage -->
<script>
    window.onload = function () {
        var g1 = new JustGage({
            id: "g1",
            value: getRandomInt(0, 100),
            min: 0,
            max: 100,
            title: "Big Fella",
            label: "pounds"
        });
        setInterval(function () {
            g1.refresh(getRandomInt(0, 100));
        }, 2500);
    };
</script>
<!-- container-scroller -->
<script src="{{ URL::asset('../resources/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ URL::asset('../resources/vendors/d3/d3.min.js') }}"></script>
<!--  -->
<script src="{{ URL::asset('../resources/vendors/c3/c3.js') }}"></script>
<script src="{{ URL::asset('../resources/js/c3.js') }}"></script>
<script src="{{ URL::asset('../resources/js/tabs.js') }}"></script>

<script src="{{ URL::asset('../resources/vendors/justgage/raphael-2.1.4.min.js') }}"></script>
<script src="{{ URL::asset('../resources/vendors/justgage/justgage.js') }}"></script>
<!-- End Just Gage -->

<!-- Alerts Popups -->
<script src="{{ URL::asset('../resources/vendors/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('../resources/vendors/jquery.avgrund/jquery.avgrund.min.js') }}"></script>
<script src="{{ URL::asset('../resources/js/alerts.js') }}"></script>
<script src="{{ URL::asset('../resources/js/avgrund.js') }}"></script>
<!-- End Alerts Popups -->
<!-- Dragula -->
<script src="{{ URL::asset('../resources/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ URL::asset('../resources/vendors/dragula/dragula.min.js') }}"></script>
<script src="{{ URL::asset('../resources/js/dragula.js') }}"></script>
<!-- End Dragula -->
<!-- Notifications -->
<script src="{{ URL::asset('../resources/vendors/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
<script src="{{ URL::asset('../resources/js/toastDemo.js') }}"></script>
<script src="{{ URL::asset('../resources/js/desktop-notification.js') }}"></script>
<!-- End Notifications -->
<!-- Charts -->
<script src="{{ URL::asset('../resources/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ URL::asset('../resources/js/chart.js') }}"></script>
<!-- End Charts -->
<!-- Table -->
<script src="{{ URL::asset('../resources/vendors/x-editable/bootstrap-editable.min.js') }}"></script>
<script src="{{ URL::asset('../resources/vendors/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('../resources/vendors/inputmask/jquery.inputmask.bundle.js') }}"></script>
<script src="{{ URL::asset('../resources/vendors/inputmask/inputmask.binding.js') }}"></script>
<script src="{{ URL::asset('../resources/vendors/inputmask/phone-be.js') }}"></script>
<script src="{{ URL::asset('../resources/vendors/inputmask/phone-ru.js') }}"></script>
<script src="{{ URL::asset('../resources/vendors/inputmask/phone.js') }}"></script> 
<script src="{{ URL::asset('../resources/js/x-editable.js') }}"></script>
<!-- End Table -->
<!-- Validation Form -->
<script src="{{ URL::asset('../resources/vendors/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('../resources/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ URL::asset('../resources/js/form-validation.js') }}"></script>
<script src="{{ URL::asset('../resources/js/bt-maxLength.js') }}"></script>
<!-- End Validation Form -->