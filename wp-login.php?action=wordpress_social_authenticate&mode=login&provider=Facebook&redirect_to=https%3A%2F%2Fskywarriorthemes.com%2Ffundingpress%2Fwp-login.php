<!DOCTYPE html>
	<head>
		<meta name="robots" content="NOINDEX, NOFOLLOW">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Redirecting... - FundingPress</title>
		<style type="text/css">
			html {
				background: #f1f1f1;
			}
			body {
				background: #fff;
				color: #444;
				font-family: "Open Sans", sans-serif;
				margin: 2em auto;
				padding: 1em 2em;
				max-width: 700px;
				-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.13);
				box-shadow: 0 1px 3px rgba(0,0,0,0.13);
			}
			#loading-screen {
				margin-top: 50px;
			}
			#loading-screen div{
				line-height: 20px;
				padding: 8px;
				background-color: #f2f2f2;
				border: 1px solid #ccc;
				padding: 10px;
				text-align:center;
				box-shadow: 0 1px 3px rgba(0,0,0,0.13);
				margin-top:25px;
			}
		</style>
		<script>
			function init()
			{
				window.location.replace( window.location.href + "&redirect_to_provider=true" );
			}
		</script>
	</head>
	<body id="loading-screen" onload="init();">
		<table width="100%" border="0">
			<tr>
				<td align="center"><img src="https://skywarriorthemes.com/fundingpress/wp-content/plugins/wordpress-social-login/assets/img/loading.gif" /></td>
			</tr>
			<tr>
				<td align="center">
					<div>
						Contacting <b>Facebook</b>, please wait...					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
