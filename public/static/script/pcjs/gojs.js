$(function()
{
	const emptyInputMsg = "请输入要转为go结构体的Json";
	const emptyOutputMsg = "这里显示转换后的Golang结构体";
	const formattedEmptyInputMsg = ''+emptyInputMsg+'';
	const formattedEmptyOutputMsg = ''+emptyOutputMsg+'';

__=['\x23\x69\x6e\x70\x75\x74',"\x76\x61\x6c","\x74\x72\x69\x6d",'\x23\x6f\x75\x74\x70\x75\x74',"\x68\x74\x6d\x6c","",'\x23\x69\x6e\x6c\x69\x6e\x65',"\x69\x73",'\x3a\x63\x68\x65\x63\x6b\x65\x64',"\x65\x72\x72\x6f\x72",'\x3c\x73\x70\x61\x6e \x63\x6c\x61\x73\x73\x3d\x22\x63\x6c\x72\x2d\x72\x65\x64\x22\x3e','\x3c\x2f\x73\x70\x61\x6e\x3e',"\x6c\x6f\x67","\x45\x52\x52\x4f\x52\x3a","\x6d\x61\x74\x63\x68","\x6c\x65\x6e\x67\x74\x68","\x67\x6f",'\x66\x75\x6e\x63\x74\x69\x6f\x6e',"\x68\x69\x67\x68\x6c\x69\x67\x68\x74","\x76\x61\x6c\x75\x65"];function doConversion(){var QWPX1 = $(__[0])[__[1]]()[__[2]]();if (!QWPX1 || QWPX1 == emptyInputMsg){$(__[3])[__[4]](formattedEmptyOutputMsg);return;};let output = jsonToGo(QWPX1, __[5], !$(__[6])[__[7]](__[8]), false);if (output[__[9]]){$(__[3])[__[4]](__[10]+output[__[9]]+__[11]);console[__[12]](__[13], output, output[__[9]]);var UTMENsHr2 = output[__[9]][__[14]](/Unexpected token .+ in JSON at position (\d+)/);if (UTMENsHr2) {try {var JTwdRb$OM3 = UTMENsHr2[__[15]] == 2 && UTMENsHr2[1] && window["\x70\x61\x72\x73\x65\x49\x6e\x74"](UTMENsHr2[1]);JTwdRb$OM3 && $(__[3])[__[4]](constructJSONErrorHTML(output[__[9]], JTwdRb$OM3, QWPX1));} catch(e) {};}}else{var drrp4 = output[__[16]];if (typeof gofmt === __[17]);drrp4 = gofmt(output[__[16]]);var q5 = hljs[__[18]](__[16], drrp4);$(__[3])[__[4]](q5[__[19]]);}}
	$('#input').on('focus', function()
	{
		var val = $(this).text();
		if (!val)
		{
			$(this).html(formattedEmptyInputMsg);
			$('#output').html(formattedEmptyOutputMsg);
		}else if (val == emptyInputMsg){
			$(this).html("");
		}
	});

	$('#input').on('blur', function()
	{
		var val = $(this).text();
		if (!val)
		{
			$(this).html(formattedEmptyInputMsg);
			$('#output').html(formattedEmptyOutputMsg);
		}
	}).blur();

	$('#input').keydown(function(e)
	{
		if (e.keyCode == 9)
		{
			document.execCommand('insertHTML', false, '&#009'); 
			e.preventDefault(); 
		}
	});

	$('#input').keyup(function()
	{
		doConversion();
	});
	$('#json2go').click(function()
	{
		doConversion();
	});
	$('#inline').change(function()
	{
		doConversion();
	})

	$('#output').click(function()
	{
		if (document.selection)
		{
			var range = document.body.createTextRange();
			range.moveToElementText(this);
			range.select();
		}else if (window.getSelection){
			var range = document.createRange();
			range.selectNode(this);
			var sel = window.getSelection();
			sel.removeAllRanges(); 
			sel.addRange(range);
		}
	});

	$('#sample1').click(function()
	{
		$('#input').val(stringify(sampleJson1)).keyup();
	});
	$('#sample2').click(function()
	{
		$('#input').val(stringify(sampleJson2)).keyup();
	});

	var dark = false;
	$("#dark").click(function()
	{
		if(!dark)
		{
			$("head").append("<link rel='stylesheet' href='resources/css/dark.css' id='dark-css'>");
			$("#dark").html("light mode");
		} else
		{
			$("#dark-css").remove();
			$("#dark").html("dark mode");
		}
		dark = !dark;
	});

	$("#copy-btn").click(function() {
		var elm = document.getElementById("output");

		if(document.body.createTextRange) {
			var range = document.body.createTextRange();
			range.moveToElementText(elm);
			range.select();
			document.execCommand("Copy");
		} else if(window.getSelection) {
			var selection = window.getSelection();
			var range = document.createRange();
			range.selectNodeContents(elm);
			selection.removeAllRanges();
			selection.addRange(range);
			document.execCommand("Copy");
		}
	})
});

