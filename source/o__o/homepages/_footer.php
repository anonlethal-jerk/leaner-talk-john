        <nav id="groundhog"><a href="/index-list.php">JK</a></nav>

        <script src="/*__*/global.js" async=""></script>
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
        </script>

    </body>
</html>
