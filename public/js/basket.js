function deleteFromCart(product_id, deletedButton){
    //e.preventDefault();
    if (confirm("Naozaj chcete vymazať produkt z košíka?")){
        $.ajax({
            type:"POST",
            url:'index.php?c=home&a=ajaxDeleteFromCart',
            data:{productId:product_id},
            success: function(data) {
                deletedButton.closest('.product').remove();
                alert(data.status);

            },
            error: function(data) {
                alert(data.status);
            }
        });
    }
}