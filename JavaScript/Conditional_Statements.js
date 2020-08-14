var d = new Date();
var time = d.getHours();
if(time<10)
{
    document.write("<b>Good Morning</b");
    document.write("<br/>");
}
else if(time>=10 && time<16)
{
    document.write("<b>Good Afternoon</b>");
    document.write("<br/>");
}
else
{
    document.write("<b>Good Evening</b>");
    document.write("<br/>");
}
var r = Math.random();
if(r>0.5)
{
    document.write("<a href='http://www.w3schools.com'>Learn Web Development!</a>");
    document.write("<br/>");
}
else
{
    document.write("<a href='ftp://192.168.2.172/lab/'>Visit FTP Data!</a>");
    document.write("<br/>");
}