$("#dataf").submit(function (event) {
  if ($("#name").val().trim().length == 0
  ||  $("#tit").val().trim().length == 0
  ||  $("#text").val().trim().length == 0 )
  {
    $("#formalert").show();
    event.preventDefault();
    return false;
  }
  return true;

});
