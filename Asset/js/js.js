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

$(document).ready(function (){
   $(document).on('click', '.edit-genre', function (){
      $('.add-new-genre').css('display', 'none');
      var genre_id = $(this).attr('data-element-id');
      var name = $(this).attr('data-element-name');

      $('#genre_id').val(genre_id);
      $('#genre').val(name);
      $('#method_name').val('editGenre');
   });
})

$(document).ready(function (){
   $(document).on('click', '.edit-book', function (){
      $('#addBook').css('display', 'none');
      var book_id = $(this).attr('data-element-id');
      var book_name = $(this).attr('data-element-name');
      var book = document.querySelector('.book-'+book_id);

      var author = book.querySelector('.author').textContent;
      var year = book.querySelector('.year').textContent;
      var genre_name = book.querySelector('.genre_name').textContent;

      $('#book_id').val(book_id);
      $('#name_book').val(book_name);
      $('#name_author').val(author);
      $('#year').val(year);
      var option = $('#genre')[0].children;
      for (var a = 0; a < option.length; a++){
         if (option[a].textContent === genre_name){
            option[a].setAttribute('selected', 'selected');
         }
      }
      $('#method_name').val('editBook');
   })
})