function vem()
{   
    var e='^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+@[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$';
    var em=document.getElementById('em').value;
    if(em=="")
	{
		document.getElementById('em').value="";
		return false;
	}
	else if(!em.match(e))
    {
		document.getElementById('em').style.color="red";
        document.getElementById('em').value="Invalid Email";
        return false;
    }
}
function vmn()
{
	var m='^[7-9]{1}[0-9]{9}$';
    var mn=document.getElementById('mn').value;
	if(mn=="")
	{
		document.getElementById('mn').value="";
		return false;
	}
	 else if(!mn.match(m) && m.length!=10)
        {
			document.getElementById('mn').style.color="red";
            document.getElementById('mn').value="Invalid Mobile";
            return false;
        }
}
function e()
{
	if(document.getElementById('em').value=="Invalid Email")
	{
		document.getElementById('em').value="";
		document.getElementById('em').style.color="black";
		return false;
	}
}
function e1()
{
	if(document.getElementById('mn').value=="Invalid Mobile")
	{	
		document.getElementById('mn').value="";
		document.getElementById('mn').style.color="black";
		return false;
	}
}