function toggle_edit(id) {
  inputs = document.querySelectorAll("input[type='text']#cat" + id)[0];
  submit = document.querySelectorAll("a#submit"+id)[0];
  toggle = document.querySelectorAll("a#toggle_edit"+id)[0];
  if (inputs.readOnly) {
    inputs.readOnly = false;
    inputs.classList.remove("form-control-plaintext");
    submit.classList.remove("invisible");
    toggle.classList.add("invisible");
  } 
}
