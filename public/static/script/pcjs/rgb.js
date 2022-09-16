     String.prototype.startWith = function (str) {
            var reg = new RegExp("^" + str);
            return reg.test(this);
        }

        String.prototype.trim = function () {
            return this.replace(/(^\s*)|(\s*$)/g, "");
        }

        $(function () {
            $("#hexInp").keyup(function () {
                var hex = $(this).val().trim();
                if (hex.startWith('#')) {
                    hex = hex.substr(1, hex.length);
                }
                if (hex.length == 3) {
                    var arr = hex.split('');
                    _a1 = arr[0];
                    _a2 = arr[1];
                    _a3 = arr[2];
                    hex = _a1 + _a1 + _a2 + _a2 + _a3 + _a3;
                }
                //alert(hex);
                var rgb = HexToRGB(hex);
                if (appendRgb.checked) {
                    rgb = "rgb(" + rgb + ")";
                }
                $("#outRgb").val(rgb);
            });

            $("#appendRgb").click(function () {
                var oldOutRgb = $("#outRgb").val().trim();
                if (oldOutRgb != "") {

                    if ($(this).is(":checked")) {

                        oldOutRgb = "rgb(" + oldOutRgb + ")";
                    } else {
                        oldOutRgb = oldOutRgb.replace("rgb(", "").replace(")", "");
                    }
                    $("#outRgb").val(oldOutRgb);
                }
            });

            $("#rgbInp").keyup(function () {
                var rgb = $(this).val();
                rgb = rgb.toUpperCase();
                if (rgb.startsWith("RGB")) {
                    rgb = rgb.replace("RGB(", "").replace(")", "");
                }
                var rgb1 = "";
                if (rgb.indexOf(",") != -1) {
                    rgb1 = rgb.split(",");
                } else if (rgb.indexOf(" ") != -1) {
                    rgb1 = rgb.split(" ");
                }
                $("#outHex").val("#" + RGBToHex(rgb1));
            });
        })
        function GiveRGB(Hex) {
            if (Hex == "A")
                Value = 10;
            else
                if (Hex == "B")
                    Value = 11;
                else
                    if (Hex == "C")
                        Value = 12;
                    else
                        if (Hex == "D")
                            Value = 13;
                        else
                            if (Hex == "E")
                                Value = 14;
                            else
                                if (Hex == "F")
                                    Value = 15;
                                else
                                    Value = eval(Hex)
            return Value;
        }
        function GiveHex(RGB) {
            if (RGB == 10)
                Value = "A";
            else
                if (RGB == 11)
                    Value = "B";
                else
                    if (RGB == 12)
                        Value = "C";
                    else
                        if (RGB == 13)
                            Value = "D";
                        else
                            if (RGB == 14)
                                Value = "E";
                            else
                                if (RGB == 15)
                                    Value = "F";
                                else
                                    Value = "" + RGB;
            return Value;
        }
        function HexToRGB(Input) {
            Input = Input.toUpperCase();

            a = GiveRGB(Input.substring(0, 1));
            b = GiveRGB(Input.substring(1, 2));
            c = GiveRGB(Input.substring(2, 3));
            d = GiveRGB(Input.substring(3, 4));
            e = GiveRGB(Input.substring(4, 5));
            f = GiveRGB(Input.substring(5, 6));

            x = (a * 16) + b;
            y = (c * 16) + d;
            z = (e * 16) + f;
            return x + "," + y + "," + z;
        }
        function RGBToHex(rgb1) {
            Red = rgb1[0];
            Green = rgb1[1];
            Blue = rgb1[2];

            a = GiveHex(Math.floor(Red / 16));
            b = GiveHex(Red % 16);
            c = GiveHex(Math.floor(Green / 16));
            d = GiveHex(Green % 16);
            e = GiveHex(Math.floor(Blue / 16));
            f = GiveHex(Blue % 16);

            z = a + b + c + d + e + f;

            return z;
        }