$(document).ready(function (){

    $(document).on('click', '.edit-user', function (){
       $('#addNewUser').css('display', 'none');
       var user_id = $(this).attr('data-element-id');
       var user = document.querySelector('.user-'+user_id);

       var email = user.querySelector('.email').textContent;
       var last_name = user.querySelector('.last_name').textContent;
       var name = user.querySelector('.name').textContent;
       var id = user.querySelector('.id').textContent;
       var telephone = user.querySelector('.telephone').textContent;

       $('#user_id').val(id);
       $('#email').val(email);
       $('#last_name').val(last_name);
       $('#name').val(name);
       $('#telephone').val(telephone);
       $('#method_name').val('editUser');
    });
})