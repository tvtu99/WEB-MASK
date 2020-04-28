$(document).ready(function() {
    $('#HieuKhauTrang').on('change', function() {
        var HieuKhauTrangID = $(this).val();
        $.ajax({
            method: "POST",
            url: "ajax.php",
            data: { id: HieuKhauTrangID },
            dataType: "html",
            success: function(data) {
                $("#TenKhauTrang").html(data);

            },
            error: function() {
                console.writle('Lỗi');
            }
        });
    });
    $('#HieuKhauTrang1').on('change', function() {
        var HieuKhauTrangID1 = $(this).val();
        $.ajax({
            method: "POST",
            url: "ajax.php",
            data: { hktid: HieuKhauTrangID1 },
            dataType: "html",
            success: function(data) {
                $("tbody").html(data);

            },
            error: function() {
                console.writle('Lỗi');
            }
        });
    });
});