function constructJSONErrorHTML(rawErrorMessage, errorIndex, json) {
	var errorHeading = '<p><span class="clr-red">'+ rawErrorMessage +'</span><p>';
	var markedPart = '<span class="json-go-faulty-char">' + json[errorIndex] + '</span>';
	var markedJsonString = [json.slice(0, errorIndex), markedPart, json.slice(errorIndex+1)].join('');
	var jsonStringLines = markedJsonString.split(/\n/);
	for(var i = 0; i < jsonStringLines.length; i++) {

	if(jsonStringLines[i].indexOf('<span class="json-go-faulty-char">') > -1){
		var wrappedLine = '<div class="faulty-line">' + jsonStringLines[i] + '</div>';
	}else{
		var wrappedLine = '<div>' + jsonStringLines[i] + '</div>';
	}
		jsonStringLines[i] = wrappedLine;
	}
	return (errorHeading + jsonStringLines.join(''));
}

function stringify(json)
{
	return JSON.stringify(json, null, "\t");
}

var sampleJson1 = [
	{
		"input_index": 0,
		"candidate_index": 0,
		"delivery_line_1": "1 N Rosedale St",
		"last_line": "Baltimore MD 21229-3737",
		"delivery_point_barcode": "212293737013",
		"components": {
			"primary_number": "1",
			"street_predirection": "N",
			"street_name": "Rosedale",
			"street_suffix": "St",
			"city_name": "Baltimore",
			"state_abbreviation": "MD",
			"zipcode": "21229",
			"plus4_code": "3737",
			"delivery_point": "01",
			"delivery_point_check_digit": "3"
		},
		"metadata": {
			"record_type": "S",
			"zip_type": "Standard",
			"county_fips": "24510",
			"county_name": "Baltimore City",
			"carrier_route": "C047",
			"congressional_district": "07",
			"rdi": "Residential",
			"elot_sequence": "0059",
			"elot_sort": "A",
			"latitude": 39.28602,
			"longitude": -76.6689,
			"precision": "Zip9",
			"time_zone": "Eastern",
			"utc_offset": -5,
			"dst": true
		},
		"analysis": {
			"dpv_match_code": "Y",
			"dpv_footnotes": "AABB",
			"dpv_cmra": "N",
			"dpv_vacant": "N",
			"active": "Y"
		}
	},
	{
		"input_index": 0,
		"candidate_index": 1,
		"delivery_line_1": "1 S Rosedale St",
		"last_line": "Baltimore MD 21229-3739",
		"delivery_point_barcode": "212293739011",
		"components": {
			"primary_number": "1",
			"street_predirection": "S",
			"street_name": "Rosedale",
			"street_suffix": "St",
			"city_name": "Baltimore",
			"state_abbreviation": "MD",
			"zipcode": "21229",
			"plus4_code": "3739",
			"delivery_point": "01",
			"delivery_point_check_digit": "1"
		},
		"metadata": {
			"record_type": "S",
			"zip_type": "Standard",
			"county_fips": "24510",
			"county_name": "Baltimore City",
			"carrier_route": "C047",
			"congressional_district": "07",
			"rdi": "Residential",
			"elot_sequence": "0064",
			"elot_sort": "A",
			"latitude": 39.2858,
			"longitude": -76.66889,
			"precision": "Zip9",
			"time_zone": "Eastern",
			"utc_offset": -5,
			"dst": true
		},
		"analysis": {
			"dpv_match_code": "Y",
			"dpv_footnotes": "AABB",
			"dpv_cmra": "N",
			"dpv_vacant": "N",
			"active": "Y"
		}
	}
];
function Empty(){
	$("#input").val('');
	$("#output").html('');

}