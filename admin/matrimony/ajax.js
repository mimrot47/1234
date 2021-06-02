var x = false;
if (window.XMLHttpRequest)
{
    //code for IE7+,FireFox,Chrome,Opera,Safari
    x = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    //code for IE6,IE5
    x = new ActiveXObject("Microsoft.XMLHTTP");
}
function gotopage()
{
    if (x)
    {
        var fp = "data.php?cp=" + document.getElementById("cp").value;
        x.open("GET", fp);
        x.onreadystatechange = function()
        {
            if (x.readyState == 4 && x.status == 200)
            {
                document.getElementById("result").innerHTML = x.responseText;
            }
        }
        x.send(null);
    }
}