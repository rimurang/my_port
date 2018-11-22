<!-- #portfol_wrp (S) -->
<div id="portfol_wrp" class="subp">
                <div class="contain">
                    <h2>김혜림 포트폴리오</h2>
                    <ul class="port_list clfix">
    					<?     
							$plst = file_get_contents('proj_list_txt.txt');
							$orinco = mb_detect_encoding($plst);

							$convinco =  substr( nl2br(mb_convert_encoding($plst, 'UTF-8', $orinco)),0,-1);
				            $lstsplit = explode("\n",$convinco);

				            foreach($lstsplit as $cnt => $line) {

				            	$lstarr = explode(",",$line);
							    $lstarr[4] = str_replace('<br />','',$lstarr[4]);
							    $dir = "images/portfol";
								$handle  = opendir($dir);
								$files = array();
								 
								// 디렉터리에 포함된 파일을 저장함
								while (false !== ($filename = readdir($handle))) {
								    if($filename == "." || $filename == ".."){
								        continue;
								    }
								    // 파일인 경우만 목록에 추가함
								    if(is_file($dir . "/" . $filename)){
								        $files[] = $filename;
								    }
								}
								closedir($handle);
								// 정렬, 역순으로 정렬하려면 rsort 사용
								rsort($files);
								$imgviw = $files[$cnt];

								$bkcolor = '';
								$star0 = $lstarr[0];
				                if(strstr($star0,'구현') == "구현"){ // 0은 일요일
				                    $bkcolor = 'style="background-color:#ee3700"';
				                }
				                if(strstr($star0,'유지보수') == "유지보수"){ // 6은 토요일
				                    $bkcolor = 'style="background-color:#5d5d8b"';
				                }
								if(strstr($star0,'디자인') == "디자인"){
									$bkcolor = 'style="background-color:#00b279"';
								}
				        ?>
<li>
			        		<a href="<?=$lstarr[4]?>" class="dirlink" title="<?=$lstarr[2]?>" target="_blank">
								<img src="images/portfol/<?=$imgviw?>" alt="<?=$lstarr[2]?>" class="pjimg">
								<? 

									
								?>
					            <p class="pj_type"><em <?=$bkcolor?>><?=$lstarr[0]?></em><br> <?=$lstarr[1]?></p>
					            <p class="pj_tit"><?=$lstarr[2]?></p>
					            <em class="pj_date"><?=$lstarr[3]?></em>
				        	</a>
				        </li>
				        
				        <? } ?>
</ul>
                </div>
            </div>
            <!-- #portfol_wrp (E) -->
