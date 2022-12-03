<?php if(!$indexing) { exit; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<!--

Desenvolvido pela Atualstudio
www.atualstudio.com

          ##########
       ################
    ######          ######
   #####              #####
  ####         ....    ####
 ####        ########  ####
 ####       ########## ####
  ####      ########## ####
  #####       ######## ####
   #####        ****** ####
     ######################
         ################
		 
-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="keywords" content="<?php echo $server_name; ?>, l2, lineage, lineage2, lineage 2, lainiege, laineage, lainiage, lineage dois, lineage ii, <?php echo $server_chronicle; ?>, 1x, 5x, 10x, 30x, 50x, 70x, 100x, 1000x, free fun, diversao gratis, gratuito, gratuitamente, free fun, new server, novo servidor, o melhor servidor de lineage 2, o melhor servidor"/>
<meta name="description" content="<?php echo $server_name; ?>, the best server of Lineage 2 <?php echo $server_chronicle; ?>. Join us for free and play!"/>
<link rel="shortcut icon" href="./imgs/favicon.ico">
<title><?php echo $server_name; ?> - <?php echo $server_chronicle; ?></title>
<link rel="image_src" href="http://<?php echo $server_url; ?>/imgs/image_src.jpg" />
<meta property="og:title" content="<?php echo $server_name; ?> - <?php echo $server_chronicle; ?>" />
<meta property="og:site_name" content="<?php echo $server_name; ?>" />
<meta property="og:url" content="http://<?php echo $server_url; ?>" />
<meta property="og:description" content="<?php echo $server_name; ?>, the best server of Lineage 2 <?php echo $server_chronicle; ?>. Join us for free and play!" />
<meta property="og:type" content="website" />
<meta property="og:image" content="http://<?php echo $server_url; ?>/imgs/image_src.jpg" />

<link rel="stylesheet" type="text/css" href="css/global.css" media="all" />

<script type="text/javascript" src="js/jquery-1.11.3.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/global.js"></script>

<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" media="screen" />

</head>
<body<?php if(isset($_GET['nolayout'])) { echo " class='nolayout'"; }?>>

<?php if($face_on == 1) { ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3&appId=577018195656213";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php } ?>

<?php $conexao = @mysql_connect($host, $user, $pass);
if(substr($gmt, 0, 1) == '-') { $gmtn = substr($gmt, 1); } else { $gmtn = "-".$gmt; } $gmtf = $gmtn*3600;
require_once('engine/ucp_access.php');
if($p == 'ucp' && $ucp_access != 1) { $p = 'index'; }
?>


<div class='all <?php echo $language; ?>'><div>
	
	<div class='langs'><?php $addp = "&url=http://".urlencode($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?>
		<div class='bg'></div>
		<div class='links'>
			<a href='?changelang=en' class='en' title='English' onclick="document.location.replace('./index.php?changelang=en<?php echo $addp; ?>');return false;"></a>
			<a href='?changelang=pt' class='pt' title='Portugu&ecirc;s' onclick="document.location.replace('./index.php?changelang=pt<?php echo $addp; ?>');return false;"></a>
			<a href='?changelang=es' class='es' title='Espa&ntilde;ol' onclick="document.location.replace('./index.php?changelang=es<?php echo $addp; ?>');return false;"></a>
		</div>
	</div>
	
	
	<div class='menu'>
		<a href='./' class='o1'></a>
		<a href='./?page=register' class='o2'></a>
		<a href='./?page=download' class='o3'></a>
		<a href='./?page=info' class='o4'></a>
		<a href='./?page=support' class='o5'></a>
		<a href='./?page=rules' class='o6'></a>
		<a href='./?page=donations' class='o7'></a>
		<a href='./forum' class='o8'></a>
	</div>
	
	
	<div class='content'><div><div>
		<div class='p921'>
			
			
			<? if($p == 'ucp') { ?>
				
					
				<link rel="stylesheet" type="text/css" href="ucp/css.css" media="all" />
				<div class='central ucp'><div><div>
					<div class='page'>
						
						<div style='position:relative;'>
							<h1><?=$LANG[12018];?></h1>
							<a class='ulogout' href='./?page=logout'><?=$LANG[12023];?></a>
						</div>
						
						<?
						$ucpPage = isset($_GET['o']) ? vCode($_GET['o']) : 'index';
						if($ucpPage == 'index') {
							require('ucp/index.php');
						} else {
							$ucpO = '../index';
							if(preg_match("/[a-zA-Z0-9_]/", $ucpPage)) {
								if(file_exists('ucp/pages/'.$ucpPage.'.php')) {
									$ucpO = $ucpPage;
								}
							}
							require('ucp/pages/'.$ucpO.'.php');
						}
						?>
					
					</div>
				</div></div></div>
				
				
			<? } else { ?>
			
				<div class='lateral esq'>
					
					
					<div class='box'>
						
						<div class='title'>
							<div class='sprites_PNG bg'></div>
							<div class='txt t1'></div>
						</div>
						
						<?php if($ucp_access != 1) { ?>
						
							<div class='loginarea'>
								<img src='imgs/loader.gif' style='width:0;height:0;display:none;' />
								<form id='login_form' action='./?login=ucp&nolayout' method='POST'>
									<?php
									if(isset($_GET['lerror'])) {
										echo "<div class='error'>".((intval($_GET['lerror']) == 1) ? $LANG[11979] : $LANG[11990])."</div>";
									}
									?>
									<div style='position:relative;'>
										<input type='text' name='ucp_login' class='iacc' placeholder='Login' title='Username' autocomplete='off' />
										<input type='password' name='ucp_passw' class='iacc' placeholder='Password' title='Password' autocomplete='off' />
										<div class='sprites_PNG acc_icon user'></div>
										<div class='sprites_PNG acc_icon pass'></div>
									</div>
									<a href='?page=forgot' class='ess'><?php echo $LANG[12020]; ?></a>
									<input type='hidden' value='<?php echo md5(uniqid()) ?>' name='ucp_uniqid' id='ucp_uniqid' />
									<input type='hidden' value='' name='ucp_captcha' id='ucp_captcha' />
									<?php if($captcha_cp_on == 1) {
										echo "<input type='button' onclick='opencaptcha();' class='sacc sprites_JPG' value=' ' />";
									} else {
										echo "<input type='submit' class='sacc sprites_JPG' value=' ' />";
									} ?>
								</form>
							</div>
							<div class='anpc'><?php echo $LANG[12019]; ?> <a href='./?page=register'><?php echo $LANG[12077]; ?></a></div>
							
						<?php } else { ?>
							
							<div class='logged'><?php echo $LANG[12021]; ?> <span><?php echo $cookie_user; ?></span></div>
							<a href='./?page=ucp' class='default'>HOME PAGE</a>
							
							<span class='default BSD'><?=$LANG[15000];?>
								<div><div>
									<a class='udefault' href='./?page=ucp&o=changepass'><?=$LANG[12022];?></a>
									<?=($chaemail == 1 ? "<a class='udefault' href='./?page=ucp&o=changemail'>".$LANG[12989]."</a>" : "");?>
								</div></div>
							</span>
							
							<span class='default BSD'><?=$LANG[10004];?>
								<div><div>
									<a class='udefault' href='./?page=ucp&o=forum_account'><?=$LANG[16007];?></a>
									<a class='udefault' href='./forum' target='_blank'><?=$LANG[16008];?></a>
								</div></div>
							</span>
							
							<span class='default BSD'><?=$LANG[12026];?>
								<div><div>
									<a class='udefault' href='./?page=ucp&o=my_screens'><?=$LANG[16010];?></a>
									<a class='udefault' href='./?page=ucp&o=my_videos'><?=$LANG[16011];?></a>
								</div></div>
							</span>
							
							<a class='default' href='./?page=ucp&o=characters_management'><?=$LANG[15001];?></a>
							
							<span class='default BSD'><?=$LANG[15002];?>
								<div><div>
									<a class="udefault" href="./?page=ucp&o=buy_coins"><?=$LANG[10011];?> <?=$coinName_mini;?>'s</a>
									<a class="udefault" href="./?page=ucp&o=transfer_coins"><?=$LANG[10013];?> <?=$coinName_mini;?>'s</a>
									<a class="udefault" href="./?page=ucp&o=my_orders"><?=$LANG[10015];?></a>
								</div></div>
							</span>
							
							<a href='./?page=logout' class='default'><?=$LANG[12023];?></a>
							
						<?php } ?>
						
					</div>
					
					<div class='box support'>
						<div class='title'>
							<div class='sprites_PNG bg'></div>
							<div class='txt t2'></div>
						</div>
						<a href='#'><img src='imgs/chat_ON.png' /></a>
					</div>
					
					<div class='box'>
						<div class='title'>
							<div class='sprites_PNG bg'></div>
							<div class='txt t3'></div>
						</div>
						<a class='donateIndexB' href='./?page=donations'>
							<div class='make'></div>
							<div class='desc sprites_PNG'>Contribua e Ganhe Recompensas</div>
						</a>
					</div>
					
					<div class='box'>
						<div class='title'>
							<div class='sprites_PNG bg'></div>
							<div class='txt t4'></div>
						</div>
						<a href='./?page=oly_heroes' class='default'><?php echo $LANG[12999]; ?></a>
						<a href='./?page=oly_allheroes' class='default'><?php echo $LANG[12025]; ?></a>
						<a href='./?page=oly_rank' class='default'>RANKING</a>
					</div>
					
					<div class='box'>
						<div class='title'>
							<div class='sprites_PNG bg'></div>
							<div class='txt t5'></div>
						</div>
						<div class='gallery_box'><div>
						<?php
						
						$searchIndexGallery = mysql_query("SELECT * FROM ".$db.".site_galeria WHERE g_visivel = '1' ORDER BY g_position ASC LIMIT 6", $conexao);
						
						if(mysql_num_rows($searchIndexGallery) > 0) {
							while($gDados=mysql_fetch_array($searchIndexGallery)) {
								
								if($gDados['g_isvideo'] != '1') {
									echo "
									<a href='".$dir_gallery.$gDados['g_id']."' rel='prettyPhoto[indexGallery]'><div class='img' style='background: transparent url(".$dir_gallery."thumbnail/".$gDados['g_id'].") no-repeat center center'></div><span></span></a>
									";
								} else {
									echo "
									<a href='http://www.youtube.com/watch?v=".$gDados['g_id']."?rel=0' class='iframe' rel='prettyPhoto[indexGallery]'>
									<div class='img isvideo'>
										<div><img src='http://i1.ytimg.com/vi/".$gDados['g_id']."/mqdefault.jpg' width='89' width='50' /></div>
									</div>
									<div class='vplay'></div>
									<span></span></a>
									";
								}
								
							}
						}
						
						for($i=mysql_num_rows($searchIndexGallery), $c=6; $i < $c; $i++) {
							echo "<a href='javascript:void(0)'><span></span></a>";
						}
						
						?>
						</div></div>
						<div class='vermais'>
							<a href='./?page=gallery'><?php echo $LANG[12027]; ?> &raquo;</a>
						</div>
					</div>
					
					
				</div>
				
				
				<div class='central'><div><div>
					<div class='page'>
					<?php
					require('pages/'.$p.'.php');
					?>
					</div>
				</div></div></div>
				
				
				<div class='lateral dir'>
					
					<?php
					if($force_server_status == 'on') { $server_status = 'on'; }
					elseif($force_server_status == 'off') { $server_status = 'off'; }
					else {
						$check_game = @fsockopen(''.$server_ip.'', ''.$gameport.'', $errno, $errstr, 1);
						if($check_game){ $server_status = 'on'; } else { $server_status = 'off'; }
					}
					?>
					<div class='server_status <?php echo $server_status; ?>'><div></div></div>
					
					<?php if($explon == 1) {
						$searchPlayersOnline = mysql_query("SELECT COUNT(*) AS quant FROM ".$db.".characters WHERE online = '1' LIMIT 3000", $conexao);
						$spoFet = mysql_fetch_array($searchPlayersOnline);
						echo "<div class='players_on'><span>".intval($spoFet['quant'])."</span> Players Online</div>"; }
					?>
					
					<div class='box'>
						<div class='title'>
							<div class='sprites_PNG bg'></div>
							<div class='txt t6'></div>
						</div>
						<a href='http://www.top100arena.com/in.asp?id=95875' class='default'>TOP SERVER 100</a>
						<a href='https://www.topgs200.com/?in=1214' class='default'>GAMESTop 200</a>
						<a href='https://www.gamestop200.com/details/264/vote' class='default'>GAMESTop 200</a>
					</div>
					
					<a href='./?page=boss' class='specialb sprites_JPG boss'></a>
					<a href='./?page=siege' class='specialb sprites_JPG siege' style='margin-bottom:20px;'></a>
					
					<div class='box'>
						<div class='title'>
							<div class='sprites_PNG bg'></div>
							<div class='txt t7'></div>
						</div>
						<div class='indexRank'>
							<?php
							$indexPVP3 = mysql_query("SELECT char_name, pvpkills FROM ".$db.".characters WHERE accesslevel = '0' ORDER BY pvpkills DESC, char_name ASC LIMIT 3", $conexao);
							if(mysql_num_rows($indexPVP3) > 0) {
								$i=1;
								while($qData=mysql_fetch_array($indexPVP3)) {
									echo "<div>".$i."&ordm;&nbsp;&nbsp; ".$qData['char_name']." <span>".$qData['pvpkills']." pvps</span></div>";
									$i++;
								}
							}
							?>
						</div>
						<div class='vermais'>
							<a href='./?page=toppvp'><?php echo $LANG[12027]; ?> &raquo;</a>
						</div>
					</div>
					
					<div class='box'>
						<div class='title'>
							<div class='sprites_PNG bg'></div>
							<div class='txt t8'></div>
						</div>
						<div class='indexRank'>
							<?php
							$indexPK3 = mysql_query("SELECT char_name, pkkills FROM ".$db.".characters WHERE accesslevel = '0' ORDER BY pkkills DESC, char_name ASC LIMIT 3", $conexao);
							if(mysql_num_rows($indexPK3) > 0) {
								$i=1;
								while($qData=mysql_fetch_array($indexPK3)) {
									echo "<div>".$i."&ordm;&nbsp;&nbsp; ".$qData['char_name']." <span>".$qData['pkkills']." pks</span></div>";
									$i++;
								}
							}
							?>
						</div>
						<div class='vermais'>
							<a href='./?page=toppk'><?php echo $LANG[12027]; ?> &raquo;</a>
						</div>
					</div>
					
					<div class='box'>
						<div class='title'>
							<div class='sprites_PNG bg'></div>
							<div class='txt t9'></div>
						</div>
						<div class='indexRank'>
							<?php
							$indexCLAN3 = mysql_query("
							SELECT
								C1.clan_name,
								C1.clan_level,
								P.char_name,
								(SELECT COUNT(*) FROM ".$db.".characters WHERE clanid = C1.clan_id) AS membros
							FROM
								".$db.".clan_data AS C1
							LEFT JOIN
								".$db.".characters AS P ON P.charId = C1.leader_id
							ORDER BY
								C1.clan_level DESC, C1.reputation_score DESC, membros DESC
							LIMIT 3", $conexao);
							if(mysql_num_rows($indexCLAN3) > 0) {
								$i=1;
								while($qData=mysql_fetch_array($indexCLAN3)) {
									echo "<div>".$i."&ordm;&nbsp;&nbsp; ".$qData['clan_name']." <span>lv ".$qData['clan_level']."</span></div>";
									$i++;
								}
							}
							?>
						</div>
						<div class='vermais'>
							<a href='./?page=topclan'><?php echo $LANG[12027]; ?> &raquo;</a>
						</div>
					</div>
					
					
				</div>
			
			<? } ?>
			
		</div>
	</div></div></div>
	
	<script type='text/javascript'>
		$(document).ready(function(){
			var lateralESQ = ($('.lateral.esq').height());
			var lateralDIR = ($('.lateral.dir').height());
			var centralH = ($('.central .page').height());
			if(lateralDIR > lateralESQ && lateralDIR > centralH) {
				$('.central .page').css({ 'min-height': ''+(lateralDIR-62)+'px' })
			} else if(lateralDIR < lateralESQ && lateralESQ > centralH) {
				$('.central .page').css({ 'min-height': ''+(lateralESQ-62)+'px' })
			}
		});
	</script>
	
	<div class='rodape'>
		&copy; <?php echo date('Y'); ?> <?php echo $server_name; ?> - All rights reserved
		<a class='atualstudio sprites_PNG' href='http://www.atualstudio.com' title='<?php echo $LANG[12028]; ?>' target='_blank'></a>
	</div>
	
	
</div></div>

<div id='backblack' style='display:none;'></div>
<div id='loginmodal'></div>

<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" charset="utf-8">$(document).ready(function(){ $("a[rel^='prettyPhoto']").prettyPhoto({ theme: 'atualstudio', social_tools: '', markup: '<div class="pp_pic_holder"><div class="ppt">&nbsp;</div><div class="pp_top"><div class="pp_left"></div><div class="pp_middle"></div><div class="pp_right"></div></div><div class="pp_content_container"><div class="pp_left"><div class="pp_right"><div class="pp_content"><div class="pp_loaderIcon"></div><div class="pp_fade"><a href="#" class="pp_expand" title="Expand the image">Expand</a><div class="pp_hoverContainer"><a class="pp_next" href="#">next</a><a class="pp_previous" href="#">previous</a></div><div id="pp_full_res"></div><div class="pp_details"></div></div></div></div></div></div><div class="pp_bottom"><div class="pp_left"></div><div class="pp_middle"></div><div class="pp_right"></div></div></div><div class="pp_overlay"></div>' }); });</script>

<input type='hidden' id='l11015' value='<?php echo ($LANG[11015]); ?>' /><input type='hidden' id='l11016' value='<?php echo ($LANG[11016]); ?>' /><input type='hidden' id='l11017' value='<?php echo ($LANG[11017]); ?>' /><input type='hidden' id='l11018' value='<?php echo ($LANG[11018]); ?>' />

</body>
</html>

<?php @mysql_close($conexao); ?>