<script>
    $('.fileUploadForm').ajaxForm({
        beforeSend: function() {
            var percentage = '0';
            $('.upload-progress').show();
            $('.progress .progress-bar').css("width", percentage + '%', function() {
                return $(this).attr("aria-valuenow", percentage) + "%";
            });
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentage = percentComplete;
            $('.progress .progress-bar').css("width", percentage + '%', function() {
                return $(this).attr("aria-valuenow", percentage) + "%";
            });
            $('.do-not-leave').show();
        },
        complete: function(xhr) {
            $(".do-not-leave").fadeOut(1500);
            if (xhr.responseJSON) {
                $('#error').html("Error : " + xhr.responseJSON.message);
            }
        }
    });

    //tooltip
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"
integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>
