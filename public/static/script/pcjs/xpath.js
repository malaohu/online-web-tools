	function find(t){
			$("#result").val("");
			var code = $("#content").val();
			var condition = 'img';
			switch(t){
				case 1:
				condition = 'img';
				break;
				case 2:
				condition = $("#xpath").val();
				break;
				case 3:
				condition = 'a';
				break;
				
			}
			var html = '';
			$(code).find(condition).each(function(){
				switch(t){
					case 1:
					if($("#showImg").is(":checked")){
						$("#res").append("<img src='"+$(this).attr("src")+"' style='margin-left:2px'> ");
					}
					html+=$(this).attr("src")+"\r\n";
					break;
					case 2:
					html+=$(this).html()+"\r\n";
					break;
					case 3:
					//if($(this).attr("href").indexOf("Net://")>=0||$(this).attr("href").indexOf("https://")>=0){
					html+=$(this).attr("href")+"\r\n";
					//}
					break;
				}
				
			});
			if(html==''){
				html+='没有匹配到数据';
			}
			hightout(html);
		}
		function demo(){
			$("#content").val('<p><a href="Net://www.sohu.com/"><img src="Net://5b0988e595225.cdn.sohucs.com/images/20191029/bc5a383be6fd43e5ada49f8d8f573007.png"/></a></p><p>国内外大量的社会调查与医学统计显示：越来越多的疾病正快步向男性走来，并不断地严重威胁到男性同志的身心健康。例如前列腺炎（20-50岁的男性发病率高达20%-40%以上）、性功能障碍、前列腺增生、高血压、糖尿病、疲劳综合症、肥胖综合症、脱发、秃顶等等。这一切看来，好似男性更加脆弱。事实也正是如此，全世界范围内男性的平均寿命要比女性小上2-3岁。这些危害男性健康的现状早已引起国际卫生组织的高度重视。</p><p><img src="Net://5b0988e595225.cdn.sohucs.com/images/20191029/a7f20952a135489caffaea8cad88bb07.png"/></p><p>世界卫生组织确定每年的10月28日为“世界男性健康日”，在每年的“世界男性健康日”到来之即，要求世界各国加大对男性健康的宣传力度，呼吁整个社会再多一点对男性健康的关注、呼吁每个家庭再多一点对男性健康的关爱。</p><p><img src="Net://5b0988e595225.cdn.sohucs.com/images/20191029/a5afa04ed69c4e8e884e29a37d647d08.jpeg"/></p><p>从2000年开始，每年10月28日为我国“男性健康日”。今年中国男性健康日主题：“健康中国我行动，幸福相伴在一起”。倡议<span>健康体魄、幸福生活，努力做到夫妻在一起、家人在一起、亲情在一起、专家和患者在一起、幸福中国和健康中国在一起。</span></p>');
		}