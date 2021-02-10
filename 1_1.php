<form  id='pdfForm'  action="1_2.php?V=12" method="post" target="urlClaimedIf"> 
    <input  name='user_id' type='hidden' value='12356'>
</form>

<iframe id='urlClaimedIf' name="urlClaimedIf" style='margin-top:10px;position:relative;width:100%;overflow-y: hidden;' allowFullScreen  frameborder="0"  height="80"  src='1_2.php?V=12'></iframe>

<script>
setTimeout(function(){document.getElementById("pdfForm").submit();  }, 1000);
</script>
