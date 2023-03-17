<!--interview-->
<section id="home_brain_technology">
    <div class="column-flex home_brain_technology2">
        <div class="home_brain_technology2-1">
            <a href="<?php echo home_url('/'); ?>oem/interview/hashimoto/">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/interview1.jpg" alt="商品部 橋本信" width="100%" height="auto">
            </a>
        </div>
        <div class="home_brain_technology2-2">
            <a href="<?php echo home_url('/'); ?>oem/interview/saito/">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/interview2.jpg" alt="産機部 齋藤智明" width="100%" height="auto">
            </a>
        </div>
        <div class="home_brain_technology2-3">
            <a href="<?php echo home_url('/'); ?>oem/interview/ide/">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/interview3.jpg" alt="産機部 井出一彦" width="100%" height="auto">
            </a>
        </div>
    </div>
    <h2 class="home_brain_technology_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/brain_technology.svg" alt="BRAIN &amp; TECHNOLOGY" width="654" height="52"></h2>
    <h3 class="home_brain_technology_title2">BRAIN &amp; TECHNOLOGY</h3>
    <div class="column-flex home_brain_technology">
        <div class="home_brain_technology1-1">
            <a href="<?php echo home_url('/'); ?>oem/interview/hashimoto/">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/interview1.jpg" alt="商品部 橋本信" width="100%" height="auto">
                <h2>プラスαの機能を<br>実現するには、<br>シンプルでなくては<br>いけない。</h2>
                <h3><span>商品部</span>橋本 信</h3>
            </a>
        </div>
        <div class="home_brain_technology1-2">
            <a href="<?php echo home_url('/'); ?>oem/interview/saito/">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/interview2.jpg" alt="産機部 齋藤智明" width="100%" height="auto">
                <h2>いい仕事をすれば<br>信頼が生まれ、<br>いい仕事をしたいと思えば<br>発想が生まれる。</h2>
                <h3><span>産機部</span>齋藤 智明</h3>
            </a>
        </div>
        <div class="home_brain_technology1-3">
            <a href="<?php echo home_url('/'); ?>oem/interview/ide/">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/interview3.jpg" alt="産機部 井出一彦" width="100%" height="auto">
                <h2>さらにいいものを作るには<br>どうするか―。<br>考えるエンジニアで<br>あり続ける。</h2>
                <h3><span>産機部</span>井出 一彦</h3>
            </a>
        </div>
    </div>
</section>
<script type="text/javascript">
	$(document).ready(function () {
		$(".home_brain_technology1-1").hover(
			function(){
				$(".home_brain_technology2-1").css('opacity', '0.8');
			},
			function(){
				$(".home_brain_technology2-1").css('opacity', '1');
			}
		);
		$(".home_brain_technology1-2").hover(
			function(){
				$(".home_brain_technology2-2").css('opacity', '0.8');
			},
			function(){
				$(".home_brain_technology2-2").css('opacity', '1');
			}
		);
		$(".home_brain_technology1-3").hover(
			function(){
				$(".home_brain_technology2-3").css('opacity', '0.8');
			},
			function(){
				$(".home_brain_technology2-3").css('opacity', '1');
			}
		);
	});
	$(document).ready(function () {
		$(".home_brain_technology2-1").hover(
			function(){
				$(".home_brain_technology1-1").css('opacity', '0.8');
			},
			function(){
				$(".home_brain_technology1-1").css('opacity', '1');
			}
		);
		$(".home_brain_technology2-2").hover(
			function(){
				$(".home_brain_technology1-2").css('opacity', '0.8');
			},
			function(){
				$(".home_brain_technology1-2").css('opacity', '1');
			}
		);
		$(".home_brain_technology2-3").hover(
			function(){
				$(".home_brain_technology1-3").css('opacity', '0.8');
			},
			function(){
				$(".home_brain_technology1-3").css('opacity', '1');
			}
		);
	});
</script>