//function initialize() {};

$("div.edit").on({click: function() {
    alert("Goobye");
    //$(this).toggleClass("invisible");
    }
});

var parallax_background = function(id_element, x_weakness, y_weakness, layout, position_top = 0, position_left = 0) {
    layout.mousemove(function(e) {
		var x = position_left -(e.pageX + this.offsetLeft) / x_weakness;
		var y = position_top -(e.pageY + this.offsetTop) / y_weakness;
		id_element.css('background-position', x +  'px ' + y + 'px ');
	});
};