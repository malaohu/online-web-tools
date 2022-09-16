        function setSize(bit,byte1,kb,mb,gb,tb){
            $("#bitTxt").val(bit);
            $("#bytesTxt").val(byte1);
            $("#kbTxt").val(kb);
            $("#mbTxt").val(mb);
            $("#gbTxt").val(gb);
            $("#tbTxt").val(tb);
        }
    
        $("#bitTxt").keyup(function(){
            var value = $(this).val();
            if(value=="")return;
            value = parseFloat(value);
            var bit = value;
            var byte1 = value/8;
            var kb = value/8/1024;
            var mb = value/8/1024/1024;
            var gb = value/8/1024/1024/1024;
            var tb = value/8/1024/1024/1024/1024;
            setSize(bit,byte1,kb,mb,gb,tb);
        })
        
        $("#bytesTxt").keyup(function(){
            var value = $(this).val();
            if(value=="")return;
            value = parseFloat(value);
            var bit = value*8;
            var byte1 = value;
            var kb = value/1024;
            var mb = value/1024/1024;
            var gb = value/1024/1024/1024;
            var tb = value/1024/1024/1024/1024;
            setSize(bit,byte1,kb,mb,gb,tb);
        })
        
        $("#kbTxt").keyup(function(){
            var value = $(this).val();
            if(value=="")return;
            value = parseFloat(value);
            var bit = value*8*1024;
            var byte1 = value*1024;
            var kb = value;
            var mb = value/1024;
            var gb = value/1024/1024;
            var tb = value/1024/1024/1024;
            setSize(bit,byte1,kb,mb,gb,tb);
        })
        
        $("#mbTxt").keyup(function(){
            var value = $(this).val();
            if(value=="")return;
            value = parseFloat(value);
            var bit = value*8*1024*1024;
            var byte1 = value*1024*1024;
            var kb = value*1024;
            var mb = value;
            var gb = value/1024;
            var tb = value/1024/1024;
            setSize(bit,byte1,kb,mb,gb,tb);
        })
        
        $("#gbTxt").keyup(function(){
            var value = $(this).val();
            if(value=="")return;
            value = parseFloat(value);
            var bit = value*8*1024*1024*1024;
            var byte1 = value*1024*1024*1024;
            var kb = value*1024*1024;
            var mb = value*1024;
            var gb = value;
            var tb = value/1024;
            setSize(bit,byte1,kb,mb,gb,tb);
        })
        
        $("#tbTxt").keyup(function(){
            var value = $(this).val();
            if(value=="")return;
            value = parseFloat(value);
            var bit = value*8*1024*1024*1024*1024;
            var byte1 = value*1024*1024*1024*1024;
            var kb = value*1024*1024*1024;
            var mb = value*1024*1024;
            var gb = value*1024;
            var tb = value;
            setSize(bit,byte1,kb,mb,gb,tb);
        })
        