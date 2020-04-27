/*
Project SVG connectors
*/

function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}

// only connect tables if ~desktop
if (document.getElementById('punchlist').getBoundingClientRect().width >= 710) {
	connect_tables('.tables--done .table--projects');
	connect_tables('.tables--to_do .table--projects');
};

// redraw connections on window resize
window.addEventListener('resize', () => {
	// delete all previous svgs (kind of nice effect if you don't though)
	var svgs = document.querySelectorAll('svg');
	svgs.forEach(function(asvg) {
		asvg.remove();
	});
	// only redraw tables if ~desktop
	if (document.getElementById('punchlist').getBoundingClientRect().width >= 710) {
		connect_tables('.tables--done .table--projects');
		connect_tables('.tables--to_do .table--projects');
	};
	console.log(document.getElementById('punchlist').getBoundingClientRect().width+' : '+window.clientWidth);
});

function connect_tables(a_tables) {
	// get all the tables
	var project_tables = document.querySelectorAll(a_tables);
	// arrays to track cell widths
	var tbl_1_points = [];
	var tbl_2_points = [];

	// cycle through all the tables
	project_tables.forEach(function(tbl) {
		var tbl_width = tbl.getBoundingClientRect().width;
console.log('table width: ' + tbl_width);

		// there are two versions of the svg styling - lines & fills
		if (document.body.classList.contains('body--projects--lines')) {
			// if this is the lines version, set heights
			var svg_height = Math.floor(Math.random()*100) + 15;
		} else {
			// if this is the fills version, set heights
			var svg_height = Math.floor(Math.random()*200) + 15;
		}

		// get all the table cells
		var table_cells = tbl.querySelectorAll('td')

		if (tbl_1_points.length == 0) {
			// if this is the first table
			// add zero as start point
			tbl_1_points.push(0);
			// cycle through the cells
			table_cells.forEach(function(cel) {
				// get the cell width and add to array
				var cel_width = cel.getBoundingClientRect().width;
				tbl_1_points.push(tbl_1_points[tbl_1_points.length-1] + cel_width);
console.log('cell width: ' + cel_width);
			});
console.log('table points: ' + tbl_1_points);

		} else {
			// if this is not the first table
			// add zero as start point
			tbl_2_points.push(0);
			// create and set initial svg attributes
			var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
			svg.setAttribute('width', tbl_width);
			svg.setAttribute('height', svg_height);
			// there are two versions of the svg styling - lines & fills
			if (document.body.classList.contains('body--projects--lines')) {
				// if this is the lines version, set initial line and styles
				var line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
				line.setAttribute('x1', .5);
				line.setAttribute('y1', -.5);
				line.setAttribute('x2', .5);
				line.setAttribute('y2', svg_height + .5);
				line.style.stroke = '#333';
				line.style.strokeWidth = '1px';
				svg.appendChild(line);
			};

			// cycle through the cells
			table_cells.forEach(function(cel) {
				// get the cell width and add to array
				var cel_width = cel.getBoundingClientRect().width;
				tbl_2_points.push(tbl_2_points[tbl_2_points.length-1] + cel_width);

				// if this is the last cell in table
				if (tbl_2_points.length == table_cells.length + 1) {
					// there are two versions of the svg styling - lines & fills
					if (document.body.classList.contains('body--projects--lines')) {
						// if this is the lines version, the end width is minus one for stroke
						tbl_1_points[tbl_1_points.length-1] = tbl_width - 1;
						tbl_2_points[tbl_2_points.length-1] = tbl_width - 1;
					} else {
						// if this is the fills version, the end is the same as width
						tbl_1_points[tbl_1_points.length-1] = tbl_width;
						tbl_2_points[tbl_2_points.length-1] = tbl_width;
					}
				}

				// there are two versions of the svg styling - lines & fills
				if (document.body.classList.contains('body--projects--lines')) {
					// if this is the lines version, add cell line
					var line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
					line.setAttribute('x1', tbl_1_points[tbl_2_points.length-1] + .5);
					line.setAttribute('y1', -.5);
					line.setAttribute('x2', tbl_2_points[tbl_2_points.length-1] + .5);
					line.setAttribute('y2', svg_height + .5);
					line.style.stroke = '#333';
					line.style.strokeWidth = '1px';
					svg.appendChild(line);
				} else {
					// if this is the fills version, add cell polygon
					var poly = document.createElementNS('http://www.w3.org/2000/svg', 'polygon');
					poly.setAttribute('points', tbl_1_points[tbl_2_points.length-2]+',0 '+tbl_1_points[tbl_2_points.length-1]+',0 '+tbl_2_points[tbl_2_points.length-1]+','+svg_height+' '+tbl_2_points[tbl_2_points.length-2]+','+svg_height+'');
					// var blackwhite = Math.round(Math.random())*255;
					var blackwhite = 0;
					poly.style.fill = 'rgba('+blackwhite+','+blackwhite+','+blackwhite+','+(Math.random())+')';
					poly.style.stroke = 'none';
					svg.appendChild(poly);
				}

console.log('cell width: ' + cel_width);
			}); // end cycle through cells

			// add the svg between tables
			tbl.before(svg);
			// save previous table points, clear the next table points
console.log('table points: ' + tbl_1_points);
			tbl_1_points = tbl_2_points;
			tbl_2_points = [];

		}; // end if not first table

	}); // end cycle through all tables

}; // end connect_tables function
