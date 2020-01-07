


		<div class="col-lg-12">

		<div>
		  <iframe id="cv" src="/files/cv.pdf" style="
				width:100%;
				height:100%;
				border: none;
			"></iframe>
		</div>

		</div>


		<script type="text/javascript">
		  function iframeLoaded() {
		      var iFrameID = document.getElementById('cv');
		      if(iFrameID) {
		            // here you can make the height, I delete it first, then I make it again
		            iFrameID.height = "";
		            iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + "px";
		      }
		  }
		</script>
