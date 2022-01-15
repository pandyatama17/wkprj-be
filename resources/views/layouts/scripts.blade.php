<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $(document).on('click',".route-link",function (event) 
        {
            event.preventDefault();
            let url = $(this).attr('href');
           
            if (url != "#!") {
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "html",
                    success: function (response) {
                        $("#main-content").html(response);
                    }
                });
            } 
        })
    });
</script>