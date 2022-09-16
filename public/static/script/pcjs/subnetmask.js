<!--  to hide script contents from old browsers

function h_initArray() {
    this.length = h_initArray.arguments.length;
    for (var i = 0; i < this.length; i++)
    this[i] = h_initArray.arguments[i];
    }

function h_from10toradix(value,radix){
    var retval = '';
    var ConvArray = new h_initArray(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F');
    var intnum;
    var tmpnum;
    var i = 0;

    intnum = parseInt(value,10);
    if (isNaN(intnum)){
    retval = 'NaN';
    }else{
    if (intnum < 1){
    retval ="0";
    }else{
    retval = "";
    }
while (intnum > 0.9){
    i++;
    tmpnum = intnum;
    // cancatinate return string with new digit:
    retval = ConvArray[tmpnum % radix] + retval;
    intnum = Math.floor(tmpnum / radix);
    if (i > 100){
    // break infinite loops
    retval = 'NaN';
    break;
    }
}
}
return retval;
}

function h_paddto2(str) {
    while(str.length <2){
    str= "0" + str;
    }
return(str);
}

function h_paddto8(str) {
    while(str.length <8){
    str= "0" + str;
    }
return(str);
}

//--------------------------

function h_countbitsfromleft(num)
{
    if (num == 255 ){
    return(8);
    }
i = 0;
bitpat=0xff00;
while (i
    < 8){
        if (num == (bitpat & 0xff)){
        return(i);
        }
    bitpat=bitpat >> 1;
    i++;
    }
    return(Number.NaN);
    }

    function calcNWbits(cform)
{
    sumofbits = 0;
    tmpvar = parseInt(cform.snm_1.value,10);
    if (isNaN(tmpvar)){
    cform.result.value = '无效';
    return;
    }
    bitsfromleft=h_countbitsfromleft(tmpvar);
    if (isNaN(bitsfromleft)){
        cform.result.value = '无效';
        return;
        }
    sumofbits+=bitsfromleft;
    //
    tmpvar = parseInt(cform.snm_2.value,10);
    if (isNaN(tmpvar)){
        cform.result.value = '无效';
        return;
        }
    bitsfromleft=h_countbitsfromleft(tmpvar);
    if (isNaN(bitsfromleft)){
        cform.result.value = '无效';
        return;
        }
    sumofbits+=bitsfromleft;
    //
    tmpvar = parseInt(cform.snm_3.value,10);
    if (isNaN(tmpvar)){
        cform.result.value = '无效';
        return;
        }
    bitsfromleft=h_countbitsfromleft(tmpvar);
    if (isNaN(bitsfromleft)){
        cform.result.value = '无效';
        return;
        }
    sumofbits+=bitsfromleft;
    //
    tmpvar = parseInt(cform.snm_4.value,10);
    if (isNaN(tmpvar)){
        cform.result.value = '无效';
        return;
        }
    bitsfromleft=h_countbitsfromleft(tmpvar);
    if (isNaN(bitsfromleft)){
        cform.result.value = '无效';
        return;
        }
    sumofbits+=bitsfromleft;
    cform.result.value = sumofbits;
    return;
    }

    function resetform1(cform) {
        cform.result.value = "";
        cform.snm_1.value=255;
        cform.snm_2.value=255;
        cform.snm_3.value=255;
        cform.snm_4.value=0;
        }

    //--------------------------

    function h_fillbitsfromleft(num)
{
    if (num >= 8 ){
    return(255);
    }
    bitpat=0xff00;
    while (num > 0){
        bitpat = bitpat >> 1;
        num--;
        }
    return(bitpat & 0xff);
    }

    function calcNWmask(cform)
{
    tmpvar = parseInt(cform.bits.value, 10);
    if (isNaN(tmpvar) || tmpvar > 32 || tmpvar < 0){
    cform.snm_1.value = '错误';
    cform.snm_2.value="";
    cform.snm_3.value="";
    cform.snm_4.value="";
    return(1);
    }
    cform.snm_1.value=0;
    cform.snm_2.value=0;
    cform.snm_3.value=0;
    cform.snm_4.value=0;
    if (tmpvar >= 8){
        cform.snm_1.value = 255;
        tmpvar-=8;
        }else{
        cform.snm_1.value = h_fillbitsfromleft(tmpvar);
        return(0);
        }
    if (tmpvar >= 8){
        cform.snm_2.value = 255;
        tmpvar-=8;
        }else{
        cform.snm_2.value = h_fillbitsfromleft(tmpvar);
        return(0);
        }
    if (tmpvar >= 8){
        cform.snm_3.value = 255;
        tmpvar-=8;
        }else{
        cform.snm_3.value = h_fillbitsfromleft(tmpvar);
        return(0);
        }
    cform.snm_4.value = h_fillbitsfromleft(tmpvar);
    return(0);
    }

    function calcNWmaskForm2(cform)
{
    var rt=0;
    cform.hex_1.value="";
    cform.hex_2.value="";
    cform.hex_3.value="";
    cform.hex_4.value="";
    rt=calcNWmask(cform);
    if (rt !=0 ){
    // error
    return(1);
    }
    tmpvar=cform.snm_1.value;
    cform.hex_1.value = h_paddto2(h_from10toradix(tmpvar,16));
    tmpvar=cform.snm_2.value;
    cform.hex_2.value = h_paddto2(h_from10toradix(tmpvar,16));
    tmpvar=cform.snm_3.value;
    cform.hex_3.value = h_paddto2(h_from10toradix(tmpvar,16));
    tmpvar=cform.snm_4.value;
    cform.hex_4.value = h_paddto2(h_from10toradix(tmpvar,16));
    }

    function resetform2(cform) {
        cform.bits.value = 24;
        cform.snm_1.value="";
        cform.snm_2.value="";
        cform.snm_3.value="";
        cform.snm_4.value="";
        cform.hex_1.value="";
        cform.hex_2.value="";
        cform.hex_3.value="";
        cform.hex_4.value="";
        }

    //--------------------------

    function resetform3(cform) {
        cform.ip_1.value = 10;
        cform.ip_2.value=0;
        cform.ip_3.value=0;
        cform.ip_4.value=255;
        cform.bits_1.value="";
        cform.bits_2.value="";
        cform.bits_3.value="";
        cform.bits_4.value="";
        cform.hex_1.value="";
        cform.hex_2.value="";
        cform.hex_3.value="";
        cform.hex_4.value="";
        }

    function calcBinBits(cform)
{
    cform.bits_1.value = "";
    cform.bits_2.value="";
    cform.bits_3.value="";
    cform.bits_4.value="";
    //
    tmpvar = parseInt(cform.ip_1.value,10);
    if (isNaN(tmpvar) || tmpvar < 0 || tmpvar > 255){
    cform.bits_1.value = '错误';
    return;
    }
    cform.bits_1.value = h_paddto8(h_from10toradix(tmpvar,2));
    cform.hex_1.value = h_paddto2(h_from10toradix(tmpvar,16));
    //
    tmpvar = parseInt(cform.ip_2.value,10);
    if (isNaN(tmpvar) || tmpvar
        < 0 || tmpvar > 255){
            cform.bits_2.value = '错误';
            return;
            }
        cform.bits_2.value = h_paddto8(h_from10toradix(tmpvar,2));
        cform.hex_2.value = h_paddto2(h_from10toradix(tmpvar,16));
        //
        tmpvar = parseInt(cform.ip_3.value,10);
        if (isNaN(tmpvar)  || tmpvar
            < 0 || tmpvar > 255){
                cform.bits_3.value = '错误';
                return;
                }
            cform.bits_3.value = h_paddto8(h_from10toradix(tmpvar,2));
            cform.hex_3.value = h_paddto2(h_from10toradix(tmpvar,16));
            //
            tmpvar = parseInt(cform.ip_4.value,10);
            if (isNaN(tmpvar) || tmpvar
                < 0 || tmpvar > 255){
                    cform.bits_4.value = '错误';
                    return;
                    }
                cform.bits_4.value = h_paddto8(h_from10toradix(tmpvar,2));
                cform.hex_4.value = h_paddto2(h_from10toradix(tmpvar,16));
                }

                //--------------------------

                function reset_rest_from4(cform){
                    cform.bcast_1.value = "";
                    cform.bcast_2.value ="";
                    cform.bcast_3.value ="";
                    cform.bcast_4.value ="";
                    //
                    cform.nwadr_1.value ="";
                    cform.nwadr_2.value ="";
                    cform.nwadr_3.value ="";
                    cform.nwadr_4.value ="";
                    //
                    cform.firstadr_1.value ="";
                    cform.firstadr_2.value ="";
                    cform.firstadr_3.value ="";
                    cform.firstadr_4.value ="";
                    //
                    cform.lastadr_1.value ="";
                    cform.lastadr_2.value ="";
                    cform.lastadr_3.value ="";
                    cform.lastadr_4.value ="";
                    //
                    cform.snm_1.value ="";
                    cform.snm_2.value ="";
                    cform.snm_3.value ="";
                    cform.snm_4.value ="";
                    //
                    cform.numofaddr.value ="";
                    }

                function resetform4(cform) {
                    cform.bits.value = 24;
                    cform.ip_1.value=10;
                    cform.ip_2.value=0;
                    cform.ip_3.value=0;
                    cform.ip_4.value=5;
                    //
                    reset_rest_from4(cform);
                    }

                function calNBFL(cform) {
                    var rt=0;
                    reset_rest_from4(cform);
                    tmpvar = parseInt(cform.ip_1.value,10);
                    if (isNaN(tmpvar) || tmpvar > 255 || tmpvar < 0){
                    cform.numofaddr.value = '错误';
                    return(1);
                    }
                tmpvar = parseInt(cform.ip_2.value,10);
                if (isNaN(tmpvar) || tmpvar > 255 || tmpvar
                    < 0){
                        cform.numofaddr.value = '错误';
                        return(1);
                        }
                    tmpvar = parseInt(cform.ip_3.value,10);
                    if (isNaN(tmpvar) || tmpvar > 255 || tmpvar
                        < 0){
                            cform.numofaddr.value = '错误';
                            return(1);
                            }
                        tmpvar = parseInt(cform.ip_4.value,10);
                        if (isNaN(tmpvar) || tmpvar > 255 || tmpvar
                            < 0){
                                cform.numofaddr.value = '错误';
                                return(1);
                                }
                            rt=calcNWmask(cform);
                            if (rt !=0 ){
                                // error
                                return(1);
                                }
                            tmpvar=parseInt(cform.bits.value,10);
                            if (tmpvar
                                <0){
                                    cform.numofaddr.value = '错误';
                                    return(1);
                                    }
                                if (tmpvar >32){
                                    cform.numofaddr.value = '错误';
                                    return(1);
                                    }
                                if (tmpvar == 31){
                                    cform.numofaddr.value = "two hosts";
                                    cform.firstadr_1.value = cform.ip_1.value & cform.snm_1.value;
                                    cform.firstadr_2.value = cform.ip_2.value & cform.snm_2.value;
                                    cform.firstadr_3.value = cform.ip_3.value & cform.snm_3.value;
                                    cform.firstadr_4.value = cform.ip_4.value & cform.snm_4.value;
                                    //
                                    cform.lastadr_1.value = cform.ip_1.value | (~ cform.snm_1.value & 0xff);
                                    cform.lastadr_2.value = cform.ip_2.value | (~ cform.snm_2.value & 0xff);
                                    cform.lastadr_3.value = cform.ip_3.value | (~ cform.snm_3.value & 0xff);
                                    cform.lastadr_4.value = cform.ip_4.value | (~ cform.snm_4.value & 0xff);
                                    return(1);
                                    }
                                if (tmpvar == 32){
                                    cform.numofaddr.value = "one host";
                                    cform.firstadr_1.value = cform.ip_1.value;
                                    cform.firstadr_2.value = cform.ip_2.value;
                                    cform.firstadr_3.value = cform.ip_3.value;
                                    cform.firstadr_4.value = cform.ip_4.value;
                                    return(1);
                                    }
                                cform.numofaddr.value = Math.pow(2,32 - tmpvar) - 2;
                                //
                                cform.bcast_1.value = cform.ip_1.value | (~ cform.snm_1.value & 0xff);
                                cform.bcast_2.value = cform.ip_2.value | (~ cform.snm_2.value & 0xff);
                                cform.bcast_3.value = cform.ip_3.value | (~ cform.snm_3.value & 0xff);
                                cform.bcast_4.value = cform.ip_4.value | (~ cform.snm_4.value & 0xff);
                                //
                                cform.nwadr_1.value = cform.ip_1.value & cform.snm_1.value;
                                cform.nwadr_2.value = cform.ip_2.value & cform.snm_2.value;
                                cform.nwadr_3.value = cform.ip_3.value & cform.snm_3.value;
                                cform.nwadr_4.value = cform.ip_4.value & cform.snm_4.value;
                                //
                                cform.firstadr_1.value = cform.nwadr_1.value;
                                cform.firstadr_2.value = cform.nwadr_2.value;
                                cform.firstadr_3.value = cform.nwadr_3.value;
                                cform.firstadr_4.value = parseInt(cform.nwadr_4.value) + 1;
                                //
                                cform.lastadr_1.value = cform.bcast_1.value;
                                cform.lastadr_2.value = cform.bcast_2.value;
                                cform.lastadr_3.value = cform.bcast_3.value;
                                cform.lastadr_4.value = parseInt(cform.bcast_4.value) - 1;
                                return(0);
                                }

                                //--------------------------

                                function resetform6(cform) {
                                    cform.numofaddr.value = 5;
                                    cform.bits.value="";
                                    cform.maxaddr.value="";
                                    cform.snm_1.value="";
                                    cform.snm_2.value="";
                                    cform.snm_3.value="";
                                    cform.snm_4.value="";
                                    }

                                function calcNeeded(cform){
                                    tmpvar = parseInt(cform.numofaddr.value, 10);
                                    if (isNaN(tmpvar) || tmpvar > 0xfffffffe || tmpvar < 1){
                                    cform.bits.value="ERR";
                                    cform.snm_1.value="";
                                    cform.snm_2.value="";
                                    cform.snm_3.value="";
                                    cform.snm_4.value="";
                                    cform.maxaddr.value="";
                                    return;
                                    }
                                expval=parseInt(Math.log(tmpvar)/Math.log(2)) + 1;
                                maxaddrval=Math.pow(2,expval);
                                if (maxaddrval - tmpvar
                                    < 2){
                                        expval += 1;
                                        }
                                    cform.maxaddr.value= Math.pow(2,expval) - 2;
                                    cform.bits.value=32 - expval;
                                    calcNWmask(cform);
                                    }

                                    //--------------------------
                                    function calcAmount(cform){
                                        tmpvar = parseInt(cform.bits.value, 10);
                                        if (isNaN(tmpvar) || tmpvar > 30 || tmpvar < 0){
                                        cform.numofaddr.value = '错误';
                                        cform.maxaddr.value="";
                                        cform.snm_1.value="";
                                        cform.snm_2.value="";
                                        cform.snm_3.value="";
                                        cform.snm_4.value="";
                                        return;
                                        }
                                    cform.maxaddr.value=Math.pow(2,32 - tmpvar);
                                    cform.numofaddr.value=Math.pow(2,32 - tmpvar)- 2;
                                    calcNWmask(cform);
                                    }

                                    function resetform7(cform) {
                                        cform.numofaddr.value = "";
                                        cform.maxaddr.value="";
                                        cform.bits.value=27;
                                        cform.snm_1.value="";
                                        cform.snm_2.value="";
                                        cform.snm_3.value="";
                                        cform.snm_4.value="";
                                        }
                                    //--------------------------
                                    function resetform8(cform) {
                                        cform.ip_1.value = 255;
                                        cform.ip_2.value=255;
                                        cform.ip_3.value=240;
                                        cform.ip_4.value=0;
                                        cform.invert_1.value="";
                                        cform.invert_2.value="";
                                        cform.invert_3.value="";
                                        cform.invert_4.value="";
                                        }

                                    function calcIpInvert(cform){
                                        cform.invert_1.value = "";
                                        cform.invert_2.value="";
                                        cform.invert_3.value="";
                                        cform.invert_4.value="";
                                        //
                                        tmpvar = parseInt(cform.ip_1.value,10);
                                        if (isNaN(tmpvar) ){
                                        cform.invert_1.value = 'NaN';
                                        return;
                                        }
                                    cform.invert_1.value = 0xff & ~ tmpvar;
                                    //
                                    tmpvar = parseInt(cform.ip_2.value,10);
                                    if (isNaN(tmpvar) ){
                                        cform.invert_2.value = 'NaN';
                                        return;
                                        }
                                    cform.invert_2.value = 0xff & ~ tmpvar;
                                    //
                                    tmpvar = parseInt(cform.ip_3.value,10);
                                    if (isNaN(tmpvar) ){
                                        cform.invert_3.value = 'NaN';
                                        return;
                                        }
                                    cform.invert_3.value = 0xff & ~ tmpvar;
                                    //
                                    tmpvar = parseInt(cform.ip_4.value,10);
                                    if (isNaN(tmpvar) ){
                                        cform.invert_4.value = 'NaN';
                                        return;
                                        }
                                    cform.invert_4.value = 0xff & ~ tmpvar;
                                    }
                                    //--------------------------
                                    function resetform9(cform) {
                                        cform.dec_1.value = "";
                                        cform.bin_1.value="";
                                        cform.num.value="";
                                        }

                                    function convertnum_hex(cform){
                                        cform.dec_1.value = "";
                                        cform.bin_1.value="";
                                        //
                                        tmpvar=cform.num.value.replace(/0x/i,"");
                                        cform.num.value=tmpvar;
                                        tmpvar = parseInt(cform.num.value,16);
                                        if (isNaN(tmpvar) ){
                                        cform.dec_1.value = 'NaN';
                                        cform.bin_1.value = 'NaN';
                                        return;
                                        }
                                    cform.dec_1.value = tmpvar;
                                    cform.bin_1.value = h_from10toradix(tmpvar,2);
                                    }
                                    //--------------------------
                                    function resetform10(cform) {
                                        cform.dec_1.value = "";
                                        cform.hex_1.value="";
                                        cform.num.value="";
                                        }

                                    function convertnum_bin(cform){
                                        cform.dec_1.value = "";
                                        cform.hex_1.value="";
                                        //
                                        tmpvar = parseInt(cform.num.value,2);
                                        if (isNaN(tmpvar) ){
                                        cform.dec_1.value = 'NaN';
                                        cform.hex_1.value = 'NaN';
                                        return;
                                        }
                                    cform.dec_1.value = tmpvar;
                                    cform.hex_1.value = h_from10toradix(tmpvar,16);
                                    }
                                    //--------------------------
                                    function resetform11(cform) {
                                        cform.bin_1.value = "";
                                        cform.hex_1.value="";
                                        cform.num.value="";
                                        }

                                    function convertnum_dec(cform){
                                        cform.bin_1.value = "";
                                        cform.hex_1.value="";
                                        //
                                        tmpvar = parseInt(cform.num.value,10);
                                        if (isNaN(tmpvar) ){
                                        cform.bin_1.value = 'NaN';
                                        cform.hex_1.value = 'NaN';
                                        return;
                                        }
                                    cform.hex_1.value = h_from10toradix(tmpvar,16);
                                    cform.bin_1.value = h_from10toradix(tmpvar,2);
                                    }
                                    //--------------------------
                                    function resetform12(cform) {
                                        cform.hex.value = "";
                                        cform.ip_1.value="";
                                        cform.ip_2.value="";
                                        cform.ip_3.value="";
                                        cform.ip_4.value="";
                                        cform.bits_1.value="";
                                        cform.bits_2.value="";
                                        cform.bits_3.value="";
                                        cform.bits_4.value="";
                                        }

                                    function dot2hex(cform){
                                        cform.ip_1.value = "";
                                        cform.ip_2.value="";
                                        cform.ip_3.value="";
                                        cform.ip_4.value="";
                                        cform.bits_1.value="";
                                        cform.bits_2.value="";
                                        cform.bits_3.value="";
                                        cform.bits_4.value="";
                                        tmpvar=cform.hex.value.replace(/0x/i,"");
                                        cform.hex.value=tmpvar.substr(0,8);
                                        //
                                        tmpvar = parseInt(tmpvar,16);
                                        if (isNaN(tmpvar)){
                                        cform.ip_1.value = '输入错误';
                                        return;
                                        }
                                    cform.hex.value = h_paddto8(cform.hex.value);
                                    cform.ip_1.value = parseInt(cform.hex.value.substr(0,2),16);
                                    cform.bits_1.value=h_paddto8(h_from10toradix(cform.ip_1.value,2));
                                    cform.ip_2.value = parseInt(cform.hex.value.substr(2,2),16);
                                    cform.bits_2.value=h_paddto8(h_from10toradix(cform.ip_2.value,2));
                                    cform.ip_3.value = parseInt(cform.hex.value.substr(4,2),16);
                                    cform.bits_3.value=h_paddto8(h_from10toradix(cform.ip_3.value,2));
                                    cform.ip_4.value = parseInt(cform.hex.value.substr(6,2),16);
                                    cform.bits_4.value=h_paddto8(h_from10toradix(cform.ip_4.value,2));
                                    }
                                    //--------------------------

                                    // end hiding contents from old browsers  -->
									
									
									
									
									
									
									
									
									function d2h(decimal) {
    var j = decimal;
    var hexchars = "0123456789ABCDEF";
    var hv = "";
    for (var i = 0; i < 2; i++) {
        k = j & 15;
        hv = hexchars.charAt(k) + hv;
        j = j >> 4;
    }
    return (hv);
}
function h2d(hex) {
    var j = hex.toUpperCase();
    var d = 0;
    var ch = ' ';
    var hexchars = "0123456789ABCDEF";
    while (j.length < 4) j = 0 + j;
    for (var i = 0; i < 4; i++) {
        ch = j.charAt(i);
        d = d * 16 + hexchars.indexOf(ch);
    }
    return (d);
}
function d2b(decimal) {
    var bit8 = 0,
        bit7 = 0,
        bit6 = 0,
        bit5 = 0,
        bit4 = 0,
        bit3 = 0,
        bit2 = 0,

        bit1 = 0;
    if (decimal & 128) {
        bit8 = 1
    }
    if (decimal & 64) {
        bit7 = 1
    }
    if (decimal & 32) {
        bit6 = 1
    }
    if (decimal & 16) {
        bit5 = 1
    }
    if (decimal & 8) {
        bit4 = 1
    }
    if (decimal & 4) {
        bit3 = 1
    }
    if (decimal & 2) {
        bit2 = 1
    }
    if (decimal & 1) {
        bit1 = 1
    }
    return ("" + bit8 + bit7 + bit6 + bit5 + bit4 + bit3 + bit2 + bit1);
}
function d2bits(decimal) {
    var bits = 0;
    if (decimal & 128) {
        bits = bits + 1
    }
    if (decimal & 64) {
        bits = bits + 1
    }
    if (decimal & 32) {
        bits = bits + 1
    }
    if (decimal & 16) {
        bits = bits + 1
    }
    if (decimal & 8) {
        bits = bits + 1
    }
    if (decimal & 4) {
        bits = bits + 1
    }
    if (decimal & 2) {
        bits = bits + 1
    }
    if (decimal & 1) {
        bits = bits + 1
    }
    return (bits);
}
function snmcorrect(decimal) {
    snmcorr = decimal;
    if (decimal > 255) snmcorr = 255;
    if (decimal == 253) snmcorr = 254;
    if ((decimal > 248) && (decimal < 252)) snmcorr = 252;
    if ((decimal > 240) && (decimal < 248)) snmcorr = 248;
    if ((decimal > 224) && (decimal < 240)) snmcorr = 240;
    if ((decimal > 192) && (decimal < 224)) snmcorr = 224;
    if ((decimal > 128) && (decimal < 192)) snmcorr = 192;
    if ((decimal > 0) && (decimal < 128)) snmcorr = 128;
    if (decimal < 0) snmcorr = 0;
    return (snmcorr);
}
function b2d(binary) {
    var decimal = 0;
    while (binary.length < 8) {
        binary = "0" + binary;
    }
    if (binary.substring(7, 8) == "1") {
        decimal++
    }
    if (binary.substring(6, 7) == "1") {
        decimal = decimal + 2
    }
    if (binary.substring(5, 6) == "1") {
        decimal = decimal + 4
    }
    if (binary.substring(4, 5) == "1") {
        decimal = decimal + 8
    }
    if (binary.substring(3, 4) == "1") {
        decimal = decimal + 16
    }
    if (binary.substring(2, 3) == "1") {
        decimal = decimal + 32
    }
    if (binary.substring(1, 2) == "1") {
        decimal = decimal + 64
    }
    if (binary.substring(0, 1) == "1") {
        decimal = decimal + 128
    }
    return (decimal);
}
function bits2d(binary) {
    var decimal = 0;
    if (binary > 0) {
        decimal = decimal + 128
    }
    if (binary > 1) {
        decimal = decimal + 64
    }
    if (binary > 2) {
        decimal = decimal + 32
    }
    if (binary > 3) {
        decimal = decimal + 16
    }
    if (binary > 4) {
        decimal = decimal + 8
    }
    if (binary > 5) {
        decimal = decimal + 4
    }
    if (binary > 6) {
        decimal = decimal + 2
    }
    if (binary > 7) {
        decimal = decimal + 1
    }
    return (decimal);
}
function initPage() {
    var f = document.forms[0];
    if (f.elements.length) {
        SetOrder();
    }
}


var code = 'unknown';
var version = 0;
var platform = 'Win';
var j = 0;
var i = navigator.userAgent.indexOf('MSIE');
if (i >= 0 && j == 0) {
    code = 'MSIE';
    version = parseFloat(navigator.userAgent.substring(i + 5, i + 9));
    j = 1;
}
i = navigator.userAgent.indexOf('Opera');
if (i >= 0 && j == 0) {
    code = 'Opera';
    version = parseFloat(navigator.userAgent.substring(i + 5, i + 11));
    j = 1;
}
i = navigator.userAgent.indexOf('Mozilla/');
if (i >= 0 && j == 0) {
    code = 'NS';
    version = parseFloat(navigator.userAgent.substring(i + 8, i + 12));
}
if (navigator.userAgent.indexOf('Mac') >= 0) {
    platform = 'Mac';
}
if (navigator.userAgent.indexOf('OS/2') >= 0) {
    platform = 'OS/2';
}
if (navigator.userAgent.indexOf('X11') >= 0) {
    platform = 'UNIX';
}
function ClearAll(f) {
    f.node.options.selectedIndex = 0;
    f.network.options.selectedIndex = 0;
    f.cf[0].checked = true;
    f.oct1.value = "";
    f.oct2.value = "";
    f.oct3.value = "";
    f.oct4.value = "";
    f.snm1.value = "";
    f.snm2.value = "";
    f.snm3.value = "";
    f.snm4.value = "";
    f.snm1a.value = "";
    f.snm2a.value = "";
    f.snm3a.value = "";
    f.snm4a.value = "";
    f.snm1c.value = "";
    f.snm2c.value = "";
    f.snm3c.value = "";
    f.snm4c.value = "";
    f.snm1d.value = "";
    f.snm2d.value = "";
    f.snm3d.value = "";
    f.snm4d.value = "";
    f.snm1e.value = "";
    f.snm2e.value = "";
    f.snm3e.value = "";
    f.snm4e.value = "";
    f.oct1a.value = "";
    f.oct2a.value = "";
    f.oct3a.value = "";
    f.oct4a.value = "";
    f.oct1b.value = "";
    f.oct2b.value = "";
    f.oct3b.value = "";
    f.oct4b.value = "";
    f.hex1b.value = "";
    f.hex2b.value = "";
    f.hex3b.value = "";
    f.hex4b.value = "";
    f.bin1b.value = "";
    f.bin2b.value = "";
    f.bin3b.value = "";
    f.bin4b.value = "";
    f.nw1a.value = "";
    f.nw2a.value = "";
    f.nw3a.value = "";
    f.nw4a.value = "";
    f.node1a.value = "";
    f.node2a.value = "";
    f.node3a.value = "";
    f.node4a.value = "";
    f.nwclass.value = "";
    f.nwclass1.value = "";
    f.subsuper.value = "";
    f.nwquant.value = "";
    f.nodequant.value = "";
    f.snmbits.value = "";
    f.broad1a.value = "";
    f.broad2a.value = "";
    f.broad3a.value = "";
    f.broad4a.value = "";
    f.snmbitsc.value = "";
    f.dec1b.value = "";
}
function listsubnets(f) {
    jQuery(".ObtainList").removeClass("autohide");

    jQuery("#netlist").html("");
    var str = "";
    //compute(f);
    if (f.nwclass.value != "Illegal") {
        str+="<h4 class=\"lh30 col-blue02 _pr\">网络列表<span class=\"col-gray02 lh24 fwnone pl10\">";
        networks = f.nwquant.value;
        nodes = f.nodequant.value + 2;
        if (f.subsuper.value == "子网是") {
            var count = 0;
            if (f.nwclass1.value == "C类网") {
                str += "网络 " + eval(f.snm1.value & f.oct1.value) + "." + eval(f.snm2.value & f.oct2.value) + "." + eval(f.snm3.value & f.oct3.value) + ".0 ，掩码" + f.snm1.value + "." + f.snm2.value + "." + f.snm3.value + "." + f.snm4.value + "</span><a href=\"javascript:\" class=\"ObtLClose\">×</a></h4>";
                str += "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
                str += "<tbody><tr><th rowspan=\"2\">网络</th><th colspan=\"2\">主机</th><th rowspan=\"2\">广播地址</th></tr><tr><th>起始</th><th>结束</th></tr>";
                nodes = ((256 / networks));
                for (var i = 0; i < 256; i = i + nodes) {
                    j = i + 1;
                    topi = (i + nodes - 1) & 255;
                    topj = topi - 1;
                    if (networks == 128) {
                        j = i;
                        topi = (i + nodes - 1) & 255;
                        topj = topi;
                    }
                    str += "<tr><td>" + f.oct1.value + "." + f.oct2.value + "." + f.oct3.value + "." + i + "</td><td>" + f.oct1.value + "." + f.oct2.value + "." + f.oct3.value + "." + j + "</td><td>" + f.oct1.value + "." + f.oct2.value + "." + f.oct3.value + "." + topj + "</td><td>" + f.oct1.value + "." + f.oct2.value + "." + f.oct3.value + "." + topi + "</td></tr>";
                }
            }
            if (f.nwclass1.value == "B类网") {
                str += "网络 " + eval(f.snm1.value & f.oct1.value) + "." + eval(f.snm2.value & f.oct2.value) + ".0.0 ，掩码" + f.snm1.value + "." + f.snm2.value + "." + f.snm3.value + "." + f.snm4.value + "</span><a href=\"javascript:\" class=\"ObtLClose\">×</a></h4>";
                str += "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
                str += "<tbody><tr><th rowspan=\"2\">网络</th><th colspan=\"2\">主机</th><th rowspan=\"2\">广播地址</th></tr><tr><th>起始</th><th>结束</th></tr>";
                nodes = ((65536 / networks));
                for (var i = 0; i < 65536; i = i + nodes) {
                    count = count + 1;
                    i4 = i & 255;
                    i3 = (i / 256) & 255;
                    j = i4 + 1;
                    topi4 = ((i + nodes) - 1) & 255;
                    topi3 = (((i + nodes) - 1) / 256) & 255;
                    topj = topi4 - 1;
                    if (networks == 32768) {
                        j = i4;
                        topi4 = (i + nodes - 1) & 255;
                        topj = topi4;
                    }
                    str += "<tr><td>" + f.oct1.value + "." + f.oct2.value + "." + i3 + "." + i4 + "</td><td>" + f.oct1.value + "." + f.oct2.value + "." + i3 + "." + j + "</td><td>" + f.oct1.value + "." + f.oct2.value + "." + topi3 + "." + topj + "</td><td>" + f.oct1.value + "." + f.oct2.value + "." + topi3 + "." + topi4 + "</td></tr>";
                    if ((count == 256) && (networks > 512)) {
                        str += "<tr><td>..</td><td>..</td><td>..</td><td>..</td></tr>";
                        i = 65536 - (count * nodes);
                    }
                }
            }
            if (f.nwclass1.value == "A类网") {
                str += "网络 " + eval(f.snm1.value & f.oct1.value) + ".0.0.0 ，掩码" + f.snm1.value + "." + f.snm2.value + "." + f.snm3.value + "." + f.snm4.value + "</span><a href=\"javascript:\" class=\"ObtLClose\">×</a></h4>";
                str += "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
                str += "<tbody><tr><th rowspan=\"2\">网络</th><th colspan=\"2\">主机</th><th rowspan=\"2\">广播地址</th></tr><tr><th>起始</th><th>结束</th></tr>";
                nodes = ((16777216 / networks));
                for (var i = 0; i < 16777216; i = i + nodes) {
                    count = count + 1;
                    i4 = i & 255;
                    i3 = (i / 256) & 255;
                    i2 = (i / 65536) & 255;
                    j = i4 + 1;
                    topi4 = ((i + nodes) - 1) & 255;
                    topi3 = (((i + nodes) - 1) / 256) & 255;
                    topi2 = (((i + nodes) - 1) / 65536) & 255;
                    topj = topi4 - 1;
                    if (networks == 8388608) {
                        j = i4;
                        topi4 = (i + nodes - 1) & 255;
                        topj = topi4;
                    }
                    str += "<tr><td>" + f.oct1.value + "." + i2 + "." + i3 + "." + i4 + "</td><td>" + f.oct1.value + "." + i2 + "." + i3 + "." + j + "</td><td>" + f.oct1.value + "." + topi2 + "." + topi3 + "." + topj + "</td><td>" + f.oct1.value + "." + topi2 + "." + topi3 + "." + topi4 + "</td></tr>";
                    if ((count == 256) && (networks > 512)) {
                        str += "<tr><td>..</td><td>..</td><td>..</td><td>..</td></tr>";
                        i = 16777216 - (count * nodes);
                    }
                }
            }
        } else {
            str += "网络 0.0.0.0 ，掩码 0.0.0.0</span><a href=\"javascript:\" class=\"ObtLClose\">×</a></h4>";
            str += "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
            str += "<tbody><tr><th rowspan=\"2\">网络</th><th colspan=\"2\">主机</th><th rowspan=\"2\">广播地址</th></tr><tr><th>起始</th><th>结束</th></tr>";
            str += "<tr><td>无</td><td>无</td><td>无</td><td>无</td></tr>";
        }
        if (f.subsuper.value == "Supernetted") {
            str += "网络 " + f.nw1a.value + "." + f.nw2a.value + "." + f.nw3a.value + ".0 ，掩码" + f.snm1.value + "." + f.snm2.value + "." + f.snm3.value + "." + f.snm4.value + "</span><a href=\"javascript:\" class=\"ObtLClose\">×</a></h4>";
            str += "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
            str += "<tbody><tr><th rowspan=\"2\">网络</th><th colspan=\"2\">主机</th><th rowspan=\"2\">广播地址</th></tr><tr><th>起始</th><th>结束</th></tr>";
            i = f.nw4a.value + 1;
            j = f.broad4a.value - 1;
            str += "<tr><td>" + f.nw1a.value + "." + f.nw2a.value + "." + f.nw3a.value + "." + f.nw4a.value + "</td><td>" + f.nw1a.value + "." + f.nw2a.value + "." + f.nw3a.value + "." + i + "</td><td>" + f.broad1a.value + "." + f.broad2a.value + "." + f.broad3a.value + "." + j + "</td><td>" + f.broad1a.value + "." + f.broad2a.value + "." + f.broad3a.value + "." + f.broad4a.value + "</td></tr>";
        } 
        str += "</tbody></table>";
        jQuery("#netlist").html(str);
        jQuery("#netlist").append("<script type=\"text/javascript\">jQuery(\".ObtLClose\").on(\"click\",function(){jQuery(\".ObtainList\").addClass(\" autohide\");});</script>");
    }
}
function compute2(f) {
    var cf = f.cf.value;
//    if (f.cf.value == "2") cf = f.cf[1].value;
//    if (f.cf.value == "3") cf = f.cf[2].value;
//    if (f.cf.value == "4") cf = f.cf[3].value;
    if (code == "MSIE") {
        var node = f.node.value;
        var nw = f.network.value;
//        if (node > 0) {
//            nw = 0;
//            f.network.options.selectedIndex = 0;
//            node = eval(eval(node));
//        }
    } else {
        //var i = f.node.selectedIndex;
        var node = f.node.value;
        //var j = f.network.selectedIndex;
        var nw = f.network.value;
//        if (node > 0) {
//            nw = 0;
//            f.network.value = 0;
//            node = 0;
//        }
    }
    if ((nw == 0) && (node == 0)) nw = 1;
    var power2 = 2;
    if (f.oct1.value > 255) f.oct1.value = 255;
    if (f.oct2.value > 255) f.oct2.value = 255;
    if (f.oct3.value > 255) f.oct3.value = 255;
    if (f.oct4.value > 255) f.oct4.value = 255;
    if ((f.oct1.value > 0) && (f.oct1.value < 127)) f.nwclass.value = "A类网";
    if ((f.oct1.value > 127) && (f.oct1.value < 192)) f.nwclass.value = "B类网";
    if ((f.oct1.value > 191) && (f.oct1.value < 224)) f.nwclass.value = "C类网";
    if ((f.oct1.value < 1) || (f.oct1.value > 223)) {
        f.nwclass.value = "Illegal";
        f.nwclass1.value = "";
        f.subsuper.value = "";
        f.nwquant.value = 0;
        f.nodequant.value = 0;
        f.snm1.value = 0;
        f.snm2.value = 0;
        f.snm3.value = 0;
        f.snm4.value = 0;
        f.snmbits.value = 0;
    }
    if (((f.nwclass.value == "A类网") && (cf == 1)) || ((cf == 2) && (f.nwclass.value != "Illegal"))) {
        if (nw >= 1) node = 16777216 / nw;
        var nwtemp;
        if (node > 16777216) {
            f.nwclass1.value = "";
            nw = 1073741824 / node;
            nwtemp = nw;
            f.snm1.value = (~((64 / nw) - 1) & 255);
            f.snm2.value = 0;
            f.snm3.value = 0;
            f.snm4.value = 0;
            f.subsuper.value = "Supernetted";
            nw = 1;
        } else {
            f.nwclass1.value = "A类网";
            nw = 16777216 / node;
            nwtemp = nw;
            f.snm1.value = 255;
            f.snm2.value = (~((256 / nw) - 1) & 255);
            f.snm3.value = (~((65536 / nw) - 1) & 255);
            f.snm4.value = (~((16777216 / nw) - 1) & 255);
            f.subsuper.value = "子网是";
            power2 = power2 + 6;
        }
        while (nwtemp > 1) {
            nwtemp = nwtemp / 2;
            power2 = power2 + 1;
        }
        f.nodequant.value = node;
        f.nwquant.value = nw;
        f.snmbits.value = "/" + power2;
    }
    if (((f.nwclass.value == "B类网") && (cf == 1)) || ((cf == 3) && (f.nwclass.value != "Illegal"))) {
        if (nw > 32768) nw = 32768;
        if (nw >= 1) node = 65536 / nw;
        var nwtemp;
        if (node > 65536) {
            f.nwclass1.value = "";
            nw = 1073741824 / node;
            nwtemp = nw;
            f.snm1.value = (~((64 / nw) - 1) & 255);
            f.snm2.value = (~((16384 / nw) - 1) & 255);
            f.snm3.value = 0;
            f.snm4.value = 0;
            f.subsuper.value = "Supernetted";
            nw = 1;
        } else {
            f.nwclass1.value = "B类网";
            nw = 65536 / node;
            nwtemp = nw;
            f.snm1.value = 255;
            f.snm2.value = 255;
            f.snm3.value = (~((256 / nw) - 1) & 255);
            f.snm4.value = (~((65536 / nw) - 1) & 255);
            f.subsuper.value = "子网是";
            power2 = power2 + 14;
        }
        while (nwtemp > 1) {
            nwtemp = nwtemp / 2;
            power2 = power2 + 1;
        }
        f.nodequant.value = node;
        f.nwquant.value = nw;
        f.snmbits.value = "/" + power2;
    }
    if (((f.nwclass.value == "C类网") && (cf == 1)) || ((cf == 4) && (f.nwclass.value != "Illegal"))) {
        if (nw > 128) nw = 128;
        if (nw >= 1) node = 256 / nw;
        var nwtemp;
        if (node > 256) {
            f.nwclass1.value = "";
            nw = 1073741824 / node;
            nwtemp = nw;
            f.snm1.value = (~((64 / nw) - 1) & 255);
            f.snm2.value = (~((16384 / nw) - 1) & 255);
            f.snm3.value = (~((4194304 / nw) - 1) & 255);
            f.snm4.value = 0;
            f.subsuper.value = "Supernetted";
            nw = 1;
        } else {
            f.nwclass1.value = "C类网";
            nw = 256 / node;
            nwtemp = nw;
            f.snm1.value = 255;
            f.snm2.value = 255;
            f.snm3.value = 255;
            f.snm4.value = (~((256 / nw) - 1) & 255);
            f.subsuper.value = "子网是";
            power2 = power2 + 22;
        }

        while (nwtemp > 1) {
            nwtemp = nwtemp / 2;
            power2 = power2 + 1;
        }
        f.nodequant.value = node;
        f.nwquant.value = nw;
        f.snmbits.value = "/" + power2;
    }
//    f.snm1a.value = f.snm1.value;
//    f.snm2a.value = f.snm2.value;
//    f.snm3a.value = f.snm3.value;
//    f.snm4a.value = f.snm4.value;
//    f.oct1a.value = f.oct1.value;
//    f.oct2a.value = f.oct2.value;
//    f.oct3a.value = f.oct3.value;
//    f.oct4a.value = f.oct4.value;
//    f.oct1b.value = f.oct1.value;
//    f.oct2b.value = f.oct2.value;
//    f.oct3b.value = f.oct3.value;
//    f.oct4b.value = f.oct4.value;
//    compute(f);
//    compute3(f);
//    f.snm1c.value = f.snm1.value;
//    f.snm2c.value = f.snm2.value;
//    f.snm3c.value = f.snm3.value;
//    f.snm4c.value = f.snm4.value;
//    computeSNMA(f);
//    f.snm1d.value = f.snm1.value;
//    f.snm2d.value = f.snm2.value;
//    f.snm3d.value = f.snm3.value;
//    f.snm4d.value = f.snm4.value;
//    computeINV1(f);
//    if (((f.nw1a.value == 0) && (f.nw2a.value == 0) && (f.nw3a.value == 0) && (f.nw4a.value == 0)) || ((f.broad1a.value == 255) && (f.broad2a.value == 255) && (f.broad3a.value == 255) && (f.broad4a.value == 255))) {
//        f.nwclass.value = "Illegal";
//        f.nwclass1.value = "";
//        f.subsuper.value = "";
//        f.nwquant.value = 0;
//        f.nodequant.value = 0;
//        f.snm1.value = 0;
//        f.snm2.value = 0;
//        f.snm3.value = 0;
//        f.snm4.value = 0;
//        f.snmbits.value = 0;
//    }
}
function compute(f) {
    if (f.oct1a.value > 255) f.oct1a.value = 255;
    if (f.oct2a.value > 255) f.oct2a.value = 255;
    if (f.oct3a.value > 255) f.oct3a.value = 255;
    if (f.oct4a.value > 255) f.oct4a.value = 255;
    if (f.snm1a.value > 255) f.snm1a.value = 255;
    if (f.snm2a.value > 255) f.snm2a.value = 255;
    if (f.snm3a.value > 255) f.snm3a.value = 255;
    if (f.snm4a.value > 255) f.snm4a.value = 255;
    f.nw1a.value = eval(f.snm1a.value & f.oct1a.value);
    f.nw2a.value = eval(f.snm2a.value & f.oct2a.value);
    f.nw3a.value = eval(f.snm3a.value & f.oct3a.value);
    f.nw4a.value = eval(f.snm4a.value & f.oct4a.value);
    f.node1a.value = eval(~f.snm1a.value & f.oct1a.value);
    f.node2a.value = eval(~f.snm2a.value & f.oct2a.value);
    f.node3a.value = eval(~f.snm3a.value & f.oct3a.value);
    f.node4a.value = eval(~f.snm4a.value & f.oct4a.value);
    f.broad1a.value = ((f.nw1a.value) ^ (~f.snm1a.value) & 255);
    f.broad2a.value = ((f.nw2a.value) ^ (~f.snm2a.value) & 255);
    f.broad3a.value = ((f.nw3a.value) ^ (~f.snm3a.value) & 255);
    f.broad4a.value = ((f.nw4a.value) ^ (~f.snm4a.value) & 255);
}
function compute3(f) {
    if (f.oct1b.value > 255) f.oct1b.value = 255;
    if (f.oct2b.value > 255) f.oct2b.value = 255;
    if (f.oct3b.value > 255) f.oct3b.value = 255;
    if (f.oct4b.value > 255) f.oct4b.value = 255;
    f.bin1b.value = d2b(f.oct1b.value);
    f.bin2b.value = d2b(f.oct2b.value);
    f.bin3b.value = d2b(f.oct3b.value);
    f.bin4b.value = d2b(f.oct4b.value);
    f.hex1b.value = d2h(f.oct1b.value);
    f.hex2b.value = d2h(f.oct2b.value);
    f.hex3b.value = d2h(f.oct3b.value);
    f.hex4b.value = d2h(f.oct4b.value);
    f.dec1b.value = eval(f.oct1b.value * 16777216) + eval(f.oct2b.value * 65536) + eval(f.oct3b.value * 256) + eval(f.oct4b.value);
}
function compute4(f) {
    f.oct1b.value = b2d(f.bin1b.value);
    f.oct2b.value = b2d(f.bin2b.value);
    f.oct3b.value = b2d(f.bin3b.value);
    f.oct4b.value = b2d(f.bin4b.value);
    f.hex1b.value = d2h(f.oct1b.value);
    f.hex2b.value = d2h(f.oct2b.value);
    f.hex3b.value = d2h(f.oct3b.value);
    f.hex4b.value = d2h(f.oct4b.value);
    f.dec1b.value = eval(f.oct1b.value * 16777216) + eval(f.oct2b.value * 65536) + eval(f.oct3b.value * 256) + eval(f.oct4b.value);
}
function compute5(f) {
    f.oct1b.value = h2d(f.hex1b.value);
    f.oct2b.value = h2d(f.hex2b.value);
    f.oct3b.value = h2d(f.hex3b.value);
    f.oct4b.value = h2d(f.hex4b.value);
    f.bin1b.value = d2b(f.oct1b.value);
    f.bin2b.value = d2b(f.oct2b.value);
    f.bin3b.value = d2b(f.oct3b.value);
    f.bin4b.value = d2b(f.oct4b.value);
    f.dec1b.value = eval(f.oct1b.value * 16777216) + eval(f.oct2b.value * 65536) + eval(f.oct3b.value * 256) + eval(f.oct4b.value);
}
function compute6(f) {
    f.oct1b.value = f.dec1b.value >>> 24;
    f.oct2b.value = (f.dec1b.value << 8) >>> 24;
    f.oct3b.value = (f.dec1b.value << 16) >>> 24;
    f.oct4b.value = (f.dec1b.value << 24) >>> 24;
    f.bin1b.value = d2b(f.oct1b.value);
    f.bin2b.value = d2b(f.oct2b.value);
    f.bin3b.value = d2b(f.oct3b.value);
    f.bin4b.value = d2b(f.oct4b.value);
    f.hex1b.value = d2h(f.oct1b.value);
    f.hex2b.value = d2h(f.oct2b.value);
    f.hex3b.value = d2h(f.oct3b.value);
    f.hex4b.value = d2h(f.oct4b.value);
}
function computeSNMA(f) {
    f.snm1c.value = snmcorrect(f.snm1c.value);
    if (f.snm1c.value < 255) {
        f.snm2c.value = 0;
        f.snm3c.value = 0;
        f.snm4c.value = 0;
    } else {
        f.snm2c.value = snmcorrect(f.snm2c.value);
        if (f.snm2c.value < 255) {
            f.snm1c.value = 255;
            f.snm3c.value = 0;
            f.snm4c.value = 0;
        } else {
            f.snm3c.value = snmcorrect(f.snm3c.value);
            if (f.snm3c.value < 255) {
                f.snm1c.value = 255;
                f.snm2c.value = 255;
                f.snm4c.value = 0;
            } else {
                f.snm4c.value = snmcorrect(f.snm4c.value);
            }
        }
    }
    bits = 0;
    bits = bits + d2bits(f.snm1c.value);
    bits = bits + d2bits(f.snm2c.value);
    bits = bits + d2bits(f.snm3c.value);
    bits = bits + d2bits(f.snm4c.value);
    f.snmbitsc.value = bits;
}
function computeSNMB(f) {
    if (f.snmbitsc.value < 0) f.snmbitsc.value = 0;
    if (f.snmbitsc.value > 32) f.snmbitsc.value = 32;
    f.snm1c.value = bits2d(f.snmbitsc.value);
    f.snm2c.value = bits2d(f.snmbitsc.value - 8);
    f.snm3c.value = bits2d(f.snmbitsc.value - 16);
    f.snm4c.value = bits2d(f.snmbitsc.value - 24);
}
function computeINV1(f) {
    f.snm1e.value = ~(f.snm1d.value) & 255;
    f.snm2e.value = ~(f.snm2d.value) & 255;
    f.snm3e.value = ~(f.snm3d.value) & 255;
    f.snm4e.value = ~(f.snm4d.value) & 255;
}
       