
  function myFunction() {
    /* Get the text field */
    var copyText = document.getElementById("shortenurl");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

      /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    /* Alert the copied text */
    $(this).children(".tooltip").addClass("appear").delay(1000).queue(function( next ){
      $(this).removeClass("appear"); 
      $(this).dequeue();
    });
}