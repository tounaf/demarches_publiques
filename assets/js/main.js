// NAVBAR
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


// DATATABLE
      $(document).ready(function() {
        $('#table_id').DataTable();
    } );
