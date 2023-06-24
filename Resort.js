function discountPrice()
{
    var r,a,c,rp=6850,ap=3420,cp=1710,p,fp;
    r=document.getElementById('rooms').value;
    a=document.getElementById('adults').value;
    c=document.getElementById('children').value;
    if((r+r)>=(a+c/2))
    p=r*rp;
    else
    p=a*ap+c*cp;
    fp=(p*80)/100;
    document.getElementById('price1').innerHTML="Rs. "+p;
    document.getElementById('price2').innerHTML="₹ "+fp;
    return;
}

function price(rp,ap,cp)
{
    var r,a,c,p;
    r=document.getElementById('rooms').value;
    a=document.getElementById('adults').value;
    c=document.getElementById('children').value;
    if((r+r)>=(a+c/2))
    p=r*rp;
    else
    p=a*ap+c*cp;
    fp=(p*80)/100;
    document.getElementById('price1').innerHTML="₹ "+p+" Rs";
    return;
}

function paymentResult()
{
    alert("Payment Sucessful ✅");
    return;
}

function setList(n)
{
    var list,i,j,r;
    r=document.getElementById('rooms').value;
    if(n<r && n!=0)
    {
        list = document.getElementById("room"+n);
        for(i=0;i<list.length;i++)
        {
            next_list = document.getElementById("room"+(n+1));
            next_list_len = next_list.length;
            if(i==0)
            {
                for(j=0;j<next_list_len;j++)
                next_list.remove(next_list);
            }
            if(list.options[i].value != list.value)
            {
                add_option = document.createElement('option');
                add_option.text = list.options[i].text;
                add_option.value = list.options[i].value;
                next_list.add(add_option);
            }
        }
    }
    if(n==0)
    {
        for(n=2;n<5;n++)
        {
            list = document.getElementById("room"+n);
            list_len = list.length;
            for(i = 0; i < list_len; i++)
            list.remove(list);
        }
        for(i = 1; i <= r; i++)
        setList(i);
    }
    return;
}
