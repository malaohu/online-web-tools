function formatDate(now) {
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var date = now.getDate();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    return year + "-" + (month = month < 10 ? ("0" + month) : month) + "-" + (date = date < 10 ? ("0" + date) : date) + " " + (hour = hour < 10 ? ("0" + hour) : hour) + ":" + (minute = minute < 10 ? ("0" + minute) : minute) + ":" + (second = second < 10 ? ("0" + second) : second);
}
var output;
var websocket;
function init() {
    output = document.getElementById("output");
    testWebSocket();
}

function addsocket() {
    var wsaddr = $("#wsaddr").val();
    if (wsaddr == '') {
        pcjson_com_msg($("#wsaddr"), "请填写Websocket测试地址");
        return false;
    }
    StartWebSocket(wsaddr);
}

function closesocket() {
    if (websocket) {
        websocket.close();
    }
    else {
        writeToScreen("<span style='color:red'>Websocket未连接，无需进行断开操作！</span>");
    }
}

function StartWebSocket(wsUri) {
    websocket = new WebSocket(wsUri);
    websocket.onopen = function (evt) { onOpen(evt) };
    websocket.onclose = function (evt) { onClose(evt) };
    websocket.onmessage = function (evt) { onMessage(evt) };
    websocket.onerror = function (evt) { onError(evt) };
}

function onOpen(evt) {
    writeToScreen("<span style='color:red'>连接成功，现在你可以发送信息进行测试了！</span>");
}
function onClose(evt) {
    writeToScreen("<span style='color:red'>Websocket连接已断开！</span>");
    websocket.close();
}
function onMessage(evt) {
    writeToScreen('<span style="color:blue">服务端回应&nbsp;' + formatDate(new Date()) + '</span><br/><span>' + evt.data + '</span>');
}
function onError(evt) {
    writeToScreen('<span style="color: red;">发生错误:</span> ' + evt.data);
}
function SendMessage() {
    var message = $("#message").val();
    if (message == '') {
        pcjson_com_msg($("#message"), "请先填写要测试发送的消息");
        $("#message").focus();
        return false;
    }
    if (typeof websocket === "undefined") {
        pcjson_com_msg($("#message"), "Websocket还没有连接或者连接失败，请进行检测");
        return false;
    }
    if (websocket.readyState == 3) {
        pcjson_com_msg($("#message"), "Websocket已经关闭，请重新连接");
        return false;
    }
    $("#message").val('');
    writeToScreen('<span style="color:green">你发送的信息&nbsp;' + formatDate(new Date()) + '</span><br/>' + message);
    websocket.send(message);
}
function writeToScreen(message) {
    var div = "<div>" + message + "</div>";
    var d = $("#output");
    var d = d[0];
    var doScroll = d.scrollTop == d.scrollHeight - d.clientHeight;
    $("#output").append(div);
    if (doScroll) {
        d.scrollTop = d.scrollHeight - d.clientHeight;
    }
}
function en(event) {
    var evt = evt ? evt : (window.event ? window.event : null);
    if (evt.keyCode == 13) {
        SendMessage()
    }
}
$("#demo1").click(function(){
	var src = (document.location.protocol == "Net:") ?"ws://echo.websocket.org":"wss://echo.websocket.org";
	wsaddr.value=src;
});
function Empty() {
    $("#wsaddr").val("");
    $("#message").val("");
    $("#output").html("");
}