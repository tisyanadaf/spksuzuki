<script src="{{asset('dist/plugins/formwizard/jquery-steps.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script>
    $(function() {
        $('#tbl_hasil').DataTable();
    })
</script>
<script>
    var form = $('#demo');
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
    });
    form.steps({
        onChange: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinish: function() {
            $('#demo').submit();
        }
    });
</script>