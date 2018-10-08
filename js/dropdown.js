function DropDownChange() {
    var selectedValue=document.getElementById("Property").value;

        if(selectedValue=="FLAT")
        {
            document.getElementById("details").style.display="block";
            document.getElementById("lift").style.display="block";

        }
        if(selectedValue=="VILLA")
        {
            document.getElementById("details").style.display="block";
            document.getElementById("lift").style.display="none";

        }
        if(selectedValue=="PLOT")
        {
            document.getElementById("details").style.display="none";
        }
}