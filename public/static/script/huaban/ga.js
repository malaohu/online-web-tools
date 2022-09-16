var line_color = '#000';
var line_size = 3;
$(function() {
    $('.tool .color div').click(function() {
        $('.tool .color div').removeClass('active');
        $(this).addClass('active');
        line_color = $(this).data('color');
        mouseDot.fill = line_color;
    });

    $('.tool .size div').click(function() {
        $('.tool .size div').removeClass('active');
        $(this).addClass('active');
        line_size = $(this).data('size');
        mouseDot.radius = Math.max(line_size / 2, 3);
    });
});


var childrens = new Array();

var c = document.querySelector("#canvas"),
    ctx = c.getContext("2d");
// c.width = window.innerWidth;
// c.height = window.innerHeight;
c.addEventListener("touchmove", function(e) {
    e.preventDefault();
}, false);


var cs = oCanvas.create({
    canvas: "#canvas",
    background: "#fff",
    fps: 30,
    disableScrolling: true
});

var isDraw = false;
var xx = 0;
var yy = 0;
var mouseDot;

clearAll();

cs.bind('mousedown', function() {
    drawBegin(cs.mouse.x, cs.mouse.y);
}).bind('touchstart tap', function() {
    drawBegin(cs.touch.x, cs.touch.y);
}).bind('mouseup touchend', function() {
    isDraw = false;
}).bind('mousemove', function() {
    drawMove(cs.mouse.x, cs.mouse.y);
}).bind('touchmove', function() {
    drawMove(cs.touch.x, cs.touch.y);
});

/*
cs.setLoop(function () {
	mouseDot.x = cs.mouse.x;
	mouseDot.y = cs.mouse.y;
}).start();
*/

function drawBegin(x, y) {
    isDraw = true;

    xx = x;
    yy = y;

    var dot = cs.display.arc({
        x: x,
        y: y,
        radius: line_size / 2,
        start: 0,
        end: 360,
        fill: line_color
    });

    cs.addChild(dot);
    add_child(dot);
}

function drawMove(x, y) {
    if (isDraw) {
        var line = cs.display.line({
            start: {
                x: xx,
                y: yy
            },
            end: {
                x: x,
                y: y
            },
            stroke: '' + line_size + 'px ' + line_color,
            cap: "round"
        });

        cs.addChild(line);
        add_child(line);
        xx = x;
        yy = y;
    } else {
        mouseDot.moveTo(x, y);
        cs.addChild(mouseDot);
        cs.draw.redraw();
    }
}

function clearAll() {
    cs.reset();

    // 处理鼠标
    cs.mouse.hide();

    mouseDot = cs.display.arc({
        x: -100,
        y: -100,
        radius: Math.max(line_size / 2, 3),
        start: 0,
        end: 360,
        fill: line_color,
        shadow: '0 0 5px #333'
    });

    cs.addChild(mouseDot);
}

function add_child(d) {
    childrens.push(d);
}

function re_draw() {
    var child = childrens.pop();
    if (child) {
        cs.removeChild(child);
        cs.draw.redraw();
    }
}

function saveImageInfo() {
    var mycanvas = document.getElementById("canvas");
    var image = mycanvas.toDataURL("image/png");
    var w = window.open('about:blank', 'image_from_atool');
    w.document.write("<img src='" + image + "' alt='image_from_atool'/>");
}
