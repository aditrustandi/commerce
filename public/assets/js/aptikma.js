function aptikmacurrency(n,cur) {
//    console.log("---"+n+"---");
    var ret = n.toFixed(2).replace(/./g, function(c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
    });
    
    ret = ret.replace('.00','');
    
    return cur+ret;
}

function aptikmastring(n,cur){
//   console.log("---"+n+"---");
   var ret = n.replace(cur,'');
   var ret1 = ret.replace(',','');
   var ret2 = ret1.replace(',','');
   ret2 = ret2.replace(',','');
//   console.log("---"+ret2+"---");
    return ret2;
   
}

function currencyOnType(n,cur){
   var reti = n.replace(cur,'');
   reti = reti.replace(',','');
   
   var ret ;
   if (reti.length < 4){
       ret = reti;
   }else{
   console.log("---"+reti+"---");
    ret = reti.toFixed(2).replace(/./g, function(c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
    });
    
    ret = ret.replace('.00','');
}
    return ret;
}

function isNumberKey(evt)
          {
             var charCode = (evt.which) ? evt.which : event.keyCode
             if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

             return true;
          }
          
function kurensi(param) 
{
    var nilai = param+"";
		bk = nilai.replace(/[^\d]/g,"");
		ck = "";
		panjangk = bk.length;
		j = 0;
		for (i = panjangk; i > 0; i--) 
		{
			j = j + 1;
			if (((j % 3) == 1) && (j != 1)) 
			{
				ck = bk.substr(i-1,1) + "," + ck;
				xk = bk;
			} 
			else 
			{
				ck = bk.substr(i-1,1) + ck;
				xk = bk;
			}
		}
		return ck;
}

function uang(par,cur) 
{
	ttm = document.getElementById( par).value;
	strtt= ttm.toString();
	kttm = kurensi(strtt);
	
	document.getElementById( par).value = cur+kttm;
}