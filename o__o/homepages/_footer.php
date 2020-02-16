		<a href="/index-list.php" class="" id="groundhog" style="display:block;position: fixed;top: 16px;left: 16px;z-index: 9999;background-color: #000;color: #fff;padding: 1rem 1.25rem;box-shadow: 0 0 30px 5px #c71123;font-size: 20px;transition: top 10s, left 10s, box-shadow 10s;">HOME</a>

		<script type="text/javascript">
			// No more clicks
			// from: https://stackoverflow.com/questions/12456890/for-each-link-where-href-equals-myvalue
			$('a').each(function(index, element) {
				if($(element).attr("href") == "#linkrot") {
					$(element).click(function(event) {
						$(element).html("<b>LINK ROT</b>"); // Change this to .html()
						event.preventDefault();
					});
				}
			});
			// move that home button around
			setInterval(function(){
				var tTop = Math.random()*(window.innerHeight - document.getElementById("groundhog").offsetHeight);
				var tLeft = Math.random()*(window.innerWidth - document.getElementById("groundhog").offsetWidth);
				var tRed = Math.random()*255;
				var tGreen = Math.random()*255;
				var tBlue = Math.random()*255;
				var homer = document.querySelector('#groundhog');
				homer.style.top = tTop+"px";
				homer.style.left = tLeft+"px";
				homer.style.boxShadow = "0 0 30px 5px rgb("+tRed+" "+tGreen+" "+tBlue+")";
			}, 10000);
		</script>

	</body>
</html>
