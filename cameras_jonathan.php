<!DOCTYPE html>

<html lang="pt-br">


	<head>
		<meta charset="UTF-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="estiloCamera.css">
	</head>
	
	<body>
		<center>
			 
<?php 
	include_once("../validaLink.php"); 
?>
			<div class="titulo">
				<h1 class="tituloSessao"> Apet Hotel</h1>
			</div>
			<section>	
				
				<div id="cam1" class="col-md-6 col-sm-12">
					<OBJECT classid="clsid:9BE31822-FDAD-461B-AD51-BE1D1C159921" codebase="http://downloads.videolan.org/pub/videolan/vlc/latest/win32/axvlc.cab" id="vlc" events="True">  
						<param name="Src" value="rtsp://admin:INC357@192.168.15.199:8081/cam/realmonitor?channel=<?php echo $cam1;?>&subtype=0" />  
						<param name="ShowDisplay" value="True" />  
						<param name="AutoLoop" value="False" />  
						<param name="AutoPlay" value="True" />  
						<embed id="vlcEmb" type="application/x-google-vlc-plugin" version="VideoLAN.VLCPlugin.2" autoplay="yes" loop="no" target="rtsp://admin:INC357@192.168.15.199:8081/cam/realmonitor?channel=<?php echo $cam1;?>&subtype=0" ></embed>  
					</OBJECT>
				</div>


				<div id="cam2" class="col-md-6 col-sm-12">
					<OBJECT classid="clsid:9BE31822-FDAD-461B-AD51-BE1D1C159921" codebase="http://downloads.videolan.org/pub/videolan/vlc/latest/win32/axvlc.cab" id="vlc" events="True">  
						<param name="Src" value="rtsp://admin:INC357@192.168.15.199:8081/cam/realmonitor?channel=<?php echo $cam2;?>&subtype=0" />  
						<param name="ShowDisplay" value="True" />  
						<param name="AutoLoop" value="False" />  
						<param name="AutoPlay" value="True" />  
						<embed id="vlcEmb" type="application/x-google-vlc-plugin" version="VideoLAN.VLCPlugin.2" autoplay="yes" loop="no" target="rtsp://admin:INC357@192.168.15.199:8081/cam/realmonitor?channel=<?php echo $cam2;?>&subtype=0" ></embed>  
					</OBJECT>
				</div>
				<?php 
					if($cam3 != null)
					{
						echo "<div id='cam3' class='col-md-6 col-sm-12'>
							<OBJECT classid='clsid:9BE31822-FDAD-461B-AD51-BE1D1C159921' codebase='http://downloads.videolan.org/pub/videolan/vlc/latest/win32/axvlc.cab' id='vlc' events='True'>  
								<param name='Src' value='rtsp://admin:INC357@192.168.15.199:8081/cam/realmonitor?channel=$cam3&subtype=0' />  
								<param name='ShowDisplay' value='True' />  
								<param name='AutoLoop' value='False' />  
								<param name='AutoPlay' value='True' />  
								<embed id='vlcEmb' type='application/x-google-vlc-plugin' version='VideoLAN.VLCPlugin.2' autoplay='yes' loop='no' target='rtsp://admin:INC357@192.168.15.199:8081/cam/realmonitor?channel=$cam3&subtype=0' ></embed>  
							</OBJECT>
						</div>";
					}
				 ?>
				


			</section>
		</center>



		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>



