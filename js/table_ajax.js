/**
 * Created by roger on 16-5-2.
 */

$(document).ready(function () {
   $(".edit_tr").click(function () {
       var id = $(this).attr("id");
       $("#id_"+id).hide();
       $("#sku_"+id).hide();
       $("#name_"+id).hide();
       $("#ean_"+id).hide();
       $("#stock_"+id).hide();
       $("#availability_"+id).hide();
       $("#id_input_"+id).show();
       $("#sku_input_"+id).show();
       $("#name_input_"+id).show();
       $("#ean_input_"+id).show();
       $("#stock_input_"+id).show();
       $("#availability_input_"+id).show();
   }).change(function () {
       var _id=$(this).attr('id');
       var id = $("#id_input_"+_id).val();
       var sku = $("#sku_input_"+_id).val();
       var name = $("#name_input_"+_id).val();
       var ean = $("#ean_input_"+_id).val();
       var stock = $("#stock_input_"+_id).val();
       var availability = $("#availability_input_"+_id).val();
       var dataString = '_id='+ _id +'&id='+id+'&sku='+sku+'&name='+name+'&ean='+ean+'&stock='+stock+'&availability='+availability;


       $.ajax({
           type: "POST",
           url: "products_update_ajax.php",
           data: dataString,
           cache: false,
           success: function(html)
           {
               $("#id_"+_id).html(id);
               $("#sku_"+_id).html(sku);
               $("#name_"+_id).html(name);
               $("#ean_"+_id).html(ean);
               $("#stock_"+_id).html(stock);
               $("#availability_"+_id).html(availability);
           }
       });

   });
    $(".edit_text").mouseup(function()
    {
        return false
    });

    $(document).mouseup(function()
    {
        $(".edit_text").hide();
        $(".text").show();
    });

    $(".delete_button").click(function () {
        var _id = $(this).parent().parent().attr("id");
        var dataString = '_id='+_id;
        $.ajax({
            type: "POST",
            url: "products_update_ajax.php",
            data: dataString,
            cache: false,
            success: function () {
                $("#"+_id).remove();
            }
        });
    });

    
});






