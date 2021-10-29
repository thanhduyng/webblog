$(document).ready(function() {
    $('#lstIDCategory').change(function() {
        idCategory = $(this).val();
        $.get('admin/ajax/type-product/' + idCategory, function(data) {
            $('#lstIDType').html(data);
        });
    });

    $('#btnAddImage').click(function() {
        $('#divImage').append(
            '  <div class="col-sm-9"><div style="margin-left: 286px;" class="form-group"><input type="file" id="filImage[]" name="filImage[]" placeholder="nhập link ảnh" class="col-xs-10 col-sm-7" required=""></div>'
        );
    });
});