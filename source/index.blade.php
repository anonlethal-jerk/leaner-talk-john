@extends('_layouts.master')

@section('body')
<body class="body--home">
	<div class="cneterd"><img src="/x__x/folder.png" alt="folder" width="355" height="292"></div>
	<div class="cneterd on-top"><img id="folder" src="/x__x/folder-top.png" alt="folder top" width="355" height="292"></div>
@endsection

@section('extra-scripts')
	<script src="/*__*/jquery.min.js"></script>
	<script>
		var boxStart = setTimeout(function(){
			var opener = document.querySelector('#folder');
			var rect = opener.getBoundingClientRect();
			var tTop = rect.top + ((26/292) * (rect.bottom-rect.top));
			var tLeft = rect.left + ((34/355) * (rect.right-rect.left));
			var homer = document.querySelector('#groundhog');
			homer.style.top = tTop+"px";
			homer.style.left = tLeft+"px";
			homer.classList.add('fasthog');
		}, 10);
		var boxStart = setTimeout(function(){
			var homer = document.querySelector('#groundhog');
			homer.classList.remove('fasthog');
			homer.style.opacity = 1;
		}, 100);
	</script>
@endsection
