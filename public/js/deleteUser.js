function deleteUser(userId, deleteUser){
    //e.preventDefault();
    if (confirm("Naozaj chcete vymazať Použivateľa?")){
        $.ajax({
            type:"POST",
            url:'index.php?c=home&a=ajaxDeleteUser',
            data:{id:userId},
            success: function(data){
                deleteUser.closest('.user').remove();
               alert("Poiživateľ bol ostránený")
            }
        });
    }
}