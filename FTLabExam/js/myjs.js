function MyAjaxFunc()
{
    var name = document.getElementById("name").value;
    var id = document.getElementById("id").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange= function() {
        if(this.readyState == 4 && this.status ==200){
            document.getElementById("demo").innerHTML = this.response;
        }
        else {
            document.getElementById("demo").innerHTML = this.status;
        }
    };
    xhttp.open("post","/FTlabExam/Control/formhandle.php?",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send("name="+name+"&id="+id);
}