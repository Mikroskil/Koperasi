//validasi
//validasi nik/no hp
function isNumberKey(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57)){
    return false;
  }
  return true;
}

function isAlfabetKey(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 65 || charCode > 91) && (charCode < 97 || charCode > 122)){
    return false;
  }
  return true;
}

function isAlfabetAndNumberKey(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 65 || charCode > 91) && (charCode < 97 || charCode > 122) && (charCode < 48 || charCode > 57)){
    return false;
  }
  return true;
}
//validasi pada nama
function isAlfabetKeyAndSpace(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode != 39 && charCode != 32 && charCode > 31 && (charCode < 65 || charCode > 91) && (charCode < 97 || charCode > 122)){
    return false;
  }
  return true;
}

function isNoneKey(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 0){
    return false;
  }
  return true;
}
//validasi pada email
function isEmail(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode != 46 && charCode != 64 && charCode != 95 && charCode > 31 && (charCode < 65 || charCode > 91) && (charCode < 97 || charCode > 122)&& (charCode < 48 || charCode > 57)){
    return false;
  }
  return true;
}