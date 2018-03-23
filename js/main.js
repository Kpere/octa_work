function formvalid(){
    var userid = document.form.user;
    var unameid = document.form.uname;
    var pwd = document.form.pass;
    {
    if(allLetter(unameid))
    {
    if(alphanumeric(pwd))
    }
    }
        return false;
}

function uname_valid(unameid)
    {
        var uname_len = unameid.value.length;
        if(uname_len == 0){
            alert("Username field cannot be empty");
            return false;
        }
        return true;
    }