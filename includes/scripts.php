<script src="//mcapi.us/scripts/minecraft.js"></script>
<script>
			  MinecraftAPI.getServerStatus('play.thesquadmc.net', {
			    port: 25565 // optional, only if you need a custom port
			  }, function (err, status) {
			    if (err) {
				
			    }
			    // you can change these to your own message!
			    document.getElementById('player-online').innerHTML = status.players.now;
			  });
</script>
<script>
var clipboard = new Clipboard('#copy-ip');
			
clipboard.on('success', function(e) {
				
});
$('#copy-ip').on('click', function () {
swal({
  title: 'IP Copied!',
  customClass: 'ip-copied',
  type: 'success',
  html:
    'Enjoy your time on <strong>play.thesquadmc.net</strong>.',
showConfirmButton: false, 
 showCloseButton: false,
  showCancelButton: false
});
});
</script>