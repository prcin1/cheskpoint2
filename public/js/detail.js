function addToCart(product_id) {
    $.ajax({
        type: "POST",
        url: 'index.php?c=home&a=ajaxAddToCart',
        data: {productId:product_id},
        success: function(data) {
            alert("Úspešne pridané do košíka!");
        },
        error: function(data) {
            alert(data.status);
        }
    });
};

//zmenit allerty na hlasky