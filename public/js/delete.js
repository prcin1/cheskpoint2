function deleteProduct(product_id, deletedButton){
    //e.preventDefault();
    if (confirm("Naozaj chcete vymazať?")){
        $.ajax({
            type:"POST",
            url:'index.php?c=home&a=ajaxDelete',
            data:{productId:product_id},
            success: function(data){
                deletedButton.closest('.product').remove();
               alert("Položka bola ostránená")
            },
            error: function(data) {
                alert("Položka nebola Odstránená");
            }
        });
    }
}