 $(document).ready(function () {
        $('#myTab li').click(function () {
            $(this).find('a').tab('show');
            // $(this).tab('show');
            $(this).closest('ul').find('input[type="checkbox"]').prop('checked', '');
            $(this).closest('li').find('input[type="checkbox"]').prop('checked', 'checked');
        });
    });

    function activate(on, arr)
    {
        for (i = 0; i < arr.length; i++) {
            document.getElementById(arr[i]).style.display = 'none';

        }
        document.getElementById(on).style.display = 'block';

    }