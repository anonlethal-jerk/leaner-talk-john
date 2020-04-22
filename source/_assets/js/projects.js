/*
Project SVG connectors
*/

// all tables...
if (window.innerWidth > 720) {
	connect_tables()
};

window.addEventListener('resize', () => {
	var svgs = document.querySelectorAll('svg');
	svgs.forEach(function(asvg) {
		asvg.remove();
	});
	if (window.innerWidth > 720) {
		connect_tables()
	};
});

function connect_tables() {

	var project_tables = document.querySelectorAll('.table--projects');
	// var warttbl = document.getElementById('warttbl');
	var tbl_1_points = [];
	var tbl_2_points = [];
	project_tables.forEach(function(tbl) {
		var tbl_width = tbl.offsetWidth;
	if (document.body.classList.contains('body--projects--lines')) {
		var svg_height = Math.floor(Math.random()*100) + 15;
	} else {
		var svg_height = Math.floor(Math.random()*200) + 15;
	}
		var table_cells = tbl.querySelectorAll('td')

		if (tbl_1_points.length == 0) {
			tbl_1_points.push(0);
			table_cells.forEach(function(cel) {
				// var cel_width = cel.offsetWidth;
				var cel_width = cel.getBoundingClientRect().width;
				tbl_1_points.push(tbl_1_points[tbl_1_points.length-1] + cel_width);
				// console.log('cell width: ' + cel_width);
			});

		} else {
			tbl_2_points.push(0);
			var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
			svg.setAttribute('width', tbl_width);
			svg.setAttribute('height', svg_height);
	if (document.body.classList.contains('body--projects--lines')) {
			var line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
			line.setAttribute('x1', .5);
			line.setAttribute('y1', -.5);
			line.setAttribute('x2', .5);
			line.setAttribute('y2', svg_height + .5);
			line.style.stroke = '#333';
			line.style.strokeWidth = '1px';
			svg.appendChild(line);
	};

			table_cells.forEach(function(cel) {
				// var cel_width = cel.offsetWidth;
				var cel_width = cel.getBoundingClientRect().width;
				tbl_2_points.push(tbl_2_points[tbl_2_points.length-1] + cel_width);
				if (tbl_2_points.length == table_cells.length + 1) {
	if (document.body.classList.contains('body--projects--lines')) {
					tbl_1_points[tbl_1_points.length-1] = tbl_width - 1;
					tbl_2_points[tbl_2_points.length-1] = tbl_width - 1;
	} else {
					tbl_1_points[tbl_1_points.length-1] = tbl_width;
					tbl_2_points[tbl_2_points.length-1] = tbl_width;
	}
				}

	if (document.body.classList.contains('body--projects--lines')) {
				var line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
				line.setAttribute('x1', tbl_1_points[tbl_2_points.length-1] + .5);
				line.setAttribute('y1', -.5);
				line.setAttribute('x2', tbl_2_points[tbl_2_points.length-1] + .5);
				line.setAttribute('y2', svg_height + .5);
				line.style.stroke = '#333';
				line.style.strokeWidth = '1px';
				svg.appendChild(line);
	} else {
				var poly = document.createElementNS('http://www.w3.org/2000/svg', 'polygon');
				poly.setAttribute('points', tbl_1_points[tbl_2_points.length-2]+',0 '+tbl_1_points[tbl_2_points.length-1]+',0 '+tbl_2_points[tbl_2_points.length-1]+','+svg_height+' '+tbl_2_points[tbl_2_points.length-2]+','+svg_height+'');
				// var blackwhite = Math.round(Math.random())*255;
				var blackwhite = 0;
				poly.style.fill = 'rgba('+blackwhite+','+blackwhite+','+blackwhite+','+(Math.random())+')';
				poly.style.stroke = 'none';
				svg.appendChild(poly);
	}

				console.log('cell width: ' + cel_width);
			});

			tbl.before(svg);
			tbl_1_points = tbl_2_points;
			tbl_2_points = [];
		}

	});
};
