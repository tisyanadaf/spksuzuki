<script src="{{asset('dist/plugins/formwizard/jquery-steps.js')}}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script> -->
<script>
    $(function() {
        $('#tbl_hasil').DataTable();
    })
</script>
<script>
    $('#demo').steps({
        onFinish: function() {
            alert('Wizard Completed');
        }
    });
</script>