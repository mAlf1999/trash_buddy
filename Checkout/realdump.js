function confirm() {
    var selection1=document.querySelector("#inputGroupSelect01").value
    var selection1 = parseInt(selection1)
    var selection2=document.querySelector("#inputGroupSelect02").value
    var selection2 = parseInt(selection2)
    var amount=(selection1+selection2);
    var pay = 50*amount;
    alert(pay);

}
