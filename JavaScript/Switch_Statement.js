var d = new Date();
var theDay = d.getDay();
switch(theDay)
{
    case 1: document.write("Boring Monding");
            break;
    case 2: document.write("Turning Tuesday");
            break;
    case 3: document.write("Wow Wednesday");
            break;
    case 4: document.write("Thursday");
            break;
    case 5: document.write("Finally Friday");
            break;
    case 6: document.write("Super Saturday");
            break;
    case 0: document.write("Sleepy Sunday");
            break;
    default: document.write("I'm looking forward to this weekend!");
             break;
}