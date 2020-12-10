function form()
{
  if ($("#agreekey").is(':checked'))
  {
    $(".accept").fadeOut(300);
    $('#dataf').delay(300).fadeIn();
  } 
  else
  {
    $("#reg_accept")[0].style.color = "#b03b2f";
  }
}

$("#agree")[0].onclick = form;
