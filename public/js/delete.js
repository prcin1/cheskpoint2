function deleteProduct(product_id){
    //e.preventDefault();
    if (confirm("Naozaj chcete vymazať?")){
        $.ajax({
            type:"POST",
            url:'index.php?c=home&a=ajaxDelete',
            data:{productId:product_id},
            success: function(data){
               console.log(data);
               location.reload();
            }
        });
    }
}
//urobit mazanie rovnako ako basket.js