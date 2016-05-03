/**
 * Created by roger on 16-5-2.
 */

/*
Create Product Object
 */
function Product(product) {
    
}
Product.prototype.clickProduct = function () 
{
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
};
Product.prototype.changeProduct = function () 
{
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
        url: "products-update.php",
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
};


Product.prototype.deleteProduct = function () 
{
    var _id = $(this).parent().parent().attr("id");
    var dataString = '_id='+_id;
    $.ajax({
        type: "POST",
        url: "products-delete.php",
        data: dataString,
        cache: false,
        success: function () {
            $("#"+_id).remove();
        }
    });
};
Product.prototype.addProduct = function () 
{
    $.ajax({
        type: "GET",
        url: "products-add.php",
        dataType: "json",
        cache:false,
        success: function (data) {
            var product = $(".add_product").clone();
            product.show();
            product.removeClass("add_product");
            product.attr('id', data);
            product.find("td:eq(0)").find('span').attr("id", "id_" + data);
            product.find("td:eq(0)").find('input').attr("id", "id_input_" + data);
            product.find("td:eq(1)").find('span').attr("id", "sku_" + data);
            product.find("td:eq(1)").find('input').attr("id", "sku_input_" + data);
            product.find("td:eq(2)").find('span').attr("id", "ean_" + data);
            product.find("td:eq(2)").find('input').attr("id", "ean_input_" + data);
            product.find("td:eq(3)").find('span').attr("id", "name_" + data);
            product.find("td:eq(3)").find('input').attr("id", "name_input_" + data);
            product.find("td:eq(4)").find('span').attr("id", "stock_" + data);
            product.find("td:eq(4)").find('input').attr("id", "stock_input_" + data);
            product.find("td:eq(5)").find('span').attr("id", "availability_" + data);
            product.find("td:eq(5)").find('input').attr("id", "availability_input_" + data);
            $("#products").append(product);
            var pro = new Product();
            product.find("td:eq(6)").find(".delete_button").click(pro.deleteProduct);

            product.click(pro.clickProduct).change(pro.changeProduct);
            product.find(".edit_text").mouseup(function()
            {
                return false
            });
            $(document).mouseup(function()
            {
                product.find(".edit_text").hide();
                product.find(".text").show();
            });
        }
    });
};

/*
ajax for the create, update, delete for products
 */
$(document).ready(function () 
{

    var product =  new Product(".edit_tr");
    $(".edit_tr").click(product.clickProduct).change(product.changeProduct);

    $(".edit_text").mouseup(function()
    {
        return false
    });
    $(document).mouseup(function()
    {
        $(".edit_text").hide();
        $(".text").show();
    });
    $(".delete_button").click(product.deleteProduct);

    $(".add_button").click(product.addProduct);

});
