<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(function () {
  $('.captcha-image').click(function () {
    $('img[class="captcha-image"]').attr('src',"{{ Captcha::src('flat') }}" + Math.random());
  });
});
</script>