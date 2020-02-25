<div class="footer-credit">
  <div class="container">
    <div class="row copyright">
      <div class="col-md-12 center">
        <p class="text-center">&copy; All Rights Reserved. Designed and Developed By <a href="http://softrithm.com" target="_blank">SoftRithm IT Limited</a> </p>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    document.getElementById("chooseLanguage").onchange = function() {langChange()};

    function langChange() {
      var lang = document.getElementById("chooseLanguage").value;
      console.log(document.getElementById("chooseLanguage").value);

      var url = 'home.php';
      var form = $('<form action="' + url + '" method="post">' +
        '<input type="text" name="language" value="' + lang + '" />' +
        '</form>');
      $('body').append(form);
      form.submit();

    }
</script>

</body>
</html>
