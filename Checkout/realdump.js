
    $('#checkrate').on('click', () =>{
        var selection1 = document.querySelector("#inputGroupSelect01").value
        var selection1 = parseInt(selection1)
        var selection2 = document.querySelector("#inputGroupSelect02").value
        var selection2 = parseInt(selection2)
        var amount=(selection1+selection2);
        var pay = 50*amount;
        alert("Total charge="+pay);
    })


   

function check() {
    var selection1=document.querySelector("#inputGroupSelect01").value
    var selection2=document.querySelector("#inputGroupSelect02").value
if(selection1==0 && selection2==0)
{
alert("invalid selection")
return
}   

}
  
