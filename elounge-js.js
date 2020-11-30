$(document).ready(function(){
    function getValue()
    {
        var d = document.getElementById("Major-select");
        var displaytext = d.options[d.selectedIndex].text;
        document.getElementById("major").value=displaytext;
    }
}