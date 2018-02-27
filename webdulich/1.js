// Bắt đầu JS của trang danh mục sản phẩm
	// Start ajax add_new_category
        $('.add_cate').click( function(){
            //some thing in here.
            if($('#name_add').val()==''){
                $('#loi_ten').css('display', 'block');
                return false;
            }else if($('#content_add').val()==''){
                $('#loi_mota').css('display', 'block');
                $('#loi_ten').css('display', 'none');
                return false;
            }
            else{
                $('#loi_mota').css('display', 'none');
            }
            $.ajax({
                url: 'http://localhost:8080/webdulich/index.php/danhmuc/them_danh_muc',
                type: 'POST',
                dataType: 'json',
                data: {
                    name: $('#name_add').val(),
                    content: $('#content_add').val(),
                    status: $('#status_add').val()
                      }
            })
            .always(function() {
                $('#reload').load(location.href + " #reload>*");
            });
            $('#name').val('');
            $('#content').val('');
            $('#status').val(1);
            return true;
        });
    // End ajax add_new_category
    // Start ajax delete_category
    $('table').on('click', '.xoa_cate', function(event) {
        
            xoa = $(this).parent().parent();
            var parentOjb = $(this).closest('.rename');
            var id = parentOjb.find('.id_view').val();            
            $.ajax({
                url: 'http://localhost:8080/webdulich/index.php/danhmuc/xoa_danh_muc',
                type: 'POST',
                dataType: 'json',
                data: {id: id}
            })
            xoa.remove();
    
    });
    // End ajax delete_category
    // Start ajax add_new_category
    $('table').on('click', '.sua_cate', function(event) {
        xoa = $(this).parent().parent();
        var parentOjb = $(this).closest('.rename');
        var id = parentOjb.find('.id_view').val();
        var name = parentOjb.find('.name_view').val();
        var content = parentOjb.find('.content_view').val();
        var status = parentOjb.find('.status_view').val();
        console.log(id);
        console.log(name);
        console.log(content);
        console.log(status);
        $.ajax({
            url: 'http://localhost:8080/webdulich/index.php/danhmuc/sua_danh_muc',
            type: 'POST',
            dataType: 'json',
            data: {id: id,
                name: name,
                content: content,
                status: status
                }
            })
    });
    // End ajax add_new_category
 // Kết thúc JS của trang danh mục sản phẩm