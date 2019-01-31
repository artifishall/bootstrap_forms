$(function(){
    $('.delete-form').submit(function(e){
        if (!window.confirm("Are you sure you want to delete this?")) {
            e.preventDefault();
        }
    });
});
